<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>SPARDHA-Sport_Events</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="images/mylogo.png" alt="SPARDHA">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something here">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="register.php"><i class="ion-person-add"></i><div>Register</div></a></li>
								<li><a href="login.php"><i class="ion-person"></i><div>Login</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="images/mylogo.png" alt="SPARDHA">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.html">Login</a></li>
							<li class="for-tablet"><a href="register.html">Register</a></li>
							<li><a href="index.php">Home</a></li>
							<li class="dropdown magz-dropdown">
								<a href="category.html">Pages <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="index.php">Home</a></li>
									<li class="dropdown magz-dropdown">
										<a href="#">Authentication <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="login.php">Login</a></li>
											<li><a href="register.php">Register</a></li>
											</ul>
									</li>
									<li><a href="#">Department<i class="ion-ios-arrow-right"></i></a>
									<ul class="dropdown-menu">
											<li><a href="#">Civil Engineering</a></li>
											<li><a href="#">Mechanical Engineering</a></li>
											<li><a href="#">Electrical Engineering</a></li>
											<li><a href="#">Electronics and Communication Engineering</a></li>
											<li><a href="#">Computer Engineering</a></li>
										</ul>
									</li>
									<!--<li><a href="single.html">Single</a></li>-->
									<!--<li><a href="page.html">Page</a></li>-->
									<li><a href="search.html">Search</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li class="dropdown magz-dropdown">
										<!--<a href="#">Error <i class="ion-ios-arrow-right"></i></a>-->
										<!--<ul class="dropdown-menu">
											<li><a href="403.html">403</a></li>
											<li><a href="404.html">404</a></li>
											<li><a href="500.html">500</a></li>
											<li><a href="503.html">503</a></li>
										</ul>-->
									</li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Users<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Administrator</a></li>
									<li><a href="#">Co-ordinators</a></li>	
									<li><a href="#">Volunteers</a></li>
									<li><a href="#">Students</a></li>
									</ul>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Events <i class="ion-ios-arrow-right"></i></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<h2 class="megamenu-title">Single</h2>
												<ul class="vertical-menu">
													<li><a href="#">Badminton</a></li>
													<li><a href="#">Carrom</a></li>
													<li><a href="#">Table Tennis</a></li>
													<li><a href="#">Chess</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Doubles</h2>
												<ul class="vertical-menu">
													<li><a href="#">Badminton</a></li>
													<li><a href="#">Carrom</a></li>
													<li><a href="#">Table Tennis</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Team</h2>
												<ul class="vertical-menu">
													<li><a href="#">Cricket</a></li>
													<li><a href="#">Football</a></li>
													<li><a href="#">Kabaddi</a></li>
													<li><a href="#">Funky Cricket</a></li>
													<li><a href="#">Volleyball</a></li>
													<li><a href="#">Basketball</a></li>
													<li><a href="#">Kho-Kho</a></li>
													<li><a href="#">Tug of war</a></li>
													<li><a href="#">Gilli Danda</a></li>
													<li><a href="#">Catch-Catch</a></li>

												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Athletics</h2>
												<ul class="vertical-menu">
													<li><a href="#">100 meter</a></li>
													<li><a href="#">200 meter</a></li>
													<li><a href="#">400 meter</a></li>
													<li><a href="#">4*100 meter(Relay)</a></li>
													<li><a href="#">Long Jump</a></li>
													<li><a href="#">Shot Put</a></li>
													<li><a href="#">Discuss Throw</a></li>
													<li><a href="#">Javelin Throw</a></li>
												</ul>
											</div>
											
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Settings<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="aboutus.php"><i class="icon ion-heart"></i> About Us</a></li>
									<li><a href="contact.php"><i class="icon ion-chatbox"></i> Contact us</a></li>
									
									
									<li class="divider"></li>
									<li><a href="#"><i class="icon ion-log-out"></i> Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>

		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<!--<div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="owl-carousel owl-theme" id="headline">							
								<div class="item">
									<a href="#"><div class="badge">Tip!</div> Vestibulum ante ipsum primis in faucibus orci</a>
								</div>
								<div class="item">
									<a href="#">Ut rutrum sodales mauris ut suscipit</a>
								</div>
							</div>
						</div>-->
						<div class="owl-carousel owl-theme slide" id="featured">
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="images/news/sports2.jpg" alt="Sample Article" >
									</figure>
									<!--<div class="details">
										<div class="category"><a href="category.html">Computer</a></div>
										<h1><a href="single.html">Phasellus iaculis quam sed est elementum vel ornare ligula venenatis</a></h1>
										<div class="time">December 26, 2016</div>
									</div>-->
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="images/news/img14.jpg" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Travel</a></div>
										<h1><a href="single.html">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h1>
										<div class="time">December 10, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="images/news/img13.jpg" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">International</a></div>
										<h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<div class="time">October 12, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="images/news/img05.jpg" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Lifestyle</a></div>
										<h1><a href="single.html">Mauris elementum libero at pharetra auctor Fusce ullamcorper elit</a></h1>
										<div class="time">November 27, 2016</div>
									</div>
								</article>
							</div>
						</div>
						<div class="line">
							<div>About Spardha</div></br>
							<p align="justify" style="font-size:20px;">The annual sports event organized/managed by students of GEC Dahod, hosted by GEC Dahod for the students of GEC Dahod.</br> This event brings out best sporting talents hidden among students so that college level representatives can be short listed for participation at university level or National level.</p>
							<video width="750" height="600" controls>
  								<source src="images/Videos/vid1.mp4" type="video/mp4">
							</video>
							</div>
						
						<div class="line transparent little"></div>
						
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<div class="aside-body">
								<div class="featured-author">
									<div class="featured-author-inner">
										<div class="featured-author-cover" style="background-image: url('images/news/sport_1.jpg');">
											<div class="badges">
												<div class="badge-item"><i class="ion-star"></i> Featured</div>
											</div>
											<div class="featured-author-center">
												<figure class="featured-author-picture">
													<img src="images/news/p8.jpg" alt="Sample Article" >
												</figure>
												<div class="featured-author-info">
													<h2 class="name">GEC Dahod</h2>
													<div class="desc">@GEC Dahod</div>
												</div>
											</div>
										</div>
										<div class="featured-author-body">
											<div class="featured-author-count">
												<div class="item">
													<a href="#">
														<div class="name">Posts</div>
														<div class="value">50</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="name">Stars</div>
														<div class="value">4</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="icon">
															<div>More</div>
															<i class="ion-chevron-right"></i>

														</div>														
													</a>
												</div>
											</div>
											<div class="featured-author-quote">
												"Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
											</div>
											<div class="block">
												<h2 class="block-title">Photos</h2>
												<div class="block-body">
													<ul class="item-list-round" data-magnific="gallery">
														<li><a href="images/news/p1.jpg" style="background-image: url('images/news/p1.jpg');"></a></li>
														<li><a href="images/news/p2.jpg" style="background-image: url('images/news/p2.jpg');"></a></li>
														<li><a href="images/news/p3.jpg" style="background-image: url('images/news/p3.jpg');"></a></li>
														<li><a href="images/news/p4.jpg" style="background-image: url('images/news/p4.jpg');"></a></li>
														<li><a href="images/news/p5.jpg" style="background-image: url('images/news/p5.jpg');"></a></li>
														<li><a href="images/news/p6.jpg" style="background-image: url('images/news/p6.jpg');"></a></li>
														<li><a href="images/news/p7.jpg" style="background-image: url('images/news/p7.jpg');"><div class="more">+2</div></a></li>
														<li class="hidden"><a href="images/news/p8.jpg" style="background-image: url('images/news/p8.jpg');"></a></li>
														<li class="hidden"><a href="images/news/p9.jpg" style="background-image: url('images/news/p9.jpg');"></a></li>
													</ul>
												</div>
											</div>
											<div class="featured-author-footer">
												<a href="#">See All Clicks</a>
												</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title"> Latest Updates <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<!--<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img07.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
										</div>
									</div>
								</article>-->
								<!--<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
										</div>
									</div>
								</article>-->
								<!--<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img09.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
										</div>
									</div>
								</article>-->
								<!--<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img11.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
										</div>
									</div>
								</article>-->
								<!--<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img06.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">neque est semper nulla, ac elementum risus quam a enim</a></h1>
										</div>
									</div>
								</article>-->
								<!--<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img03.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
										</div>
									</div>
								</article>-->
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Videos
								<div class="carousel-nav" id="video-list-nav">

									<table><tr><td>	
									<div class="prev" ><i class="ion-ios-arrow-left" align="left"></i></div>
								</td>
								<td>
									<video id="vid1" src="images/Videos/vid2.mp4" type="video/mp4" width="300" height="200" controls >
  										
									</video>
							</td>
							<td>
									<div class="next"><i class="ion-ios-arrow-right" onclick="nextplay();"></i></div>
								</td>
							</tr>
						</table>
						<script type="text/javascript">

							var ar=new Array("images/Videos/vid2.mp4","images/Videos/vid1.mp4","images/Videos/vid2.mp4");
							var myloc;
							function nextplay()
							{
								if(myloc<2)
								{
									myloc++;
								}
								var video=document.getElementById("vid1");
								video.src=ar[myloc];
								//var sources=video.getElementByTagName("source")[0];
								//sources.src=ar[1];
								video.load();
								video.play();
							}

						</script>
								</div>
							</h1>
							<!--<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
									<li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
									<li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
								</ul>
							</div>-->
						</aside>
						<aside id="sponsored">
							<h1 class="aside-title">Sponsored</h1>
							<div class="aside-body">
								<ul class="sponsored">
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Achievements</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/ach1.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time">December 11, 2016</div>
										
								</div>
								<h2> ..... </h2>
								<p>.....</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/ach2.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 09, 2016</div>
									</div>
								<h2>.....</h2>
								<p>........</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/ach3.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									</div>
								<h2>.....</h2>
								<p>......</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/ach4.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									</div>
								<h2>......</h2>
								<p>.......</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/ach5.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									</div>
								<h2>.....</h2>
								<p>........</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/ach6.png" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									</div>
								<h2>.....</h2>
								<p>........</p>
							</div>
						</div>
					</article>
					
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="images/news/img11.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									</div>
								<h2>......</h2>
								<p>.......</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; SPARDHA 2018-19. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Mohammed</a>
										  <i class="ion-heart"></i> <a href="http://kodinger.com">Aamir</a>
										  <i class="ion-heart"></i> <a href="http://kodinger.com">Amaan</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.migrate.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="scripts/jquery-number/jquery.number.min.js"></script>
		<script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="scripts/toast/jquery.toast.min.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/e-magz.js"></script>
	</body>
</html>