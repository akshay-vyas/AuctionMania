<!DOCTYPE html>
<?php  
include('dbconnect.php');
include('metatags.php');
$cat_id=$_GET['id'];
$sql="select * from vendor_confirm where cvid='$cat_id'";
$res=mysqli_query($conn,$sql);


if(isset($_POST['add'])) {
	
	

	   $cat_id1=$_POST['id2'];
	  $f1=$_POST['f1'];
$f2=$_POST['f2'];
$f3=$_POST['f3'];
$f4=$_POST['f4'];
$f5=$_POST['f5'];
$f6=$_POST['f6'];
$f7=$_POST['f7'];
$f8=$_POST['f8'];
$f9=$_POST['f9'];	  
echo $cat_id1,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$f9;


$query="update cat_table set cat_name='$flash' where cid='$cat_id1'";
$query="update vendor_confirm set name='$f1',email='$f2',phone='$f3',city='$f4',vdesc='$f5',client='$f6',service='$f7',certificate='$f8',password='$f9' where cvid='$cat_id1'";


$res=mysqli_query($conn,$query);
header('location:vendor_confirm.php');
	  
	  
	  
	  //$sql="insert into princi_audio(princi_audio,from_date,to_date) values('$name','$from','$to')";
	  //mysqli_query($conn,$sql);
	
	
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
      Solvr 
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="Vendor_confirm.php">Confirmed Vendor</a></li>
        <li class="active">Edit Catagory</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-8">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Catagory</h3>
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
				<?php   while($row=mysqli_fetch_assoc($res)) {  ?>
				<input type="hidden" name="id2" id="" value="<?php echo $row['cvid'];  ?>">
				<div class="form-group">
                  <label for="cat_img">Name</label>
                  <input type="text" class="form-control" readonly="true" name="f1" id="" value="<?php echo $row['name'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">email</label>
                  <input type="text" class="form-control" readonly="true" name="f2" id="" value="<?php echo $row['email'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">mobile</label>
                  <input type="text" class="form-control" readonly="true" name="f3" id="" value="<?php echo $row['phone'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">City</label>
                  <input type="text" class="form-control" readonly="true" name="f4" id="" value="<?php echo $row['city'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">Description</label>
                  <input type="textarea" class="form-control" name="f5" id="" value="<?php echo $row['vdesc'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">Client</label>
                  <input type="textarea" class="form-control" name="f6" id="" value="<?php echo $row['client'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">Services</label>
                  <input type="textarea" class="form-control" name="f7" id="" value="<?php echo $row['service'];  ?>" >
                </div>
				<div class="form-group">
                  <label for="cat_img">Certificate</label>
                  <input type="textarea" class="form-control" name="f8" id="" value="<?php echo $row['certificate'];  ?>" >
                </div>
				<div class="form-group">
                  
                 <input type="hidden" readonly="true" name="f9" id="" value="<?php echo $row['password'];  ?>">
                </div>
				
				
				<!---<div class="form-group">
                  <label for="cat_title">From Date :</label>
                  <input type="date" class="form-control" name="from" value="<?php echo $row['from_date'];  ?>"  id="catagory_title" placeholder="Catagory Name">
                </div>
				
				<div class="form-group">
                  <label for="cat_title">To Date :</label>
                  <input type="date" class="form-control" name="to" value="<?php echo $row['to_date'];  ?>"  id="catagory_title" placeholder="Catagory Name">
                </div>--->
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
    	<button type="submit"  name="add" class="btn btn-block btn-success">Update</button>
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
