<?php
include('dbconnect.php');
if(isset($_POST['add']))
{
	$name=$_POST['name'];

	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	
	$temp=0;
	if($password==$cpassword)
	{
		$sql="select * from march_reg";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($res))
		{
		if($row['email']==$email)
		{
			
			?>
			<script>
			alert("email already exists");
			</script>
			<?php
			$temp=1;
			break;
			
		}
		}
		if($temp==0)
		{
			$sql1="insert into vendor_request values(null,'$name','$email','$phone','$city','dump')";
			$res1=mysqli_query($conn,$sql1);
		    $sql2="insert into getin values(null,'$email','$password','$question','$answer','vendor')";
			$res2=mysqli_query($conn,$sql2);
		}
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
		<form action="#" method="post">
			<div class="form-date-w3-agileits">
				<label> Name </label>
				<input type="text" name="name" placeholder="Your Name" required="">
				
				<label> Phone </label>
				<input type="text" name="phone" placeholder="Your Name" required="">
				<label> City </label>
				<input type="text" name="city" placeholder="Your Name" required="">
				
				<label> Email </label>
				<input type="email" name="email" placeholder="Your Email" required="">
				<label> Password </label>
				<input type="password" name="password" placeholder="Your Password" required="">
				<label> CONFIRM Password </label>
				<input type="password" name="cpassword" placeholder="Confirm Password" required="">
				<label> Question </label>
				<input type="text" name="question" placeholder="Your Name" required="">
				<label> Answer </label>
				<input type="text" name="answer" placeholder="Your Name" required="">
				
				
				
			</div>
			<div class="make wow shake">
				  <input type="submit" name="add" value="Register">
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