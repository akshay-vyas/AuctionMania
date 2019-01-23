<?php

include('dbconnect.php');
session_start();
$uid=$_SESSION['uid'];
if(isset($_POST['update']))
{
	$amt=$_POST['amt'];
	$aid=$_POST['aid'];
  $h_price = $_POST['h_price'];
  if($amt < $h_price)
  {
    ?>
    <script>
    alert ("invalid");
  </script>
  <?php
  }
	echo $amt,$aid;
	echo "hi";

	$sql1="update assemble set h_price='$amt' where aid='$aid' and h_price < '$amt'";
  echo $sql1;
	$res1=mysqli_query($conn,$sql1);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Read Mail</title>
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
        Read Mail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          

         
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">SORT BY</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="glyphicon glyphicon-time text-red">     EXPIRARY TIME</i> </a></li>
                <li><a href="#"><i class="glyphicon glyphicon-credit-card text-yellow">      HIGHEST BID</i> </a></li>
                <li><a href="#"><i class="glyphicon glyphicon-bell text-light-blue">   LATEST BID</i> </a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		<?php
			include('dbconnect.php');
			$sql="select * from category c, product p,assemble a,user u where p.pid=a.pid and u.uid=a.uid and p.cid =  c.cid";
			$res=mysqli_query($conn,$sql);
      
			
			
			while($row=mysqli_fetch_assoc($res))
			{
			
			?>
        <div class="col-md-4">
   <div class="box box-primary">
            <div class="box-header with-border">
			
              <h3 class="box-title">Product Name: &nbsp;<?php echo $row['p_name'];?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Product Description: &nbsp;<?php echo $row['p_name'];?></strong>

              <p class="text-muted">
               
				Category:<span>&nbsp;<?php echo $row['cat_name'];?></span>
              </p>
              <hr>

              <strong><span class="label label-success fa fa-calendar"> START DATE: &nbsp;<?php echo $row['p_start'];?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br><br><strong><span class="label label-danger fa fa-calendar">  END DATE: &nbsp;<?php echo $row['p_end'];?></span></strong>
				<hr>
              <p class="text-muted">Actual Price:&nbsp;<?php echo $row['p_aprice'];?></p>

             

              <strong><i class="label label-info fa fa-pencil margin-r-5"></i><span class="label label-info"> 
			  BASE PRICE:&nbsp;<?php echo $row['p_bprice'];?></span></strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong><i class="label label-warning fa fa-pencil margin-r-5"></i><span class="label label-warning">
				HIGHEST BID:&nbsp;<?php echo $row['h_price'];?></span></strong>
				<hr>
             

              

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Its me and Your network</p>
            </div>
			<form method="POST" action="">
			<div class="input-group input-group-sm col-md-12">
			
                <input type="text" name="amt" class="form-control">
				<input type="hidden" name="aid" class="form-control" value=<?php echo $row['aid'];?>>
				<input type="hidden" name="h_price" class="form-control" value=<?php echo $row['h_price'];?>>
                    
                     <center> <button style="padding:5px;" type="submit" name="update" value="submit" class="btn btn-info btn-flat fa fa-gavel">&nbsp;&nbsp;BID NOW&nbsp;&nbsp;&nbsp;</button></center>
                    
					
              </div></form><br>
            <!-- /.box-body -->
          </div>
		  
          <!-- /. box -->
        </div>
		<?php
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
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
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
