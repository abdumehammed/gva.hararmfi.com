<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Harar Microfinance Institute S.C.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <style>
        /* Default size for desktop */
        .logo {
            max-width: 100px;
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .logo {
                max-width: 80px;
            }
        }
    </style>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="scss/bootstrap.css" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/snowflake.css"> -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--tab icon  -->
    <link rel="icon" type="image/png" href="img/logo.png" />
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>

<body>

 <!-- Topbar Start -->
        <?php
        include 'Assets/includes/topbar.php';
        ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->

 <?php
        include 'Assets/includes/header.php';
        ?>
   <!-- Navbar & Hero End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Existing structure -->
    <div class="container-fluid bg-dark">

        <div class="container text-center py-3" style="max-width: 900px;">
            <h4 class="text-white display-6 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        </div>
        <div class="container">
            <!-- Tab Buttons -->
            <div class="tab-buttons">
                <button class="tab-button active" data-tab="tab1">Who we are</button>
                <button class="tab-button" data-tab="tab2">Our Team</button>
            </div>

            <!-- Tab Content -->
        </div>

    </div>

    <!-- Tab Section -->
    <div class="container" style="font-size: smaller;">
        <div class="my-4">

            <div class=" tab-content active" id="tab1">
                <div class="about-us">
                    <h5 class="text-primary display-7 "><br>Company Profile <br><br></h5>
                    <p class=" text-justify">

                        Harar Credit and Saving Institution S.C was established in 2005 G.C. with the mission of
                        supporting micro and small-scale businesses in Harari Regional State. Founded by Harari Regional
                        State along with seven other visionary shareholders, the institution started with an initial
                        capital of 1,000,000 birr and officially began operations in September 2005.
                    </p>
                    <p class="text-justify">
                        Since its inception, the institution has expanded its services, opening three branch offices.
                        Initially offering two loan products Group Loans and MSE Loans the institution now provides more
                        than Twenty one diversified loan products, responding to the growing demand for its services.
                    </p>
                    <p class="text-justify">
                        We have 18 years of operation and a well-established customer base of more than 14,160 active
                        customers. We manages a substantial asset value of 429 million and boasts a paid-up capital of
                        302 million. Our company operates with a skilled workforce of over 45 employees across 4
                        branches, contributing to its continued growth and success.
                    </p>

                </div>
                <h5 class="text-primary display-7"><br>Mission , Vision and Core values</h5>
                <div class="container-fluid feature bg-light py-3">

                    <div class="container py-0">
                        <div class=" text-center row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-item p-4 pt-1">
                                    <div class=" service-img">
                                        <img src="img/vision1.webp" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <h4 class="mb-4">Vision</h4>
                                    <p class="mb-4 text-justify ">The vision of Harar Microfinance S.C is to see that
                                        poverty is eradicated and productive poor,
                                        especially women are empowered through sustainable micro enterprises. <br><br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-item p-4 pt-1">
                                    <div class=" service-img">
                                        <img src="img/mission1copy.webp" loading="lazy"
                                            class="img-fluid rounded-top w-100" alt="">
                                    </div>
                                    <h4 class="mb-4">Mission</h4>
                                    <p class="mb-4 text-justify ">To serve the entrepreneurial poor by providing
                                        sustainable and quality services for employment
                                        and income generation with the ultimate objective of improving the livelihood of
                                        poor people in
                                        both rural and urban areas of the country by bridging the gap in financial
                                        inclusion
                                    </p>
                                </div>
                            </div>
                            <div class="text-left col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-item p-2 pt-1">
                                    <div class="service-img">
                                        <img src="img/corevalues1copy.webp" loading="lazy"
                                            class="img-fluid rounded-top w-100" alt="Core Values">
                                    </div>
                                    <h4 class="mb-4">Core Values</h4>
                                    <div class="row text-lg-start ">
                                        <div class="col-7 p-4 pt-1">
                                            <ul style="text-align: left;" class="list-unstyled  ">

                                                <li style="color:inherit">1. Women Focused</li>
                                                <li>2. Quality Service </li>
                                                <li>3. Inclusiveness </li>
                                                <li>4. Client Centricity</li>
                                                <li>5. Social Responsibility</li>
                                            </ul>
                                        </div>
                                        <div class="mb-4 col-5">
                                            <ul style="text-align: left;" class="white list-unstyled">
                                                <li>6. Transparency</li>
                                                <li>7. Saving Led</li>
                                                <li>8. Accountability</li>
                                                <li>9. Commitment</li>
                                                <li>10. Teamwork</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>





            <div class="tab-content" id="tab2">
                <!-- Team Start -->
                <div class="container-fluid team pb-5">
                    <div class="container pb-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                            style="max-width: 800px;">
                            <h4 class="text-primary"> <br></h4>
                            <h1 class="display-4 text-primary mb-4">Meet our Top Management</h1>
                            <p class="mb-0"></p>
                        </div>
                        <div class="row g-4">
                            <div class="mx-auto col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>

                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Eliyas Yalew</h4>
                                        <p class="mb-0">Chief Executive Officer</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid team pb-5">
                    <div class="container pb-5">

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Ms Hiwot Kebede </h4>
                                        <p class="mb-0">Credit and Portfolio Dep't</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Kidanu Mekonnen</h4>
                                        <p class="mb-0">Finance and Investement Dep't</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Yacob Habtu</h4>
                                        <p class="mb-0">IT Division</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">

                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Daniel Semu</h4>
                                        <p class="mb-0">Human Capital & admin dep't</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team End -->
                <!-- Team Start -->
                <div class="container-fluid team pb-5">
                    <div class="container pb-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                            style="max-width: 800px;">
                            <h4 class="text-primary"> <br></h4>
                            <h1 class="display-4 text-primary mb-4">HMFI Board </h1>
                            <p class="mb-0"></p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Muhidin Ahmed</h4>
                                        <p class="mb-0">Chairperson of the BOD</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Yusuf Ferege</h4>
                                        <p class="mb-0"> Board Secretary</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr.Mohammed Yahya</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">

                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Nebil Yusuf</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid team pb-5">
                    <div class="container pb-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                            style="max-width: 800px;">


                            <p class="mb-0"></p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Ms.Remzia A/wehib</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0"> Mr. Abdulhakim Abdi</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Ayub Ahmed</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">

                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Muktar Sahli</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">

                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Nuredin Yeshaq</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="img/team-1.jpg" loading="lazy" class="img-fluid rounded-top w-100"
                                            alt="">

                                    </div>
                                    <div class="team-title p-4">
                                        <h4 class="mb-0">Mr. Usmael Yusuf</h4>
                                        <p class="mb-0">Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Footer Start -->
     <?php include 'Assets/includes/footer.php'; ?>
         <!-- Footer Start -->



    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/tab.js"></script>
    <!--  <script src="js/snowflake.js"></script> -->
    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6811eb2400e88619103f2de7/1iq2vt1rr';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> -->
    <!--End of Tawk.to Script-->
</body>

</html>