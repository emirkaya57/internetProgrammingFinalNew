<?php
include_once("lib/db_connect.php");
$takimId = (isset($_GET["takim_id"])) ? $_GET["takim_id"] : 0;
$oyuncular = [];

if ($takimId) {
    
    $voleybol = new Voleybol;
    $oyuncular =  $voleybol->getOyuncularByTakimId($takimId);
    
} else {
    echo "takim id belirtiniz.";
}
?>





<!DOCTYPE html>
<!-- NordEx - Premium App Landing Pages Pack Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="DSAThemes" />
    <meta name="description" content="NordEx - Premium App Landing Pages Pack" />
    <meta name="keywords" content="Responsive, HTML5 template, DSAThemes, Mobile, Application, One Page, Landing, Product, Mobile App">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>Erkek Oyuncular</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="css/menu.css" rel="stylesheet">
    <link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>




<body>




    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loader-wrapper">
        <div id="loading">
            <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
        </div>
    </div>




    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">



      
    <?php
    
    include 'inc/header.php';
    
    ?>


        <!-- BLOG POSTS LISTING
			============================================= -->
        <section id="blog-page" class="bg_whitesmoke hero-offset-nav pb-60 blog-page-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="section-title text-center pc-50 mb-70">

                            <!-- Title -->
                            <h3 class="h3-lg">Voleybol Takımı</h3>

                            <!-- Text -->
                            <p class="p-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fugiat inventore vel libero nisi iure. Tempore numquam, ut rem alias velit, corporis, incidunt cum iusto quo sed amet sapiente at!
                            </p>

                        </div>
                    </div>
                </div>


                <!-- FEATURED POST -->
                <div class="rel blog-post featured-post wide-post">
                    <div class="row d-flex align-items-center">

                        <div class="featured-badge text-center ico-30 bg_whitesmoke yellow-color">
                            <span class="flaticon-star"></span>
                        </div>

                        <!-- BLOG POST IMAGE -->
                        <div class="col-lg-7 blog-post-img">
                            <img class="img-fluid" style="object-fit: contain;" src="https://www.freepnglogos.com/uploads/galatasaray-logo-png/siyah-uzerine-gs-logosu-ve-yildizar-hd-kalite-ucretsiz-indir-15.png" alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="col-lg-5 blog-post-txt">

                            <!-- Post Tag -->
                            <p class="p-md post-tag">NordEx News</p>

                            <!-- Post Link -->
                            <h5 class="h5-xl">
                                <a href="single-post.html">Tempor sapien donec gravida a suscipit and porta justo vitae</a>
                            </h5>

                            <!-- Text -->
                            <p class="p-md">Aliqum mullam blandit vitae and tempor sapien and donec lipsum gravida a porta
                                undo velna dolor in cubilia laoreet
                            </p>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
                                <p>12 min read</p>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->

                    </div> <!-- End row -->
                </div> <!-- END FEATURED POST -->


                <!-- POSTS WRAPPER -->
                <div class="posts-wrapper">


                    <!-- BLOG POSTS CATEGORY -->
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="h5-lg posts-category">Latest Articles</h5>
                        </div>
                    </div>


                    <div class="row">

                        <?php
                        foreach ($oyuncular as $key => $oyuncu) {
                        ?>

                            <!-- BLOG POST #1 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.4s">

                                    <!-- BLOG POST IMAGE -->
                                    <div class="blog-post-img">
                                        <img class="img-fluid" src="https://www.freepnglogos.com/uploads/galatasaray-logo-png/siyah-uzerine-gs-logosu-ve-yildizar-hd-kalite-ucretsiz-indir-15.png" alt="blog-post-image" />
                                    </div>

                                    <!-- BLOG POST TEXT -->
                                    <div class="blog-post-txt">

                                        <!-- Post Tag -->
                                        <p class="p-md post-tag"> <?= $oyuncu['isim_soyisim'] ?>  </p>

                                        <!-- Post Link -->
                                        <h5 class="h5-xs">
                                            <a href="single-post.php?oyuncu_id=<?= $oyuncu['id'] ?>" ><?= $oyuncu['isim_soyisim'] ?></a>
                                        </h5>

                                        <!-- Text -->
                                        <p class="p-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto,    
                                        </p>

                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
                                            <p><?= $oyuncu['dogum_tarihi'] ?></p>
                                        </div>

                                    </div>

                                </div>
                            </div> <!-- END  BLOG POST #1 -->



                        <?php } ?>
                    </div> <!-- End row -->
                </div> <!-- END POSTS WRAPPER -->


            </div> <!-- End container -->


            <!-- GEOMETRIC OVERLAY -->
            <div class="bg_fixed geometric_overlay"></div>


        </section> <!-- END BLOG POSTS LISTING -->




        <!-- PAGE PAGINATION
			============================================= -->
        <div class="bg_whitesmoke pb-100 page-pagination division">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <nav aria-label="Page navigation">
                            <ul class="pagination ico-20 justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">
                                        <span class="flaticon-chevron-pointing-to-the-left"></span>
                                    </a></li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-right-chevron"></span></a></li>
                            </ul>
                        </nav>

                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div> <!-- END PAGE PAGINATION -->




        <!-- NEWSLETTER-1
			============================================= -->
        <section id="newsletter-1" class="bg_whitesmoke pb-20 newsletter-section division">
            <div class="container">
                <div class="newsletter-wrapper bg-white">
                    <div class="row d-flex align-items-center">


                        <!-- SECTION TITLE -->
                        <div class="col-lg-6">
                            <div class="newsletter-txt">

                                <!-- Section ID -->
                                <span class="section-id">Subscribe to Our Newsletter</span>

                                <!-- Title -->
                                <h4 class="h4-xl">Stay up to date with our news, ideas and updates</h4>

                            </div>
                        </div>


                        <!-- NEWSLETTER FORM -->
                        <div class="col-lg-6">
                            <form class="newsletter-form">

                                <div class="input-group">
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-md btn-skyblue tra-skyblue-hover">Subscribe Now</button>
                                    </span>
                                </div>

                                <!-- Newsletter Form Notification -->
                                <label for="s-email" class="form-notification"></label>

                            </form>
                        </div> <!-- END NEWSLETTER FORM -->


                    </div> <!-- End row -->
                </div> <!-- End newsletter-holder -->
            </div> <!-- End container -->
        </section> <!-- END NEWSLETTER-1 -->



     <?php
     include 'inc/footer.php';
     ?>



    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/wow.js"></script>

    <!-- Custom Script -->
    <script src="js/custom.js"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->




</body>




</html>