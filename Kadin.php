
<?php

$baglan = mysqli_connect("localhost","root","", "voleybol");   

if (!$baglan) {
	die("connection failed :".mysqli_connect_error());
}

$sorgu = $baglan->query("SELECT oyuncu_adi, dogum_tarihi, id FROM oyuncular");

$cikti = $sorgu->fetch_array();


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
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>	
		<meta name="description" content="NordEx - Premium App Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5 template, DSAThemes, Mobile, Application, One Page, Landing, Product, Mobile App">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
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




			<!-- HEADER
			============================================= -->
			<header id="header" class="header tra-menu navbar-dark">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"><img src="images/logo-01.png" alt="mobile-logo"/></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER LOGO -->
	    					<div class="desktoplogo"><a href="demo-1.html" class="logo-black"><img src="images/logo-01.png" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="demo-1.html" class="logo-white"><img src="images/logo-white.png" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-skyblue-hover">


	        						<!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="demo-1.html">Home</a></li>


	        						<!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="about.html">About</a></li>


	        						<!-- DROPDOWN MENU -->
						        	<li aria-haspopup="true"><a href="#">Pages <span class="wsarrow"></span></a>
						        		<div class="wsmegamenu clearfix halfmenu">
						              		<div class="container-fluid">
						                		<div class="row">

						                			<!-- Links -->
									                <ul class="col-lg-6 link-list">	
									                	<li><a href="about.html">About NordEx</a></li>				                  
									                    <li><a href="features.html">Core Features</a></li>
									                    <li><a href="pricing.html">Pricing Plans</a></li>
									                    <li><a href="reviews.html">Testimonials</a></li>
									                    <li><a href="more-apps.html">More Apps</a></li>
									                </ul>

								                  	<!-- Links -->
									                <ul class="col-lg-6 link-list">							                  
									                    <li><a href="faqs.html">FAQs Page</a></li>
									                    <li><a href="blog-listing.html">Blog Listing</a></li>
									                    <li><a href="single-post.html">Single Blog Post</a></li>
									                    <li><a href="terms.html">Terms & Privacy</a></li>
									                    <li><a href="contacts.html">Contact Us</a></li>
									                </ul>

						                		</div>
						              		</div>
						            	</div>
						          	</li>	<!-- END DROPDOWN MENU -->


								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="pricing.html">Pricing</a></li>


							    	<!-- SIMPLE NAVIGATION LINK --> 
							    	<li class="nl-simple" aria-haspopup="true"><a href="faqs.html">FAQs</a></li>


							    	<!-- SIMPLE NAVIGATION LINK --> 
							    	<li class="nl-simple" aria-haspopup="true"><a href="blog-listing.html">Blog</a></li>


								    <!-- HEADER BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="pricing.html" class="btn btn-skyblue tra-grey-hover last-link">Let's Started</a>
								    </li> 


								    <!-- APPSTORE BADGE 
									<li class="nl-simple" aria-haspopup="true">
										<a href="#" class="store header-store">
											<img class="appstore-header" src="images/appstore.png" alt="appstore-logo">
										</a>
									</li> -->


									<!-- GOOGLE PLAY BADGE 
									<li class="nl-simple" aria-haspopup="true">
										<a href="#" class="store header-store">
											<img class="googleplay-header" src="images/googleplay.png" alt="googleplay-logo">
										</a>
									</li>  -->


									<!-- HEADER SOCIAL LINKS 													
									<li class="nl-simple white-color header-socials ico-20 clearfix" aria-haspopup="true">
										<span><a href="#" class="ico-facebook"><span class="flaticon-facebook"></span></a></span>
										<span><a href="#" class="ico-twitter"><span class="flaticon-twitter"></span></a></span>
										<span><a href="#" class="ico-instagram"><span class="flaticon-instagram"></span></a></span>
										<span><a href="#" class="ico-dribbble"><span class="flaticon-dribbble"></span></a></span>	
									</li> -->	


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->


			

			<!-- BLOG POSTS LISTING
			============================================= -->
			<section id="blog-page" class="bg_whitesmoke hero-offset-nav pb-60 blog-page-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-md-10 offset-md-1">
							<div class="section-title text-center pc-50 mb-70">		

								<!-- Title -->	
								<h3 class="h3-lg">Relevant news, tech stuff, and more for you. Welcome to our blog</h3>	

								<!-- Text -->	
								<p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis libero
							       tempus, blandit and cursus varius
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
								<img class="img-fluid" src="images/blog/post-1-img.jpg" alt="blog-post-image" />	
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

							</div>	<!-- END BLOG POST TEXT -->

						</div>   <!-- End row -->
				 	</div>	<!-- END FEATURED POST -->


					<!-- POSTS WRAPPER -->
					<div class="posts-wrapper">


						<!-- BLOG POSTS CATEGORY --> 
						<div class="row">
							<div class="col-md-12">
								<h5 class="h5-lg posts-category">Latest Articles</h5>
							</div>
						</div>


				 		<div class="row">


			 				<!-- BLOG POST #1 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.4s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag">NordEx News</p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html">Tempor sapien donec gravida ipsum a porta justo vitae</a>
										</h5>

										<!-- Text -->
										<p class="p-md">Aliqum mullam blandit vitae and tempor sapien and donec lipsum gravida 
										   porta undo velna dolor
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
											<p>12 min read</p>
										</div>	

									</div>

								</div>
					 		</div>	<!-- END  BLOG POST #1 -->


							<!-- BLOG POST #2 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.6s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="images/blog/post-3-img.jpg" alt="blog-post-image" />
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag">Inspiration</p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html">Aliquam augue impedit luctus neque purus an ipsum neque and dolor libero risus</a>
										</h5>

										<!-- Text -->
										<p class="p-md">The aliqum mullam vitae tempor sapien and donec lipsum gravida porta velna
										   dolor vitae auctor
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
											<p>8 min read</p>
										</div>	

									</div>	<!-- END BLOG POST TEXT -->

								</div>
					 		</div>	<!-- END  BLOG POST #2 -->


					 		<!-- BLOG POST #3 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.8s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="images/blog/post-4-img.jpg" alt="blog-post-image" />
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag">Tutorials</p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html">Tempor sapien donec gravida ipsum and porta justo</a>
										</h5>

										<!-- Text -->
										<p class="p-md">The aliqum mullam vitae tempor sapien and donec lipsum gravida porta velna
										   dolor vitae auctor
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
											<p>22 min read</p>
										</div>	

									</div>	<!-- END BLOG POST TEXT -->

								</div>
					 		</div>	<!-- END  BLOG POST #3 -->


					 		<!-- BLOG POST #4 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.4s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="images/blog/post-5-img.jpg" alt="blog-post-image" />
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag">Extensions</p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html">Neque purus an ipsum neque and dolor libero risus mullam blandit at tempor sapien</a>
										</h5>

										<!-- Text -->
										<p class="p-md">The aliqum mullam vitae tempor sapien and donec lipsum gravida porta velna
										   dolor vitae auctor
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
											<p>1 day read</p>
										</div>	

									</div>

								</div>
					 		</div>	<!-- END  BLOG POST #4 -->


							<!-- BLOG POST #5 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.6s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="images/blog/post-6-img.jpg" alt="blog-post-image" />
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag">Community</p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html">Tempor sapien donec gravida ipsum a porta justo vitae</a>
										</h5>

										<!-- Text -->
										<p class="p-md">The aliqum mullam vitae tempor sapien and donec lipsum gravida porta velna
										   dolor vitae auctor
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
											<p>54 min read</p>
										</div>	

									</div>	<!-- END BLOG POST TEXT -->

								</div>
					 		</div>	<!-- END  BLOG POST #5 -->


					 		<!-- BLOG POST #6 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.8s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="images/blog/post-7-img.jpg" alt="blog-post-image" />
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag">Extensions</p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html">Lipsum gravida porta velna NordEx, donec gravida ipsum a 
											   porta justo tempor
											</a>
										</h5>

										<!-- Text -->
										<p class="p-md">The aliqum mullam vitae tempor sapien and donec lipsum gravida porta velna
										   dolor vitae auctor
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="images/post-author-1.jpg" alt="author-avatar"></div>
											<p>4 hours read</p>
										</div>	

									</div>	<!-- END BLOG POST TEXT -->

								</div>
					 		</div>	<!-- END  BLOG POST #6 -->


				 		</div>  <!-- End row -->
				 	</div>	<!-- END POSTS WRAPPER -->


				</div>     <!-- End container -->


				<!-- GEOMETRIC OVERLAY -->	
				<div class="bg_fixed geometric_overlay"></div>


			</section>	<!-- END BLOG POSTS LISTING -->




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
					</div>  <!-- End row -->	
				</div> <!-- End container -->
			</div>	<!-- END PAGE PAGINATION -->




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
							</div>	  <!-- END NEWSLETTER FORM -->


						</div>	  <!-- End row -->
					</div>    <!-- End newsletter-holder -->
				</div>	   <!-- End container -->	
			</section>	<!-- END NEWSLETTER-1 -->




			<!-- FOOTER-1
			============================================= -->
			<footer id="footer-1" class="bg_whitesmoke footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-12 col-lg-3">	
							<div class="footer-info mb-40">

								<!-- Footer Logo -->	
								<img class="footer-logo" src="images/logo-01.png" alt="footer-logo">

							</div>	
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-4 col-lg-3 offset-lg-1">
							<div class="footer-links">

								<!-- Title -->
								<h5 class="h5-xs">Product</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><p class="p-md"><a href="#">How It Works?</a></p></li>
									<li><p class="p-md"><a href="#">Privacy Policy</a></p></li>
									<li><p class="p-md"><a href="#">Terms of Service</a></p></li>
									<li><p class="p-md"><a href="#">Site Map</a></p></li>
								</ul>						

							</div>	
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-4 col-lg-3">
							<div class="footer-links">

								<!-- Title -->
								<h5 class="h5-xs">Connect</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><p class="p-md"><a href="#">FAQs</a></p></li>									
									<li><p class="p-md"><a href="#">Editor Help</a></p></li>							
									<li><p class="p-md"><a href="#">Life Chatting</a></p></li>
									<li><p class="p-md"><a href="#">Contact Us</a></p></li>
								</ul>

							</div>	
						</div>


						<!-- FOOTER SOCIAL LINKS -->
						<div class="col-sm-4 col-md-4 col-lg-2">
							<div class="footer-socials-links text-right mb-25">
							
								<!-- Social Links -->
								<h5 class="h5-xs"><a href="#" class="foo-facebook">Facebook</a></h5>
								<h5 class="h5-xs"><a href="#" class="foo-twitter">Twitter</a></h5>
								<h5 class="h5-xs"><a href="#" class="foo-instagram">Instagram</a></h5>
								<h5 class="h5-xs"><a href="#" class="foo-dribbble">Dribbble</a></h5>														
								<!--	
								<h5 class="h5-sm"><a href="#" class="foo-behance">Facebook</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-pinterest">Twitter</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-linkedin">Instagram</a></h5>
								<h5 class="h5-sm"><a href="#" class="google-plus">Dribbble</a></h5>
								<h5 class="h5-sm"><a href="#" class="youtube">Twitter</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-tumblr">Instagram</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-vk">Dribbble</a></h5>	
								-->

							</div>
						</div>
						

					</div>	 <!-- END FOOTER CONTENT -->

					
					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row">

							<!-- FOOTER COPYRIGHT -->
							<div class="col-md-12">
								<div class="footer-copyright">
									<p>&copy; 2021 NordEx. All Rights Reserved</p>
								</div>
							</div>

						</div>
					</div>	<!-- END BOTTOM FOOTER -->


				</div>	    <!-- End container -->
			</footer>	<!-- END FOOTER-1 -->




		</div>	<!-- END PAGE CONTENT -->




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