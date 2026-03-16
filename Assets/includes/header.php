    <!-- Topbar Start -->
        <?php
        include 'Assets/includes/topbar.php';
        ?>
    <!-- Topbar End -->
<?php
// Detect current page
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<div class="container-fluid nav-bar px-0 px-lg-1 py-lg-0">
    <div class="container" style="justify-content:space-evenly">
        <nav style="padding: 0px" class="navbar navbar-expand-lg navbar-light">
            <!-- Logo and Institution Name aligned left -->
            <a href="#" class="d-flex align-items-center">
                <img class="logo" src="img/logotrasparent.png" loading="lazy" alt="Logo" />
                <h4 class="text-primary text-uppercase fw-bold px-lg-1 py-lg-1 mb-0 text-center ms-2">
                    Harar Microfinance <br />
                    Institution S.C.
                </h4>
            </a>

            <!-- Toggle button for mobile view -->
            <button style="padding: 1px; border: none" class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Navbar Links aligned to the right -->
            <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <!-- Home -->
                    <a href="index.php" class="nav-item nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>">
                        Home
                    </a>
                    

                    <!-- About -->
                    <a href="about.php" class="nav-item nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>">
                        About
                    </a>

                    <!-- Products & Services Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#"
                           class="nav-link dropdown-toggle <?= in_array($currentPage, ['saving.php','loan.php','islamic.php']) ? 'active' : '' ?>"
                           data-bs-toggle="dropdown">
                            Products & Services
                        </a>
                        <div class="dropdown-menu">
                            <a href="saving.php"
                               class="dropdown-item <?= ($currentPage == 'saving.php') ? 'active' : '' ?>">
                                Saving Products
                            </a>
                            <a href="loan.php"
                               class="dropdown-item <?= ($currentPage == 'loan.php') ? 'active' : '' ?>">
                                Loan Products
                            </a>
                            <a href="islamic.php"
                               class="dropdown-item <?= ($currentPage == 'islamic.php') ? 'active' : '' ?>">
                                Islamic Products
                            </a>
                        </div>
                    </div>

                    <!-- About -->
                    <a href="news.php" class="nav-item nav-link <?= ($currentPage == 'news.php') ? 'active' : '' ?>">
                        News
                    </a>
                    <!-- Contact Us -->
                    <a href="contact.php"
                       class="nav-item nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>">
                        Contact Us
                    </a>

                    <!-- Loan Calculator Button (only on homepage and loan page) -->
                    <?php if (in_array($currentPage, ['index.php', 'loan.php'])): ?>
                        <button id="open-modal">Loan Calculator</button>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Optional JS for language change if needed -->
<script>
function changeLanguage(language) {
    const selected = document.getElementById('selected-lang');
    if (selected) selected.textContent = language;
}

// Optional: safe JS for Loan Calculator button
const loanBtn = document.getElementById('open-modal');
if (loanBtn) {
    loanBtn.addEventListener('click', () => {
        // your modal open code here
        console.log('Loan Calculator opened');
    });
}
</script>
