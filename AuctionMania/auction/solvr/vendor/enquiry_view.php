<!DOCTYPE html>
<?php  include('dbconnect.php');
session_start();
error_reporting(0);
$current_vendor= $_SESSION['cvid'];
$sql = "SELECT * FROM march_assign a, vendor_confirm b, quantity c, units d where a.cvid='$current_vendor' AND a.cvid=b.cvid AND a.qty_id=c.qty_id AND a.uiid=d.uiid order by a.send_id DESC";
$cat=mysqli_query($conn,$sql);



?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Solvr </title>
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
        Requested Enquery
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Profile</a></li>
        <li class="active">Enquiery View</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-12 ">
					<div class="row" style=" opacity: 0.9;">
			<?php  $i=1; while($row=mysqli_fetch_assoc($cat))
       {
      if($row['mview']>0)
      {
       ?>
     
			

			<div class="col-xs-12 col-md-4">
          
            <div class="box box-primary" style="box-shadow: 10px 10px 5px #888888;">
            <div class="box-header with-border">
              <h3 class="box-title">Enquiry Id &nbsp; <?php echo $row['send_id']; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>Merchant Name: &nbsp; <?php echo $row['mname']; ?></strong>
				
              <p class="text-muted">
                &nbsp;
              </p>
			<strong><i class="fa fa-book margin-r-5"></i>Merchant ID: &nbsp; <?php echo $row['mid']; ?></strong>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Date</strong>
				
              <p class="text-muted" align="left"><?php echo $row['date'];?></p>
			  
			  <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Quantity</strong>
				
              <p class="text-muted"><?php echo $row['qty_no'];?> &nbsp; <?php echo $row['ui_no'];?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Description</strong>

              <p>
                <?php echo $row['mdesc'];?>
              </p>

              <hr>

              
			  <div class="row">
			  <div class="col-md-6 col-xs-6">
			  <a href="enquiry_accept.php?id=<?php echo $row['send_id'];   ?>" class="btn btn-primary btn-block"><b>Accept</b></a>
			  </div>
			  <div class="col-md-6 col-xs-6">
			  <a href="enquiry_decline.php?id=<?php echo $row['send_id'];   ?>" class="btn btn-danger btn-block"><b>Decline</b></a>
			  </div>
			  </div>
            </div>
			
            <!-- /.box-body -->
			
			
          </div>
			</div>
			
			<?php
			}
    }
			?>
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

