<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Harar Microfinance Institute S.C.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="scss/bootstrap.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <!--tab icon  -->
    <link rel="icon" type="image/png" href="img/logo.png" />

    <!--     <style>

    </style> -->
    <style>
        button {
            padding: 10px 20px;
            background-color: #DE6726;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logo {
            max-width: 100px;
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .logo {
                max-width: 80px;
            }
        }

        button:hover {
            background-color: #218838;
        }

        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 70%;

            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .close {
            float: right;
            font-size: 24px;
            cursor: pointer;
            margin-top: -10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label,
        input {
            margin-top: 10px;
        }

        input {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        #results {
            margin-top: 20px;
        }

        h3 {
            margin-top: 10px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            padding: 1em;
            /* Adjust as needed */
        }

        /* Main container styling */
        .tab-container {
            margin: 20px;
        }

        /* Flexbox row layout for larger screens */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Tab styling */
        .tabs {
            list-style: none;
            padding: 0;
            cursor: pointer;
        }

        .tab {
            padding: 10px 20px;
            background-color: #f1f1f1;

            margin-bottom: 5px;
            border-radius: 4px;
        }

        /* Active tab styling */
        .tab.active {
            background-color: white;
            border-left: 5px solid #DE6726;
            border-radius: 1px;

        }

        /* Content container */
        .tab-content-container {

            padding: 20px;
            width: 100%;
        }

        /* Hide non-active tab content */
        .tab-content {
            display: none;
        }

        /* Show active tab content */
        .tab-content.active {
            display: block;
        }

        /* Media query for mobile view */
        @media (max-width: 768px) {

            /* Make the row stack vertically */
            .row {
                flex-direction: column;
            }

            /* Ensure tabs stack vertically on mobile */
            .tabs {
                display: block;
                width: 100%;
            }

            .tab {
                margin-right: 0;
                margin-bottom: 5px;
                width: 100%;
            }
        }
    </style>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>




    <!-- Navbar & Hero Start -->

 <?php
        include 'Assets/includes/header.php';
        ?>
   <!-- Navbar & Hero End -->


    <!-- Existing structure -->
    <div class="container-fluid bg-dark">
        <div class="container text-center py-3" style="max-width: 900px">
            <h4 class="text-white display-6 wow fadeInDown" data-wow-delay="0.1s">
                Loan Products
            </h4>
        </div>

    </div>
    <div class="container">

        <!-- FAQs Start -->

        <div class="container-fluid faq-section bg-light py-1">
            <div class="container py-1">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-3">
                                <h1 class="display-4 mb-0">
                                    <!-- Common Frequently Asked Questions -->
                                </h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            General Agriculture Loan
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            <div>
                                                <img class="img-fluid  center rounded w-50" loading="lazy"
                                                    src="img/AGRICULTURAL_LOAN.webp" alt="Agricultural loan">
                                            </div>
                                            These loans are extended to farmers to finance primary agricultural
                                            production activities and are aimed at helping farmers to enhance
                                            productivity. Irrespective of the agricultural activity financed, the loan
                                            terms and conditions are similar (non-distinctive features in terms of loan
                                            period, interest rates, and grace period and repayment patterns).
                                            Agricultural loan can be animal fattening, dairy cow development, sheep and
                                            goat raring, improved seed and fertilizer, small scale irrigation and
                                            vegetable cultivation, tractors hiring for mechanized cultivation and
                                            farming, Other agricultural activities.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Clean Energy Loan
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div>
                                            <img class="img-fluid rounded center" loading="lazy"
                                                src="img/renewable.jpeg" alt="Agricultural loan">
                                        </div>
                                        <div class="accordion-body">
                                            The Clean Energy Loan will enable customer improve the quality of life by
                                            enabling access affordable, cost saving, environmentally friendly solar
                                            systems, briquette stoves, water purifiers and solar LED lamps. Harar MFI
                                            will partner with solar solutions provider company to reach last-mile rural
                                            households to offer loans to those who normally cannot afford to pay in cash
                                            for solar systems.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Housing Loan
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div>
                                            <img class="img-fluid rounded center" loading="lazy"
                                                src="img/houseloan.webp" alt="Housing loan">
                                        </div>
                                        <div class="accordion-body">
                                            Housing loan consists mainly of loans to low-income people for renovation or
                                            expansion of an existing home, addition of new rooms, construction of a new
                                            home and land acquisition. To date, most of the successes in this new field
                                            have been with home improvement loans.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            School Fees Loan (SFL)
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div>
                                            <img class="img-fluid rounded center" loading="lazy" src="img/sfl.jpeg"
                                                alt="Agricultural loan">
                                        </div>
                                        <div class="accordion-body">
                                            This loan enables a parent or guardian or student to access funds to clear
                                            school fees at once and pay later in manageable installments.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Youth Loan
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div>
                                            <img class="img-fluid rounded center" loading="lazy"
                                                src="img/youth_loan.jpg" alt="Youth loan">
                                        </div>
                                        <div class="accordion-body">
                                            Youth Loan provides access to financial services to young entrepreneurs and
                                            youth-friendly enterprises in Harari region. HMFI will provide youth with
                                            access to loans by demanding collateral.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            Mortgage & Asset Financing Loan (MAFL)
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <img class="img-fluid rounded center" loading="lazy" src="img/asset.jpg"
                                            alt=" Mortgage & Asset Financing Loan (MAFL) ">
                                        <div class="accordion-body">
                                            This loan enables customers to acquire their desired assets without paying
                                            for them all at once. Finances the acquisition of assets that generate
                                            income and the assets financed form part of the security for the loan.


                                        </div>
                                    </div>
                                </div>
                                <!-- Additional Questions -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            Solidarity Group Based Loan (SGBL)
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Here the Solidarity Group must have not less than five (5) or more than
                                            thirty (30) members, who must know each other and voluntarily form the
                                            group. Their domicile must be in a single geographical area, where they
                                            conduct their activities, so that the group can be monitored.
                                            SGBL is a microloan that self-organized groups in rural and urban settings
                                            are eligible to borrow through group liability. It targets all segments of
                                            low income population but mainly women and unemployed youths.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">
                                            Business Loan
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            This loan offers a fast and secure means of boosting an individual’s income.
                                            It is ideal for all entrepreneurs engaged in income generating activities
                                            and would like to grow their businesses.
                                            Decisive Loans: This will also be another option. A Trade-Loan designed for
                                            micro businesses clients who are already into some form of trade and wish to
                                            augment their working capital. The duration will be just for months.


                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="false" aria-controls="collapseNine">
                                            Emergency Loan
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The Emergency Loan is designed to offer clients an avenue to access
                                            additional financing in times of distress while also allowing them to
                                            maintain good standing with HMFI. This timely financial assistance refrains
                                            the members from resorting to other informal sources of money, which are
                                            very expensive.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                            aria-expanded="false" aria-controls="collapseTen">
                                            Consumption loan
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse"
                                        aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Consumption loans shall be extended for households who want to purchase
                                            house equipment, furniture,
                                            and other items that have no production cycles or market-added value. The
                                            loan will be extended through
                                            well-recognized organizations/companies' permanent employees' salary
                                            guarantees. The principal and interest
                                            shall be collected in equal installments over the loan period.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                            aria-expanded="false" aria-controls="collapseEleven">
                                            Women Entrepreneurs Development Program Loan (WEDP)
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse"
                                        aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            WEDP is a project providing training and credit to micro and small
                                            enterprises owned or partly owned by
                                            female entrepreneurs in cities like Harar to increase their earnings and
                                            employment. HMFI will continue
                                            working with WEDP to enhance women-owned businesses or enterprises by
                                            ensuring financial support.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                            aria-expanded="false" aria-controls="collapseTwelve">
                                            Loan Insurance (Credit Life Insurance)
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            HMFI will collect an insurance premium based on the repayment schedule (1%,
                                            1.5%, 2%, and 2.5%).
                                            Inactive clients or defaulters are not eligible for this insurance scheme.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                            aria-expanded="false" aria-controls="collapseThirteen">
                                            Micro-Leasing
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lease facilities shall be provided to smallholder farmers and micro and
                                            small enterprises engaged or
                                            wanting to engage in value-added economic activities. This product is mainly
                                            designed to enhance the
                                            productivity of the target groups through the provision of technology-based
                                            machinery or equipment
                                            to their best satisfaction in line with the country’s lease policy or
                                            directives.

                                            Here, the potential beneficiaries are required to give detailed
                                            specifications of their intended leased
                                            item and deposit 30% of the item’s market value as an upfront security
                                            deposit at HMFI. The title deed
                                            (ownership) of the leased item shall be in the name of HMFI until full
                                            repayment of the loan and related
                                            interest collection is made.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFourteen"
                                            aria-expanded="false" aria-controls="collapseFourteen">
                                            Input Loan
                                        </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            This is a short-term loan extended to farmers to buy inputs like fertilizers
                                            to enhance production.
                                            The loan finances consumable inputs and not durable assets used in
                                            agricultural production.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFifteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFifteen"
                                            aria-expanded="false" aria-controls="collapseFifteen">
                                            Bull Fattening Loan
                                        </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div><img src="img/bull.jpg" alt=""></div>
                                            An agricultural loan aimed at financing farmers involved in rearing bulls
                                            for sale. These animals are bought young, fattened, and then sold off at a
                                            profit.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSixteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSixteen"
                                            aria-expanded="false" aria-controls="collapseSixteen">
                                            Traction Loan
                                        </button>
                                    </h2>
                                    <div id="collapseSixteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            This loan product finances the purchase of ploughs and/or oxen for
                                            ploughing. It aims at improving labor productivity, the scale of production,
                                            and on-farm transport.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeventeen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeventeen"
                                            aria-expanded="false" aria-controls="collapseSeventeen">
                                            Wake-up Early and Work
                                        </button>
                                    </h2>
                                    <div id="collapseSeventeen" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            This loan finances people involved in the sale of fresh agricultural
                                            products. It is considered innovative because it facilitates the sale of
                                            fresh agricultural products and can be given as an additional loan due to
                                            its short-term nature. Opening a market vent through this product ensures
                                            agricultural producers a ready market and boosts backward linkages in the
                                            value chains of fresh agricultural produce.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEighteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEighteen"
                                            aria-expanded="false" aria-controls="collapseEighteen">
                                            Sell Quickly Loan
                                        </button>
                                    </h2>
                                    <div id="collapseEighteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div><img src="img/sell_quickly.jpg" alt=""></div>
                                            This loan finances people involved in the sale of fresh/unprocessed
                                            agricultural products. It is considered innovative because of its short-term
                                            nature, backward linkage value to agricultural producers, forward linkage
                                            value to processors/consumers, and no collateral requirements. It is a very
                                            popular business, particularly in big cities.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNineteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNineteen"
                                            aria-expanded="false" aria-controls="collapseNineteen">
                                            Easy Communication Loan
                                        </button>
                                    </h2>
                                    <div id="collapseNineteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div><img src="img/easy_com.jpg" alt=""></div>
                                            <p>Under this, a mobile phone is given to the client in kind. The
                                                institution buys phones of various categories and gives them out to
                                                clients as loans. This is considered to be an innovative loan given the
                                                location of the village.</p>
                                            <p>It is not easy for residents to access shops where mobile phones are
                                                sold. Clients who cannot afford a lump sum to pay for a phone get the
                                                phone and pay for it in installments, with interest. This helps them in
                                                their businesses and social interactions.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwenty">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwenty"
                                            aria-expanded="false" aria-controls="collapseTwenty">
                                            Rain Water Harvest Loan
                                        </button>
                                    </h2>
                                    <div id="collapseTwenty" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div><img src="img/rain_water.jpg" alt=""></div>
                                            <p>This is a loan that finances the construction of water tanks which act as
                                                water reservoirs for home use. It is considered innovative because it
                                                responds to the water needs of the hilly terrain of the areas in which
                                                it is offered. Many local people did not have access to safe water and
                                                yet rainfall is fairly abundant.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne"
                                            aria-expanded="false" aria-controls="collapseTwentyOne">
                                            Fishing Loan
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div><img src="img/fishing.jpg" alt=""></div>
                                            <p>This loan is aimed at promoting fishing as a profitable enterprise around
                                                Alemaya Lake. Fish has a ready local market both in its raw and cooked
                                                form. It creates a pool of informed clients for the financial sector.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="loanModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h2>Loan Amortization Calculator</h2>
                                    <form id="loan-form">
                                        <label for="principal">Principal (Br. ):</label>
                                        <input type="number" id="principal" required>

                                        <label for="interest">Annual Interest Rate (%):</label>
                                        <input type="number" id="interest" step="0.01" required>

                                        <label for="years">Number of Years:</label>
                                        <input type="number" id="years" required>

                                        <button type="submit">Calculate</button>
                                    </form>
                                    <div id="results">
                                        <h3>Results</h3>
                                        <p id="monthly-payment">Monthly Payment: Br. 0.00</p>
                                        <p id="total-payment">Total Payment: Br. 0.00</p>
                                        <p id="total-interest">Total Interest: Br. 0.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script>
        function showTabContent(tabId) {
            // Remove active class from all tabs
            const tabs = document.querySelectorAll(".tab");
            tabs.forEach((tab) => tab.classList.remove("active"));

            // Add active class to the clicked tab
            event.target.classList.add("active");

            // Hide all tab contents
            const tabContents = document.querySelectorAll(".tab-content");
            tabContents.forEach((content) => content.classList.remove("active"));

            // Show the clicked tab's content
            const activeTabContent = document.getElementById(tabId);
            activeTabContent.classList.add("active");
        }
    </script>

  <!-- Footer Start -->
    <?php include 'Assets/includes/footer.php'; ?>
        <!-- Footer End -->

    <script>
        // Modal handling
        const modal = document.getElementById("loanModal");
        const openModalButton = document.getElementById("open-modal");
        const closeModal = document.getElementsByClassName("close")[0];

        // Open modal when button is clicked
        openModalButton.onclick = function () {
            modal.style.display = "flex";
        };

        // Close modal when "x" is clicked
        closeModal.onclick = function () {
            modal.style.display = "none";
        };

        // Close modal when clicking outside of the modal
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

        // Loan calculation logic
        document.getElementById('loan-form').addEventListener('submit', function (event) {
            event.preventDefault();

            // Get user input
            const principal = parseFloat(document.getElementById('principal').value);
            const annualInterest = parseFloat(document.getElementById('interest').value);
            const years = parseInt(document.getElementById('years').value);

            // Calculate monthly interest rate and number of payments
            const monthlyInterestRate = annualInterest / 100 / 12;
            const numberOfPayments = years * 12;

            // Calculate monthly payment
            const monthlyPayment = (principal * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -numberOfPayments));
            const totalPayment = monthlyPayment * numberOfPayments;
            const totalInterest = totalPayment - principal;

            // Display results
            document.getElementById('monthly-payment').textContent = `Monthly Payment: $${monthlyPayment.toFixed(2)}`;
            document.getElementById('total-payment').textContent = `Total Payment: $${totalPayment.toFixed(2)}`;
            document.getElementById('total-interest').textContent = `Total Interest: $${totalInterest.toFixed(2)}`;
        });


    </script>
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