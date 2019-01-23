<?php
include('dbconnect.php');
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>AUCTIONMANIA</title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  	<script type="text/javascript" src="js/camera.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    
  	<script>
        $(document).ready(function(){   
                jQuery('.camera_wrap').camera();
          });    
  	</script>		
  
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  
  <script src="sweetalert.js"></script>

</head>

<body>

<header>
   
    
 <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="index.html"><img src="" alt=""></a><span><h4 style="color:white">AuctionMania</h4></span></h1>
                        <form id="search-form" action="" method="POST" accept-charset="utf-8" class="navbar-form" >
						<input type="text" name="email" placeholder="ENTER USERNAME HERE" >
						<input type="password" name="password" placeholder="ENTER PASSWORD HERE">
                            
                            <button class="btn btn-info" type="submit" name="login" value="submit" >LOGIN</button>
							
                        </form>
						
                        <span class="contacts">Call Us: <span>+91 8123 619 432</span><br>E-mail: <a href="#">akshaythevyas@gmail.com</a></span>
                    </div>
					
					<a href="register.php" style="float:right" ><h5 style="color: hotpink;">register</h5></a>
              </div>
           </div>
      </div>   
    </div>
    <!--==============================Slider=================================--> 
    <div class="slider">
    <div class="camera_wrap">
        <div data-src="images/slide.jpg">
		<div class="camera_caption">
            <div class="container">
              <div class="row">
                <div class="span12">
                  <h2 style="color:black">Participate</h2> <h3 style="color:black">over the<br/> World</h3>
                </div>
              </div>
            </div> 
          </div>
		</div>
        <div data-src="images/slide1.jpg">
          <div class="camera_caption">
            <div class="container">
              <div class="row">
                <div class="span12">
                  <h2 style="color:black">A BID IN HAND</h2> <h3 style="color:white">is worth<br/> 2 in bush</h3>
                </div>
              </div>
            </div> 
          </div>     
        </div>
        <div data-src="images/slide3.jpg">
          <div class="camera_caption">
            <div class="container">
              <div class="row">
                <div class="span12">
                  <h2 style="color:black">Why</h2> <h3>to <br/> yell </h3>
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div data-src="images/logo7.jpg">
         
        </div>
    </div>
</div>
</header>

<!--==============================Content=================================--> 
<section id="content" class="main-content">
  <div class="container">
    <div class="row">
      <div class="span12"> 
<marquee direction="up">	  
        <ul class="thumbnails">
		<?php
				include('dbconnect.php');
				$sql="select * from product";
				$res=mysqli_query($conn,$sql);
				$i=1;
				while($row=mysqli_fetch_assoc($res))
				{
					?>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<a href="#" onClick="openWindow('product_image.php?id=<?php echo $row['pid']?>');"><img src="auction/admin/<?php echo $row['pic'];?>" width="100" height="100"></a>
				
                <h5><?php echo $row['p_name'];?></h5>
				
                <button class="btn btn-success"><?php echo $row['p_start'];?></button>
				<button class="btn btn-danger"><?php echo $row['p_end'];?></button>
				
              </div>  
              <div class="thumbnail-pad">
                  <p><?php echo $row['p_desc'];?></p>
                  <a href="register.php" class="btn btn-info">BID NOW!!</a>
              </div>
              <img src="images/shadow-thumb.jpg">
            </div>
          </li>
		  <?php
				}
				?>
          </ul>
		  </marquee>
      </div>
    </div>



  </div>
</section>


<!--==============================Bottom content=================================--> 
<aside id="bottom-content">
  <div class="container">
    <div class="row">
        <div class="clearfix">
          <div class="span3">
            <h5>AUCTIONMANIA</h5>
            <p class="lead">ITS NOW OR NEVER</p>
          </div>
          <div class="span9">
            <p>The AUCTIONMANIA system is a flexible solution for supporting lot- based online auctions.

 The thesis explains the construction of an auction website. 

The system has been designed to be highly-scalable and capable of supporting large numbers of bidders in an active auction. 
   </p>
          </div>
        </div>

        <div class="padbotcontent"></div> 

       
   
    </div>
  </div>    
</aside>


<footer>
   <div class="container">
    <div class="row">
     

     
      <div class="span12">
        AUCTIONMANIA ©  2018. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;   <a href="#">Privacy Policy</a>
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>


<?php
if (isset($_POST['login']))
{
  
    $username=$_POST['email'];
    $userpass=$_POST['password'];
  $username=mysqli_real_escape_string($conn,$username);
  $userpass=mysqli_real_escape_string($conn,$userpass);
   // echo $username,$userpass;
    $sql="select * from user where email='$username' AND pwd='$userpass' ";

    $res=mysqli_query($conn,$sql);
    $i=0;
    if($results=mysqli_fetch_assoc($res))
    {
        $type=$results['type'];
        if($type=="admin")
        {
           
               $_SESSION['uid'] = $results['uid'];
            $_SESSION['email'] = $results['email'];
            $_SESSION['uname'] = $results['uname'];
           // $_SESSION['company'] = $results['company'];
            $i=1;
                $midd=$_SESSION['uid'] = $results['uid'];
                $type = $results['type'];
            ?>
            <script>
                document.location="auction/user/admin/main_home.php";
            </script>
            <?php
            
        }
        else if($type=="user")
        {
           
            $msql="select * from user where email='$username'";
            $mres=mysqli_query($conn,$msql);
            if($mresults=mysqli_fetch_assoc($mres))
            {
                   $_SESSION['uid'] = $results['uid'];
            $_SESSION['email'] = $results['email'];
            $_SESSION['uname'] = $results['uname'];
           // $_SESSION['company'] = $results['company'];
            $i=1;
                $midd=$_SESSION['uid'] = $results['uid'];
                $type = $results['type'];
                
               
            }
            ?>
            <script>
                document.location="auction/user/main_home.php";
            </script>
            <?php
        }
     
       
        
    }

    if($i==0)
       {
        ?>
        <script>
     

swal({
    title: "Verification!",
    text: "Please enter valid detials!",
    type: "error"
}).then(function() {
    window.location = "index.php";
});
      </script>
        <?php
       }
}


?>




