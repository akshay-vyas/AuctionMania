<?php
include('dbconnect.php');
session_start();
$email=$_POST['email'];
$pw=$_POST['password'];

$sql="select * from getin where email='$email' AND password= '$pw'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($res))
{
	$type=$row['type'];
	$email1=$row['email'];
	
	
	if($type=='pro')
	{
		?>
		<script>
		document.location="solvr/admin/home.php";
		</script>
		<?php
	}
	else if($type=='merchant')
		{
		?>
		<script>
		document.location="solvr/merchant/home.php";
		</script>
		<?php
		}
		else if($type=='vendor')
		{
			session_start();
			 $sql2 = mysqli_query($conn, "select * from vendor_request where email='$email1' ");
			 if(mysqli_num_rows($sql2)>0)
			 {
				 while($results=mysqli_fetch_assoc($sql2))
				 {
					$_SESSION['uname']=$results['email'];
					$_SESSION['vid']=$results['vid'];
				 }
			 }
			echo $_SESSION['uname'];
	?>
		<script>
		alert("test");
		document.location="solvr/vendor/home.php";
		</script>
		<?php
		}
		else
		{
			?>
			<script>
			alert("invalid input");
			</script>
		<?php
		
		}	
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Classy Register Form Responsive Widget Template :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
</head>
<body>
<div class="header">
	<h1>Classy Register Form</h1>
</div>
<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom main-agile book-form">
		<div class="alert-close"> </div>
		<h2 class="tittle">Register Here</h2>
		<form action="#" method="POST">
			<div class="form-date-w3-agileits">
				
				<label> Email </label>
				<input type="email" name="email" placeholder="Your Email" required="">
				<label> Password </label>
				<input type="password" name="password" placeholder="Your Password" required="">
				
			</div>
			<div class="make wow shake">
				  <input type="submit" nmae="add" value="Register">
			</div>
		</form>
	</div>
	<!-- //Main -->
</div>
<!-- footer -->
<div class="footer-w3l">
	<p>&copy; 2017 Classy Register Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!-- //footer -->
<!-- js-scripts-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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