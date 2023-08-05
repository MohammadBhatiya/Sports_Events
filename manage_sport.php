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
		$spid=$_POST["sportid"];
		$scat=$_POST["scategory"];
		$sname=$_POST["sportname"];
		if($_POST["savebtn"]=="Save")
		{
		$q="insert into sport_table values(?,?,?)";
		$rs=$con->prepare($q);
		$rs->bind_param("iss",$spid,$scat,$sname);
		}
		else
		{
		$q="update sport_table set sportcategory=?,sportname=? where sportid=?";
		$rs=$con->prepare($q);
		$rs->bind_param("ssi",$scat,$sname,$spid);
			
		}
		$rs->execute();
		$rs->store_result();
		if($rs->affected_rows>0)
		{
					echo "<script type='text/javascript'>alert('Record is Saved');</script>";
					unset($spid);
					unset($scat);
					unset($sname);

		}
		else
		{
			die(mysqli_error($con));
		}
		
	}
$q="select SportId from sport_table  order by SportId desc";
		$rs=$con->prepare($q);
		
		$rs->execute();
		$rs->store_result();
		if($rs->num_rows>0)
		{
			$rs->bind_result($spid);
			$rs->fetch();
			$spid++;
			
		}
		else
		{
			$spid=1;
		}

	if(isset($_REQUEST["btn"]) && $_REQUEST["btn"]=="view")
	{
		$spid=$_REQUEST["spid"];
		$q="select * from sport_table where SportId=?";
		$rs=$con->prepare($q);
		$rs->bind_param("i",$spid);
		$rs->execute();
		$rs->store_result();
		if($rs->num_rows>0)
		{
			$rs->bind_result($spid,$scat,$sname);
			$rs->fetch();
			
			
		}
		else
		{
					echo "<script type='text/javascript'>alert('Record not found');</script>";
				
		}
	
		
		
	}
	if(isset($_REQUEST["btn"]) && $_REQUEST["btn"]=="del")
	{
		$spid=$_REQUEST["spid"];
		$q="delete from sport_table where SportId=?";
		$rs=$con->prepare($q);
		$rs->bind_param("i",$spid);
		$rs->execute();
		$rs->store_result();
		if($rs->affected_rows>0)
		{
			echo "<script type='text/javascript'>alert('Record is deleted');</script>";
			
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
	function validate()
	{
		if(document.sportform.sportid.value=="")
		{
			alert("Plz Enter Sport Id");
			document.sportform.sportid.focus();
			return false;
		}
		else if(document.sportform.scategory.options.selectedIndex==0)
		{
			alert("Plz Select Sport Category");
			document.sportform.scategory.focus();
			return false;
		}
		else if(document.sportform.sportname.value=="")
		{
			alert("Plz Enter Sport Name");
			document.sportform.sportname.focus();
			return false;
		}
		
		else
		{
			return true;
		}
	}
</script>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<h4>Sport Management</h4>
							<form name="sportform" method="post" action="manage_sport.php" onsubmit="return validate();">
								<div class="form-group">
									<label>Sport Id</label>
									<input type="text" name="sportid" class="form-control" required readonly value='<?php isset($spid)?print $spid:print ""; ?>'>
								</div>
								<div class="form-group">
									<label>Sport Category</label>
									<select name="scategory" class="form-control">
										<option value="Select" >Select Sport Category</option>
										<option value="Single" <?php (isset($scat) && $scat=="Single")?print "selected":print ""; ?> >Single</option>
										<option value="Doubles" <?php (isset($scat) && $scat=="Doubles")?print "selected":print ""; ?>>Doubles</option>
										<option value="Team" <?php (isset($scat) && $scat=="Team")?print "selected":print ""; ?>>Team</option>
										<option value="Athletics" <?php (isset($scat) && $scat=="Athletics")?print "selected":print ""; ?>>Athletics</option>
									</select>
								</div>
								
								<div class="form-group">
									<label>Sport Name</label>
									<input type="text" name="sportname" class="form-control" value='<?php isset($sname)?print $sname:print ""; ?>' required>
								</div>
								
								<table align="center">
									<tr>
								<td><div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="savebtn" value='<?php isset($sname)? print "Update":print "Save"; ?>'><?php isset($sname)? print "Update":print "Save"; ?></button>
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
							</form>	
						<?php
							if(!isset($_SESSION["start"]))
							{
								$_SESSION["start"]=1;
							}

							$con=mysqli_connect("localhost","root","","SpardhaDB");
							if(mysqli_connect_errno()>0)
							{
								die(mysqli_connect_error());
							}
							$q="select * from sport_table order by SportId";
							$rs=$con->prepare($q);
		
							$rs->execute();
							$rs->store_result();
							if($rs->num_rows>0)
							{
									if(isset($_REQUEST["nav"]))
									{
									if($_REQUEST["nav"]=="prev")
									{
									if($_SESSION["start"]>1)
									{
									$_SESSION["start"]=$_SESSION["start"]-5;
									}
									}
									else
									{
									if($_SESSION["start"]<=$rs->num_rows-5)
									{
									$_SESSION["start"]=$_SESSION["start"]+5;
									}	
									}
									}
			
								$rs->bind_result($spid,$scat,$sname);
								$rs->data_seek($_SESSION["start"]-1);
								echo "<tr><th colspan='5'><hr></th></tr>";
								
								echo "<table width='100%'><tr><th ></th><th ></th><th >Sport Id</th><th >Sport Category</th><th >Sport Name</th></tr>";
								echo "<tr><th colspan='5'><hr></th></tr>";
								$i=1;
								while($rs->fetch() && $i<=5)
								{
									echo "<tr ><td ><a href='manage_sport.php?btn=view&spid=$spid'>View</a></td><td ><a href='manage_sport.php?btn=del&spid=$spid'>Delete</a></td><td>$spid</td><td >$scat</td><td >$sname</td></tr>";
									$i++;
								}

								echo "<tr><th colspan='5'><hr></th></tr>";
								echo "<tr><td><a href='manage_sport.php?nav=prev'>Prev</a></td><td></td><td></td><td></td><td align='right'><a href='manage_sport.php?nav=next'>Next</a></td></tr>";
								
								echo "</table>";


							}
							else
							{
								unset($_SESSION["start"]);
							}
	
						?>
			
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