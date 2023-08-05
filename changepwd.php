<?php
session_start();
if(isset($_SESSION["utype"]))
{
	if(!$_SESSION["utype"]=="Admin")
	{
	header("location:login.php");
	exit();
	}
}
else
{
	header("location:login.php");
	exit();
}
$con=mysqli_connect("localhost","root","","SpardhaDB");
if(mysqli_connect_errno()>0)
{
	die(mysqli_connect_error());
}

if(isset($_POST["change"]))
{
$uname=$_SESSION["uname"];
$opass=$_POST["op"];
$npass=$_POST["np"];
$rpass=$_POST["rp"];

	if($npass!=$rpass)
	{
		echo "<script type='text/javascript'>alert('Retype password is not matched');</script>";
	}
	else
	{
		$q="update user_table set password=? where Username=? and Password=?";
		$rs=$con->prepare($q);
		$rs->bind_param("sss",$npass,$uname,$opass);
		$rs->execute();
		$rs->store_result();
		if($rs->affected_rows>0)
		{
			echo "<script type='text/javascript'>alert('Password changed successfully');</script>";
		
		}
		else
		{
			echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
		}
	}

}

?>


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
		-								<input type="text" name="q" class="form-control" placeholder="Type something here">									
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
								<li><a href="#"><i class="ion-person-add"></i><div>Welcome</div></a></li>
								<li><a href="logout.php"><i class="icon ion-log-out"></i><div>LogOut</div></a></li>
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
							<li><a href="admin_home.php">Home</a></li>
							<li>
								<a href="manage_sport.php">Sports Management</a>
								
							</li>
							
							<li><a href="manage_accessories.php">Accessories Management</a>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Settings<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="aboutus.php"><i class="icon ion-heart"></i> About Us</a></li>
									<li><a href="contact.php"><i class="icon ion-chatbox"></i> Contact us</a></li>
									<li><a href="changepwd.php"><i class="icon ion-key"></i> Change Password</a></li>
									
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
							<h4>Change Password</h4>
							<form  method="POST" action="changepwd.php">
								<div class="form-group">
									<label>Old Password</label>
									<input type="password" name="op" class="form-control">
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="password" name="np" class="form-control">
								</div>
								<div class="form-group">
									<label>Retype Password</label>
									<input type="password" name="rp" class="form-control">
								</div>
								<table align="center">
									<tr>
								<td><div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="change">Change</button>
									</div>
								</td>
								<td>&nbsp;&nbsp;</td>
								<td><div class="form-group text-right">
									<button class="btn btn-primary btn-block" align="right" name="cancel">Cancel</button>
									</div>
								</td>
								</tr>
								
									</div>
								</table>
							
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