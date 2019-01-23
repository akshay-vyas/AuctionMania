<?php

include('dbconnect.php');
session_start();
$uid=$_SESSION['uid'];
date_default_timezone_set('Asia/Calcutta');
$today= date("Y-m-d");


$uid=$_SESSION['uid'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AUCTIONMANIA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php  include('header.php'); ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       WINNERS LIST
      </h1>
      <ol class="breadcrumb">
        <li><a href="main_home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">WINNER LIST</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <!-- /.col -->
		<?php
			include('dbconnect.php');		

      $today= date("Y-m-d");
      //echo $today;
      
$sql8="select * from assemble a, product p, category c,user u where a.pid = p.pid and c.cid = a.cid and a.uid = u.uid and temp <= '$today' and a.uid in (select uid from assemble where h_price in (select h_price from assemble group by h_price) ) ";
//echo $sql8;
$i=2;
$res8=mysqli_query($conn,$sql8);
while($row8=mysqli_fetch_array($res8))
{
  
  if($i%2 == 0)
  {
//echo $i;
  ?>

        <div class="col-md-4" >

   <div class="box box-primary" style="background-color:#FFAB91;color:white">

            <div class="box-header with-border" >
			<marquee><strong style="color:red"><?php echo "This product is sold out for RS:/  ".$row8['h_price'];?></strong></marquee>
              
            </div>
            
            <div class="box-body">
              <h4 class="box-title">Product Name: &nbsp;<?php echo $row8['p_name'];?></h4>
              <strong><i class="fa fa-book margin-r-5"></i> Product Description: &nbsp;<?php echo $row8['p_desc'];?></strong>

              <p class="text-muted">
               
				Category:<span>&nbsp;<?php echo $row8['cat_name'];?></span>
              </p>
              <hr>

              <strong><span class="label label-success fa fa-calendar"> START DATE: &nbsp;<?php echo $row8['p_start'];?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br><br><strong><span class="label label-danger fa fa-calendar">  END DATE: &nbsp;<?php echo $row8['p_end'];?></span></strong>
				<hr>
              <p class="text-muted">Actual Price:&nbsp;<?php echo $row8['p_aprice'];?></p>

             

              <strong><i class="label label-info fa fa-pencil margin-r-5"></i><span class="label label-info"> 
			  BASE PRICE:&nbsp;<?php echo $row8['p_bprice'];?></span></strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
             

              

              
            </div>
			<br>
            
          </div>
		  
          
        </div> 
        <?php


        

}
$i=$i+1;
      }
      ?>
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2018 <a href="http://almsaeedstudio.com">AUCTIONMANIA</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Control Sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
