<?php
include('dbconnect.php');
session_start();

if (isset($_POST['login']))
{
	$username=$_POST['email'];
	$userpass=$_POST['password'];
	echo $username,$userpass;
	$sql="select * from getin where emailid='$username' AND auth='$userpass'";
	$res=mysqli_query($conn,$sql);
	if($results=mysqli_fetch_assoc($res))
	{
		$type=$results['type'];
		if($type=="pro")
		{
			$_SESSION['email'] = $results['emailid'];
			?>
			<script>
				document.location="solvr/admin/home.php";
			</script>
			<?php
			
		}
		else if($type=="merchant")
		{
			$_SESSION['email'] = $results['emailid'];
			$msql="select * from march_register where memail='$username'";
			$mres=mysqli_query($conn,$msql);
			if($mresults=mysqli_fetch_assoc($mres))
			{
				$_SESSION['mid']=$mresults['mid'];
				$_SESSION['email']=$mresults['memail'];
				
				echo $_SESSION['mid'];
			}
			?>
			<script>
				document.location="solvr/merchant/main_home.php";
			</script>
			<?php
		}
		else if($type=="vendor")
		{
			$_SESSION['email'] = $results['emailid'];
			$vsql="select * from vendor_confirm where email='$username'";
			$vres=mysqli_query($conn,$vsql);
			if($vresults=mysqli_fetch_assoc($vres))
			{
				$_SESSION['email']=$vresults['email'];
				$_SESSION['cvid']=$vresults['cvid'];
				echo $_SESSION['cvid'];
			}
			?>
			<script>
				document.location="solvr/vendor/home.php";
			</script>
			<?php
		}
		else if($type=="temp")
		{
			$_SESSION['email']=$results['emailid'];
			$tsql="select * from vendor_request where email='$username'";
			$tres=mysqli_query($conn,$tsql);
			if($tresults=mysqli_fetch_assoc($tres))
			{
				$_SESSION['email']=$tresults['email'];
				$_SESSION['vid']=$tresults['vid'];
				echo $_SESSION['vid'];
			}
			?>
			<script>
				document.location="solvr/temp/home.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Invalid Email & Password");
			</script>
			<?php
		}
		
	}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Solvr</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="csslog/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
</head>
<body>
<div class="header">
	<h1>MESHCUE</h1>
</div>
<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom main-agile book-form">
	<a href="../"><div class="alert-close"> </div></a>
		
		<h2 class="tittle">Login</h2>
		<form action="#" method="post">
			<div class="form-date-w3-agileits">
				
				<label> Email </label>
				<input type="email" name="email" placeholder="Your Email" required="">
				<label> Password </label>
				<input type="password" name="password" placeholder="Your Password" required="">
			</div>
			<div class="make wow shake">
			
				<div align="left">
				<a href="#" align="left">Forgot Password</a>
				</div>
				<div class="col-xs-6" align="right">
				<input type="submit" name="login" value="Login">
				</div>
				
			</div>
			
		</form>
	</div>
	<!-- //Main -->
</div>
<!-- footer -->
<div class="footer-w3l">
	<p>&copy; 2017 Solvr. All rights reserved | Design by <a href="#">Indushree & Akshay Vyas</a></p>
</div>
<!-- //footer -->
<!-- js-scripts-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="jslog/jquery-2.1.4.min.js"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});	  
	});
	</script>
<!-- //js-scripts-->
</body>
</html>