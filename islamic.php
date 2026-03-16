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
    <style>
        /* Style for active and hover states */
        .list-group-item:hover,
        .list-group-item.active {
            cursor: pointer;
        }

        /* Hidden by default */
        .hidden {
            display: none;
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

        /* Animation for expanding content */
        .content-section {
            opacity: 0;

            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.5s ease;
        }

        /* Expanded state */
        .content-section.show {
            opacity: 1;

            /* Adjust based on the content */
        }

        /* Adjusting padding for expanding effect */
        .card {
            transform: scale(0);
            transition: transform 0.3s ease;
        }

        .card.show {
            transform: scale(1);
        }

        ul li {
            margin: 0 0 10px;
            padding-left: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>

    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->

 <?php
        include 'Assets/includes/header.php';
        ?>
   <!-- Navbar & Hero End -->





    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Search by keyword
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1" />
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
        <div class="container text-center py-3" style="max-width: 900px">
            <h4 class="text-white display-6 wow fadeInDown" data-wow-delay="0.1s">
                Islamic Products
            </h4>
        </div>
    </div>

    <div class="container">
        <div class="my-4">
            <div class="container mt-5">
                <div class="container mt-5">
                    <h1>Islamic Modes of Financing</h1>

                    <p>Instruments of financing may be broadly divided into </p>
                    <ol>
                        <li>participatory profit loss-sharing (PLS) modes, such as, mudarabah and musharakah which are
                            not a popular structure, however, in the context of micro finance as the thorough reporting
                            and transparency requirements surrounding the distribution of any profit and loss can result
                            in substantial operating burdens and costs on small enterprises unaccustomed to formal
                            accounting. </li>
                        <li>sale-based modes, such as, murabahah; </li>
                        <li>lease-based modes or ijarah</li>
                        <li>benevolent loans or qard with service charge :</li>

                    </ol>
                    <img class="img-fluid rounded w-100" src="img/islamic_products.png" alt="">



                    <h3>a) Musharaka (Partnership)</h3>
                    <p>Musharaka involves investors injecting equity into a business venture and sharing any profits and
                        losses from that venture according to predetermined ratios. Each partner retains (though is not
                        obliged to exercise) management rights in the venture, must receive accounting and other
                        information on business activity, must authorize the raising of capital from any new partners
                        and may receive a salary in return for participating.</p>

                    <h3>b) Mudaraba (Trust Financing)</h3>
                    <p>Mudaraba involves an investor or investors providing funding for a business venture and a manager
                        with fiduciary responsibilities providing managerial or market specific expertise. Investors
                        retain ownership of the assets but have no management rights. The investor and the manager share
                        any profits according to predetermined ratios. The investor shares any losses according to their
                        respective funding contributions</p>

                    <h3>c) Murabaha (Cost-Plus Mark-Up)</h3>
                    <p>Murabaha involves a finance party purchasing tangible assets from a seller and selling them to a
                        buyer at a predetermined profit margin. In the context of trade finance, the buyer will settle
                        the marked-up purchase price by way of immediate lump sum payment. In the context of consumer
                        finance, the buyer will settle the marked-up purchase price by way of deferred installments.
                        Using a tawarruq structure and an asset for which there is a highly liquid market, the buyer
                        will settle the marked-up purchase price by way of deferred installments but will also appoint
                        the finance party as its agent to on-sell the assets on a spot basis and remit to the buyer the
                        proceeds of any such sale. </p>
                    <p>Murabaha is the most popular and flexible Shari'a-compliant structure and is used in micro
                        finance initiatives. However, it is costly to implement and a growing number of Shari'a scholars
                        do not approve of it, especially intawarruq structure, on the basis that it is merely disguised
                        lending where the participants have no interest in actually acquiring the underlying
                        commodities. This applies all the more in the context of providing micro finance to start-ups
                        and small companies whose businesses do not involve the sale and purchase of commodities and
                        which do not have sufficient surplus funds to be credibly investing in commodities.</p>

                    <h3>d) Ijara (Sale and Leaseback)</h3>
                    <p>Ijara involves making available a known benefit arising from the use, possession and/or
                        occupation of a specified asset in return for a payment. In the context of consumer financing, a
                        finance party will purchase an asset from a client and lease it back to the client at a
                        predetermined rate at predetermined intervals over a predetermined period of time. The finance
                        party is responsible for maintaining and ensuring the asset (though may engage another (often
                        the client) as its servicing agent) and the asset must exist for the duration of the lease. The
                        financier may grant the client a sale undertaking and the client grant the financier a purchase
                        undertaking, giving the client the option to purchase the lease assets for a pre-agreed residual
                        sum at the end of or during the lease. It is also possible to structure the lease so that the
                        leased asset is simply transferred to the client at the end of the lease.</p>

                    <h3>e) Istisna (Construction / Manufacturing)</h3>
                    <p>Istisna involves the construction or manufacture and deferred delivery of specified made to-order
                        assets of predetermined quality and quantity in return for installment or lump sum on delivery
                        payments. The manufacturer must procure his own goods but, unless those goods do not conform
                        with the contracted terms, the contract is irrevocable after the commencement of manufacture.
                    </p>

                    <h3>f) Salam (Future Delivery)</h3>
                    <p>Salam involves one party making an upfront payment to another party for the future delivery of
                        assets of predetermined quality and quantity. The contract is irrevocable after the payment of
                        the purchase price. Although not accepted in many jurisdictions, in a parallel salam structure,
                        the finance party will enter into a parallel but unrelated contract to on-sell the assets on
                        delivery at a profit. However, salamis costly to implement and, in the context of forward
                        crop-financing in agrarian societies, it covers little more than production costs and it is the
                        financiers rather than the clients that realize any potential gains at (post-harvest-season and
                        post asset-delivery) market maturity.</p>

                    <h3>g) Qard Hasan</h3>
                    <p>Charitable loans free of interest and profit-sharing margins, repayment by installments. A modest
                        service charge is permissible.</p>

                    <h2>Summary of Asset Side Products</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Islamic Mode of Financing</th>
                                <th>Underlying Islamic Mode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Musharaka (Partnership)</td>
                                <td>Musharaka</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mudaraba (Trust Financing)</td>
                                <td>Mudaraba</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Murabaha (Cost-Plus Mark-Up)</td>
                                <td>Murabaha</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ijara (Sale and Leaseback)</td>
                                <td>Ijara</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Istisna (Construction / Manufacturing)</td>
                                <td>Istisna</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Salam (Future Delivery)</td>
                                <td>Salam</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Qard Hasan</td>
                                <td>Qard Hasan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>Islamic-Based Savings</h2>

                    <h3>a) Current Accounts</h3>
                    <p>These are deposits or accounts deposited with the institution by clients for using them in daily
                        transactions, whether by direct cash withdrawal or by checks. Current accounts differ from
                        savings and investment accounts in that the formers are guaranteed by the HMFI, and therefore
                        the holders do not deserve a return on them, and they are usually intended for money saving and
                        obtaining other financial services. On the other hand, the investment and saving accounts are
                        not guaranteed by the institution and are intended for saving as well as investment, and their
                        holders receive a return on them.</p>

                    <h3>b) Savings Accounts</h3>

                    <ul>
                        <li>These are the deposits or accounts that clients deposit with the institution to save and
                            investment based on the Mudaraba contract, so that institution may invest the fund in a pool
                            known as the Mudaraba pool and distribute profits commensurate with its average balance
                            during the accounting period.
                        </li>
                        <li> The Mudaraba pool is the pool in which various investment deposits and accounts are placed
                            to invest them as one fund. The institution may also invest this pool the funds from the
                            current accounts, which it guarantees as loans to their holders.</li>
                        <li> Savings deposits are distinguished from fixed-term investment deposits as the first are not
                            limited to a specific term or a certain amount, so their holders can, without prior
                            notification, withdraw the money in this account at any time. Besides, the holder of the
                            savings accounts normally receives a lower share of the profit than that of the investment
                            account.</li>
                    </ul>


                    <h3>c) Fixed-Term Investment Accounts</h3>
                    <p>These are deposits or accounts deposited by the clients with the institution to invest them on
                        Mudaraba. They are classified into brackets of different amounts and maturities, and typically
                        invested in the Mudaraba pool, where they deserve a share in the pool’s profit under their total
                        volume and duration of investment in the pool
                    </p>

                    <div class="row">
                        <!-- Left Sidebar -->
                        <aside class="col-md-3">
                            <ul class="list-group">
                                <!-- Set the first item to 'active' by default -->
                                <li>Islamic Products</li>
                                <li>Regular saving</li>
                                <li>Mandatory saving</li>
                                <li>Institutional savings</li>
                            </ul>
                        </aside>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Start -->
    <?php include 'Assets/includes/footer.php'; ?>
        <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

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