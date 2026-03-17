<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>News - Harar Microfinance Institute S.C.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet" />

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
    <link rel="icon" type="image/png" href="img/logo.png" />

    <style>
        .news-card {
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .news-image {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .news-card:hover .news-image {
            transform: scale(1.05);
        }
        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }
        .filter-btn {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            color: #495057;
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .filter-btn.active, .filter-btn:hover {
            background: #DE6726;
            color: white;
            border-color: #DE6726;
        }
        .news-tags {
            margin-top: 10px;
        }
        .tag {
            display: inline-block;
            background: #e9ecef;
            color: #495057;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8em;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include 'Assets/includes/header.php';
    ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-dark">
        <div class="container text-center py-3" style="max-width: 900px;">
            <h4 class="text-white display-6 wow fadeInDown" data-wow-delay="0.1s">Latest News</h4>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container my-5">

        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="Announcements">Announcements</button>
            <button class="filter-btn" data-filter="news">news</button>
            <!-- <button class="filter-btn" data-filter="expansion">Expansion</button> -->
        </div>
        <div class="row g-4" id="news-container">


                        <!-- News Item 1 -->
            <div class="col-md-4 news-item" data-category="Announcements">
                <div class="card news-card">
                    <img src="pdf/miyazya7.PNG" class="card-img-top news-image" alt="News 1" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#newsModal1" />
                    <div class="card-body">
                        <h5 class="card-title">የሐረር ብድርና ቁጠባ ተቋም አክስዮን ማህበር የባለአክሲዮኖች 1<sup>ኛ</sup> አስቸኳይ ጠቅላላ ጉባኤ ጥሪ</h5>
                        <small class="text-muted">Published on: March 16, 2026</small>
                        <p class="card-text">የሐረር ብድርና ቁጠባ ተቋም አ.ማ  የባለአክሲዮኖች አንደኛ አስቸኳይ ጠቅላላ ጉባኤ ሚያዚ 07 ቀን 2018 ዓ.ም ከጠዋቱ 3፡00 ሰዓት ላይ በሐረር ብድርና ቁጠባ ተቋም ዋና ስራ አስኪያጅ ቢሮ ስለሚካሄድ እንድትገኙ የዳይሬክተሮች ቦርድ ጥሪውን ያቀርባል፡፡</p>
                        <div class="news-tags">
                            <span class="tag">Announcements</span>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal1">Read More</button>
                    </div>
                </div>
            </div>  
      
            <!-- News Item 2 -->
            <div class="col-md-4 news-item" data-category="Announcements">  
                <div class="card news-card">
                    <img src="pdf/miyazya6.PNG" class="card-img-top news-image" alt="News 2" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#newsModal2" />
                    <div class="card-body">
                        <h5 class="card-title">የሐረር ብድርና ቁጠባ ተቋም አክስዮን ማህበር ባለአክሲዮኖች 1<sup>ኛ</sup> መደበኛ ጠቅላላ ጉባኤ ጥሪ</h5>
                        <small class="text-muted">Published on: March 16, 2026</small>
                        <p class="card-text">የሐረር ብድርና ቁጠባ ተቋም አ.ማ የባለአክሲዮኖች አንደኛ መደበኛ ጠቅላላ ጉባኤ ሚያዚያ 6 ቀን 2018 ዓ.ም ከጠዋቱ 3፡00 ሰዓት ላይ በሐረር ብድርና ቁጠባ ተቋም ዋና ስራ አስኪያጅ ቢሮ ስለሚካሄድ እንድትገኙ የዳይሬክተሮች ቦርድ ጥሪውን ያቀርባል፡፡</p>
                        <div class="news-tags">
                            <span class="tag">Announcements</span>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal2">Read More</button>   
                    </div>
                </div>
            </div>
        
        </div>
    </div>

    <!-- Modals -->
    <!-- News Modal 1 -->
    <div class="modal fade" id="newsModal1" tabindex="-1" aria-labelledby="newsModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModal1Label">የሐረር ብድርና ቁጠባ ተቋም አክስዮን ማህበር የባለአክሲዮኖች 1<sup>ኛ</sup>  አስቸኳይ ጠቅላላ ጉባኤ ጥሪ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a href="pdf/የሐረር_ብድርና_ቁጠባ_ተቋም_አ.ማ._አስቸኳይ_አንደኛ_መደበኛ_ጠቅላላ_ጉባኤ_ጥሪ.pdf" target="_blank">
                        <img src="pdf/miyazya6.PNG" class="img-fluid mb-3" alt="News 1" />
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- News Modal 2 -->
    <div class="modal fade" id="newsModal2" tabindex="-1" aria-labelledby="newsModal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModal2Label">የሐረር ብድርና ቁጠባ ተቋም አክስዮን ማህበር ባለአክሲዮኖች 1ኛ መደበኛ ጠቅላላ ጉባኤ ጥሪ
</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                                        <a href="pdf/የሐረር_ብድርና_ቁጠባ_ተቋም_አ.ማ._የባለአክሲዮኖች_አንደኛ_መደበኛ_ጠቅላላ_ጉባኤ_ጥሪ.pdf" target="_blank">

                        <img src="pdf/miyazya6.PNG" class="img-fluid mb-3" alt="News 2" />
                    </a>
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <?php include 'Assets/includes/footer.php'; ?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/animate/animate.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('.filter-btn').on('click', function() {
                var filter = $(this).data('filter');
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                if (filter === 'all') {
                    $('.news-item').show();
                } else {
                    $('.news-item').hide();
                    $('.news-item[data-category="' + filter + '"]').show();
                }
            });
        });
    </script>
</body>
</html>
