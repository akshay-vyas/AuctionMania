<!DOCTYPE html>
<?php  
include('dbconnect.php');
include('metatags.php');

if(isset($_POST['add'])) 
{
	   
	  $cat_name=$_POST['cat_name'];
	  $subcat_name=$_POST['subcat_name'];
	  $vendor_name=$_POST['vendor_name'];
	  echo $cat_name;
	  $sql="insert into assign values(null,'$cat_name','$subcat_name','$vendor_name')";
	  echo $sql;
	  mysqli_query($conn,$sql);
	header('location:assign_view.php');
	 
	
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>init </title>
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
        <li><a href="assign_view.php">Assign View</a></li>
        <li class="active">Assign New Vendor</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Add Sub-Catagory</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <!--  <form role="form" method="POST" >-->
		  <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
               
				
				<div class="wrapper">
            <select name="vendor_name" class="form-control">
    <option value="">Vendor Name</</option>
   <?php 
    $sql4="SELECT * FROM vendor_confirm";
    $res4=mysqli_query($conn,$sql4);
    while($row4=mysqli_fetch_assoc($res4))
    {
    ?>
    <option value="<?php echo $row4['cvid'];?>"><?php echo $row4['name'];?></option>
    <?php
    }
    ?>
      </select>
                      
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <select class="form-control" type="submit" name="cat_name" >
	  <option value="">Category Name</option>
	 <?php 
	  $sql2="SELECT * FROM cat_table";
	  $res2=mysqli_query($conn,$sql2);
	
	  while($row2=mysqli_fetch_assoc($res2))
	  {
	  ?>
	  
	  <option value="<?php echo $row2['cid'];?>"><?php echo $row2['cat_name'];?></option>
	   
	  <?php
	  }
	  ?>
      </select>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                  <!--<input type="text" class="form-control" name="subcat_name" id="" placeholder="Enter sub-Catagory Name">-->
				  <select name="subcat_name" class="form-control">
	  <option value="">Sub-Catagory Name</</option>
	 <?php 
		
		
	  $sql3="SELECT * FROM sub_cat_table";
	  $res3=mysqli_query($conn,$sql3);
	  while($row3=mysqli_fetch_assoc($res3))
	  {
	  ?>
	  <option  value="<?php echo $row3['id'];?>"><?php echo $row3['sub_cat_name'];?></option>
	  <!--<option value="<?php echo $row2['cid'];?>"<?php if($row['cid']==$row2['cid']){?> selected<?php }?>><?php echo $row2['cat_name'];?></option>-->
	  <?php
	  }
	  ?>
      </select>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <label ></label>
                  <!--<input type="text" class="form-control" name="subcat_name" id="" placeholder="Enter sub-Catagory Name">-->
				  

        </div>
			<br/>	
    	<div class="pull-left">
		
    	<button type="submit"  name="add" class="btn btn-block btn-success" >ADD</button>
<!--	<a>	<button type="submit" href="addcatagories.php" name="add" class="btn btn-block btn-success"></ADD></a>-->
        </div>
      </div>
    </form>
    
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