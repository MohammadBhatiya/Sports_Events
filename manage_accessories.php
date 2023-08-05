<?php
session_start();
if(isset($_SESSION["utype"]))
{
	if(!$_SESSION["utype"]=="Admin")
	{
header("location:login.php");
	}
}
else
{
	header("location:login.php");

}

$con=mysqli_connect("localhost","root","","SpardhaDB");
if(mysqli_connect_errno()>0)
{
	die(mysqli_connect_error());
}

if(isset($_POST["savebtn"]))
	{
		$spid=$_POST["sname"];
		$noa=$_POST["noa"];
		$n=0;
		for($i=1;$i<=$noa;$i++)
		{
		$aname=$_POST["acc_name".$i];
		$aqty=$_POST["qty".$i];
		
		$q="insert into acc_table values(?,?,?)";
		$rs=$con->prepare($q);
		$rs->bind_param("isi",$spid,$aname,$aqty);
		$rs->execute();
		$rs->store_result();
		$n=$n+$rs->affected_rows;
		}
		if($n>0)
		{
					echo "<script type='text/javascript'>alert('Record is Saved');</script>";
					
		}
		else
		{
			die(mysqli_error($con));
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
										<input type="text" name="q" class="form-control" placeholder="Type something here">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
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
<script type="text/javascript">
function fetchsp(sc)
{
	location.href="manage_accessories.php?sc="+sc;
}
function fetchnoa(n)
{
		var sc=document.accform.scat.value;
	var sn=document.accform.sname.value;
	
	location.href="manage_accessories.php?sc="+sc+"&sn="+sn+"&na="+n;

}

</script>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<h4>Accessories Management</h4>
							<form name="accform" method="post" action="" >
								<div class="form-group">
									<label>Sport Category</label>
									<select name="scat" class="form-control" onchange="fetchsp(this.value);">
										<option value="Select">Select Sport Category</option>
										<?php
										$q="select distinct SportCategory from sport_table";
										$rs=$con->prepare($q);
										$rs->execute();
										$rs->store_result();
										if($rs->num_rows>0)
										{
											$rs->bind_result($scat);
											while($rs->fetch())
											{
												if(isset($_REQUEST["sc"]) && $_REQUEST["sc"]==$scat)
												{
												echo "<option value='$scat' selected>$scat</option>";
												
												}
												else
												{
												echo "<option value='$scat'>$scat</option>";
												}
											}
										}
					
										?>
									</select>
								</div>
								
								<div class="form-group">
									<label>Sport Name</label>
									<select name="sname" class="form-control">
										<option value="Select">Select Sport Name</option>
										<?php
										if(isset($_REQUEST["sc"]))
										{
										$q="select SportId,SportName from sport_table where SportCategory=?";
										$rs=$con->prepare($q);
										$rs->bind_param("s",$_REQUEST["sc"]);
										$rs->execute();
										$rs->store_result();
										if($rs->num_rows>0)
										{
											$rs->bind_result($sid,$sname);
											while($rs->fetch())
											{
												if(isset($_REQUEST["sn"]) && $_REQUEST["sn"]==$sid)
												{
												echo "<option value='$sid' selected>$sname</option>";
												
												}
												else
												{
												echo "<option value='$sid'>$sname</option>";
												}
											}
										}
											}
										?>
					

									</select>
								
									</div>
								<div class="form-group">
									<label>No of Accessories:</label>
									<select name="noa" class="form-control" onchange="fetchnoa(this.value);">
										<?php
										for($i=1;$i<=10;$i++)
										{
												if(isset($_REQUEST["na"]) && $_REQUEST["na"]==$i)
												{
													echo "<option value='$i' selected>$i</option>";
												}
												else{										
													echo "<option value='$i'>$i</option>";
												}
										}
										?>
					

									</select>
								
									</div>
								
								<table>
								<tr>
									<td><label>Accessories Name</label></td><td>&nbsp;&nbsp;</td>
								<td><label>Qty</label></td>
								</tr>	
								<?php
								if(isset($_REQUEST["na"]))
								{
									$no=$_REQUEST["na"];
								}
								else
								{
									$no=1;
								}
								for($i=1;$i<=$no;$i++)
								{
								echo "<tr>";
								echo "<td>";
									echo "<input type='text' name='acc_name$i' value='' size='25'>";
									echo "</td><td>&nbsp;&nbsp;</td>";
									echo "<td>";
									echo "<input type='text' name='qty$i' value='0' size='05'>";
									echo "</td>";

								echo "</tr>";
								echo "<tr><td><br></td></tr>";
								}
								?>
							</table>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<table align="center">
									<tr>
								<td><div class="form-group text-right">
									<button name="savebtn" class="btn btn-primary btn-block">Save</button>
									</div>
								</td>
								<td>&nbsp;&nbsp;</td>
								<td><div class="form-group text-right">
									<button class="btn btn-primary btn-block" align="right">Cancel</button>
									</div>
								</td>
								</tr>
								
									</div>
								</table>
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