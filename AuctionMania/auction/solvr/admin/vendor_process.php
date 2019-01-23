<!DOCTYPE html>
<?php  
include('dbconnect.php');
include('metatags.php');

$cat_id=$_GET['id'];
$sql="select * from vendor_request where vid='$cat_id'";
$res=mysqli_query($conn,$sql);


if(isset($_POST['add'])) {
	
	
	$del=$_POST['id11'];
	   $f1=$_POST['f1'];
	   $f2=$_POST['f2'];
	   $f3=$_POST['f3'];
	   $f4=$_POST['f4'];
	   $f5=$_POST['f5'];
	   $f6=$_POST['f6'];
	   $f7=$_POST['f7'];
	   $f8=$_POST['f8'];
	   $f9=$_POST['password'];
	  




	 
	
	 
$query="INSERT INTO  `init`.`vendor_confirm` (`cvid` ,`name` ,`email` ,`phone` ,`city` ,`vdesc` ,`client` ,`service` ,`certificate` ,`password`)
VALUES (NULL ,  '$f1',  '$f2',  '$f3',  '$f4',  '$f5',  '$f6',  '$f7',  '$f8',  '$f9')";
$res1=mysqli_query($conn,$query);

 
 $query="UPDATE getin SET type='vendor' where emailid='$f2'";
 echo $query;
 $queryres=mysqli_query($conn,$query);
//delete after inserting into confirm table

$sql2="delete from vendor_request where vid='$cat_id'";
$res2=mysqli_query($conn,$sql2);
header('location:vendor_confirm.php'); 
	  
	
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
        Vendor Confirm
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="vendor_request.php">Vendor Request</a></li>
        <li class="active">Vendor Confirm</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row" >
    <div class="col-xs-12" >
          <div class="box box-success" style="box-shadow: 10px 10px 5px #888888;">
            <div class="box-header with-border">
              <h3 class="box-title">Add Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <!--  <form role="form" method="POST" >-->
		  <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
               <!--- <div class="form-group">
                  <label for="cat_title">Catagory Name :</label>
                  <input type="text" class="form-control" name="cat_name"  id="catagory_title" placeholder="Catagory Name">
                </div>-->
				<?php   while($row=mysqli_fetch_array($res)) {  ?>
				<input type="hidden" name="id11" id="" value="<?php echo $row['vid'];  ?>">
				<div class="form-group">
                  <label for="cat_img">Name</label>
                  <input type="text" class="form-control" readonly="true" name="f1" id="" value="<?php echo $row['name'];  ?>">
                </div>
			

	<div class="form-group">
                  <label for="cat_img">Email Address</label>
                  <input type="text" class="form-control" readonly="true" name="f2" id="" value="<?php echo $row['email'];  ?>">
                </div>



	<div class="form-group">
                  <label for="cat_img">Mobile Number</label>
                  <input type="text" class="form-control" readonly="true" name="f3" id="" value="<?php echo $row['phone'];  ?>">
                </div>				
				
				
				
				
	<div class="form-group">
                  <label for="cat_img">City</label>
                  <input type="text" class="form-control" readonly="true" name="f4" id="" value="<?php echo $row['city'];  ?>">
                </div>	

<input type="hidden" readonly="true" name="password" id="" value="<?php echo $row['password'];  ?>">







	<div class="form-group">
                  <label for="cat_img">Description </label>
                  <input type="textarea" class="form-control" name="f5" />
                </div>								
				
				
				
				
				
				

	<div class="form-group">
                  <label for="cat_img">Client </label>
                  <input type="textarea" class="form-control" name="f6" />
				  
                </div>






	<div class="form-group">
                  <label for="cat_img">Services </label>
                  <input type="textarea" class="form-control" name="f7" />
                </div>												
				
				
				

	<div class="form-group">
                  <label for="cat_img">Certificate </label>
                  <input type="textarea" class="form-control" name="f8" />
                </div>								
				
				
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
    	<button type="submit"  name="add" class="btn btn-block btn-success">Conform</button>
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
