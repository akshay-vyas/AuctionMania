<?php
include('dbconnect.php');
//phpinfo();

if (isset($_POST['register']))
	{
		$name=$_POST['name'];
		$company=$_POST['company'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$city=$_POST['city'];
		$password=$_POST['password'];
		$confirm=$_POST['confirm'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$test=0;
		//echo $name,$email,$mobile,$city,$password,$confirm,$question,$answer;
		if($password==$confirm)
		{
			$sql="select * from getin";
			$res=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($res))
			{
				if($email==$row['emailid'])
				{
					?>
					<script>
					alert("This EMAIL is already registered");
					</script>
					<?php
					$test=1;
					break;
				}
			}
				if($test==0)
				{
					/*$msg= 'Name' .$_POST['name']."\n" 
					.'Email'.$_POST['email']."\n";
					
					if(mail($_POST['email'],$_POST['name'],$_POST['name']))
					{
							?>
							<script>
								alert(0);
							</script>



							<?php


					}
					else
					{
						
					}*/
$sql1="insert into getin values(null,'$email','$password','$question','$answer','merchant')";
					$res1=mysqli_query($conn,$sql1);
					$sql2="insert into march_register values(null,'$name','$company','$email','$mobile','$city','dumpasword')";
					$res2=mysqli_query($conn,$sql2);

					
					
					
				}
			
		
		}
		else
		{
			?> 
			<script>
			alert("Paswword mismatched");</script>
			
			<?php
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
	<h1>Merchant Registraion</h1>
</div>
<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom main-agile book-form">
		<a href="../"><div class="alert-close"> </div></a>
		<form action="#" method="post">
			<div class="form-date-w3-agileits">
				<label> Name </label>
				<input type="text" name="name" placeholder="Your Name" required="">
				<label> Company </label>
				<input type="text" name="company" placeholder="Company Name" required="">
				<label> Email </label>
				<input type="text" name="email" placeholder="Your Email" required="">
				<label> Mobile </label>
				<input type="text" name="mobile" placeholder="10 digit" required="">
				<label> City </label>
				<input type="text" name="city" placeholder="City" required="">
				<label> Password </label>
				<input type="password" name="password" placeholder="Your Password" required="">
				<label> CONFIRM Password </label>
				<input type="password" name="confirm" placeholder="Confirm Password" required="">
				<label> Choose your Question</label>
				 <select name="question">
					<option value="Who is your Best Friend">Who is your Best Friend</option>
					<option value="Whats your mother madian name">Whats your mother madian name</option>
					<option value="Whats your Favorite Sport">Whats your Favorite Sport</option>
					<option value="What is your favorite food">What is your favorite food</option>
				</select>
				<hr>
				<input type="text" name="answer" placeholder="Give your answer" required="">
			</div>
			<div class="make wow shake">
				  <input type="submit" name="register" value="Register">
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