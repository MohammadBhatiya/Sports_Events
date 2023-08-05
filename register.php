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
									<!--<div>Popular:</div>-->
									<!--<ul>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Bootstrap 3</a></li>
										<li><a href="#">jQuery</a></li>
										<li><a href="#">AnguarJS</a></li>
									</ul>-->
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
									<li><a href="index.html">Home</a></li>
									<li class="dropdown magz-dropdown">
										<a href="#">Authentication <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											</ul>
									</li>
									<li><a href="#">Department<i class="ion-ios-arrow-right"></i></a>
									<ul class="dropdown-menu">
											<li><a href="login.html">Civil Engineering</a></li>
											<li><a href="register.html">Mechanical Engineering</a></li>
											<li><a href="forgot.html">Electrical Engineering</a></li>
											<li><a href="reset.html">Electronics and Communication Engineering</a></li>
											<li><a href="reset.html">Computer Engineering</a></li>
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
									<li><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
									
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

		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<h4>Register</h4>
							<form>
								<div class="form-group">
									<label>UserType</label>
									<select name="usertype" class="form-control">
										<option value="Select">Select UserType</option>
										<option value="Select">Co-Ordinators</option>
										<option value="Select">Volunteers</option>
									</select>
								</div>
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label>Enrollment No</label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Password</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already Registered?</span> <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
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