<!DOCTYPE html>
<?php  
include('dbconnect.php');
session_start();
error_reporting(0);
$user=$_SESSION['email'];

$mid=$_SESSION['mid'];

$sql="select * from getin where emailid='$user'";
$res=mysqli_query($conn,$sql);


if(isset($_POST['add'])) {
	
	
	$current=$_POST['cp'];
  $new=$_POST['np'];
  $re=$_POST['rp'];
  if($new==$re)
  {
    //$query="update march_register set mname='$f1', mphone='$f3', mcity='$f4' where mid='$del'";
  
  $sql1="update getin set auth='$new' where emailid='$user' and auth='$current'";
  $res1=mysqli_query($conn,$sql1);

  ?> <script type="text/javascript">alert("Successfully Updated"); </script>
  <?php
  
}
else
{
  ?> <script type="text/javascript">alert("Password Mismatched");</script>
  <?php

}
 
	 
	
	 
	  
	
}



?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="sidebar-mini skin-blue wysihtml5-supported">
<div class="wrapper">

  <?php include('header.php');  ?>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PROFILE EDIT
      </h1>
      <ol class="breadcrumb">
        <li><a href="main_home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Profile Edit</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <!--  <form role="form" method="POST" >-->
		  <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body" style="box-shadow: 0 8px 12px 1px #888888;">
               <!--- <div class="form-group">
                  <label for="cat_title">Catagory Name :</label>
                  <input type="text" class="form-control" name="cat_name"  id="catagory_title" placeholder="Catagory Name">
                </div>-->
				<?php   while($row=mysqli_fetch_array($res)) {  ?>
				<input type="hidden" name="id11" id="" readonly="true" value="<?php echo $row['mid'];  ?>">
				<div class="form-group">
                  <label for="cat_img">CURRENT PASSWORD</label>
                  <input type="text" class="form-control"  name="cp" id="" placeholder="Enter Current Password">
                </div>
			

	



	<div class="form-group">
                  <label for="cat_img">NEW PASSWORD</label>
                  <input type="text" class="form-control" name="np" id="" placeholder="Enter New Password">
                </div>				
				
				
				
				
	<div class="form-group">
                  <label for="cat_img">CONFIRM PASSWORD</label>
                  <input type="text" class="form-control" name="rp" id="" placeholder="Re Enter New Password">
                </div>	

<input type="hidden" readonly="true" name="password" id="" value="<?php echo $row['mpassword'];  ?>">







									
				
				
				

							
				
				
				<?php  }  ?>
             <!--   <div class="form-group">
                  <label for="cat_desc">Description :</label>
                  <input type="text" class="form-control" id="catagory_description" placeholder="Few Words on Catagory">
                </div>
                <div class="form-group">
                  <label for="cat_img">Image (Size 45x45 px)</label>
                  <input type="file" id="catagory_image">
                </div>-->
    	<div class="pull-left">
    	<button type="submit"  name="add" class="btn btn-block btn-info">Conform</button>
<!--	<a>	<button type="submit" href="addcatagories.php" name="add" class="btn btn-block btn-success"></ADD></a>-->
        </div>
      </div>
    </form>
    <!-- 
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
             <br>
             <br>
             <h4>Orders</h4>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <br><br>

              <h4>Products</h4>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <br><br>

              <h4>Users</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <br><br>

              <h4>Procurement</h4>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div> -->
      <!-- Main row -->
      </div>
</div></div></section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');   ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
