<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);

    // helper to send JSON for AJAX requests
    $send_json = function ($payload, $status = 200) {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($payload);
        exit();
    };

    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? 'Contact Form'));
    $message = htmlspecialchars(trim($_POST['message']));

    // reCAPTCHA verification helper using cURL (more reliable than file_get_contents)
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? null;
    $verifyRecaptcha = function ($token) {
        $secret = getenv('RECAPTCHA_SECRET');
        if (!$secret) return ['ok' => true, 'skipped' => true]; // not configured

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = http_build_query(['secret' => $secret, 'response' => $token]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        curl_close($ch);

        if ($resp === false) return ['ok' => false, 'error' => 'recaptcha_network', 'detail' => $err];
        if ($code !== 200) return ['ok' => false, 'error' => 'recaptcha_http', 'http_code' => $code, 'detail' => $resp];

        $json = json_decode($resp, true);
        if (!($json['success'] ?? false)) return ['ok' => false, 'error' => 'recaptcha_failed', 'detail' => $json['error-codes'] ?? null, 'raw' => $json];

        return ['ok' => true, 'raw' => $json];
    };

    if ($recaptchaResponse) {
        $vr = $verifyRecaptcha($recaptchaResponse);
        if (!($vr['ok'] ?? false)) {
            error_log('reCAPTCHA verification failed: ' . json_encode($vr));
            if ($isAjax) $send_json(['success' => false, 'error' => $vr['error'] ?? 'recaptcha_failed'], 403);
            header("Location: contact.php?success=false&error=recaptcha_failed");
            exit();
        }
    }

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        if ($isAjax) $send_json(['success' => false, 'error' => 'missing_fields'], 400);
        header("Location: contact.php?success=false&error=missing_fields");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($isAjax) $send_json(['success' => false, 'error' => 'invalid_email'], 400);
        header("Location: contact.php?success=false&error=invalid_email");
        exit();
    }

    // Prepare common mail variables early so tests / dry-run can inspect them
    $fromEmail = getenv('FROM_EMAIL') ?: 'contactcenter@hararmfi.com';
    $fromName  = getenv('FROM_NAME') ?: 'Harar MFI Contact Center';
    $toEmail   = getenv('TO_EMAIL') ?: 'contactcenter@hararmfi.com';

    // Dry-run mode: if POST param 'dry_run' is set to 1 or DRY_RUN env var is true, skip sending
    $dryRun = (isset($_POST['dry_run']) && $_POST['dry_run'] == '1') || (getenv('DRY_RUN') && filter_var(getenv('DRY_RUN'), FILTER_VALIDATE_BOOLEAN));
    if ($dryRun) {
        $preview = [
            'to' => $toEmail,
            'from' => $fromEmail,
            'subject' => $subject,
            'message' => $message,
        ];
        if ($isAjax) $send_json(['success' => true, 'dry_run' => true, 'preview' => $preview], 200);
        echo "<html><body><h1>DRY RUN</h1><pre>" . htmlspecialchars(json_encode($preview, JSON_PRETTY_PRINT)) . "</pre></body></html>";
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings: read from environment when available (do NOT commit secrets)
        $mail->SMTPDebug  = SMTP::DEBUG_OFF;                       // Disable debug output
        $mail->isSMTP();                                           // Use SMTP
        $mail->Host       = getenv('SMTP_HOST') ?: '213.55.96.132';                      // SMTP server
        $mail->SMTPAuth   = filter_var(getenv('SMTP_AUTH') ?: true, FILTER_VALIDATE_BOOLEAN);                                  // Enable SMTP auth
        $mail->Username   = getenv('SMTP_USER') ?: 'contactcenter@hararmfi.com';      // SMTP username
        $mail->Password   = getenv('SMTP_PASS') ?: 'test@987';                            // SMTP password (do NOT commit real secrets)
        $mail->SMTPSecure = getenv('SMTP_SECURE') ?: PHPMailer::ENCRYPTION_SMTPS;          // SSL encryption
        $mail->Port       = getenv('SMTP_PORT') ?: 465;                                   // SSL port

        // Recipients
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($toEmail, 'Recipient Name'); 
        $mail->addReplyTo($email, $name);  // So replies go to the user

        // Optional CCs from env variable (comma separated)
        $ccs = getenv('CC_EMAILS');
        if ($ccs) {
            foreach (explode(',', $ccs) as $cc) {
                $cc = trim($cc);
                if ($cc) $mail->addCC($cc);
            }
        } else {
            // Keep existing CCs if env not set
            $mail->addCC('eliyas.yalew@hararmfi.com');
            $mail->addCC('yacobhabtu@hararmfi.com');
            $mail->addCC('yaqob.habtu@hararmfi.com');
        }

        // Email content
        $mail->isHTML(true);  
        $mail->Subject = $subject;
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nMessage:\n{$message}";

        // Send email
        $mail->send();
        if ($isAjax) {
            $send_json(['success' => true], 200);
        }
        header("Location: contact.php?success=true");
        exit();

    } catch (Exception $e) {
        error_log('Mail send failed: ' . ($mail->ErrorInfo ?? $e->getMessage()));
        if ($isAjax) {
            $send_json(['success' => false, 'error' => $mail->ErrorInfo ?? 'send_failed'], 500);
        }
        header("Location: contact.php?success=false&error=" . urlencode($mail->ErrorInfo));
        exit();
    }
} else {
    // Invalid request method
    $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);
    if ($isAjax) { header('Content-Type: application/json'); http_response_code(405); echo json_encode(['success' => false, 'error' => 'invalid_request']); exit(); }
    header("Location: contact.php?success=false&error=invalid_request");
    exit();
}
