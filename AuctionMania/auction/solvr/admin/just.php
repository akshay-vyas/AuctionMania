<?php
include('dbconnect.php');
if(isset($_POST['submit']))
{
	
					$pname=$_POST['pname'];
					$pdesc=$_POST['pdesc'];
					$cat=$_POST['cat'];
					$aprice=$_POST['aprice'];
					$bprice=$_POST['bprice'];
					$pstart=$_POST['pstart'];
					$pend=$_POST['pend'];
					
					
					$sql="insert into values(null,'3','$cat','$pname','$pdesc','inactive','$aprice','$bprice','$pstart','$pend','pending')";
					echo $sql;
					$res=mysqli_query($conn,$sql);
	//$sql="insert into category values(null,'$cat')";
	//$res=mysqli_query($conn,$sql);
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
        <li class="active">Category</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border" width="90px">
              
    <div>
    <details>
						<summary>Add New Product</summary></br>
						
					<input class="form-control" type="text" name="pname" placeholder="Enter product name"></br>
					<input class="form-control" type="text" name="pdesc" placeholder="Enter description"></br>
					
					<span style="color:white"><select name="cat" id="cid" class="validate[required] selecter_1"">
	  <option value="">select</option>
	  <?php
	  
	  include('dbconnect.php');
	  $sql1="select * from category";
	  $res1=mysqli_query($conn,$sql1);
	  while($row=mysqli_fetch_assoc($res1))
	  {
	  ?>
	  <option value="<?php echo $row['cid'];?>"><?php echo $row['cat_name'];?></option>
	  <?php
	  }
	  ?>
	  </select></span></br>
					
					<input class="form-control" type="text" name="aprice" placeholder="Enter actual price"></br>
					<input class="form-control" type="text" name="bprice" placeholder="Enter bid price"></br>
					<input class="form-control" type="date" name="pstart" ></br>
					<input class="form-control" type="date" name="pend" ></br>
					
					
					
					<button  type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
					  </details>
    </div>
            </div>
          <div class="box box-success">
            <div class="box-header with-border">
            <div class="col-xs-12">
      <div class="table-responsive">
              <table class="table table-responsive= table-hover">
						<thead>
                            <tr>
                              <th>#</th>
                              <th>PID</th>
							  <th>Product Name</th>
							  <th>Description</th>
							  <th>Category</th>
							  <th>Status</th>
							  
							  <th>Actual Price</th>
							  <th>Bid Price</th>
							  <th>Start on</th>
							  <th>Ends on</th>
							  <th>Permision</th>
                              <th>Edit</th>
                              <th>Delete</th>
                              </tr>
                          </thead>
						<tbody>
						<?php
						$i=1;
						$sql2="select * from product p,category c where p.cid = c.cid";
						$res2=mysqli_query($conn,$sql2);
						while($row=mysqli_fetch_assoc($res2))
						{
						?>
                            <tr>
                              <td><?php echo $i;?></td>
                              <td><?php echo $row['pid'];?></td>
							  <td><?php echo $row['p_name'];?></td>
							  <td><?php echo $row['p_desc'];?></td>
							  <td><?php echo $row['cat_name'];?></td>
							  <td><?php echo $row['p_status'];?></td>
							  <td><?php echo $row['p_aprice'];?></td>
							  <td><?php echo $row['p_bprice'];?></td>
							  <td><?php echo $row['p_start'];?></td>
							  <td><?php echo $row['p_end'];?></td>
							  <td><?php echo $row['p_permision'];?></td>
                              <td id="<?php echo $row['cid'];?>"><span class="glyphicon glyphicon-pencil"></span></td>
                              <td><span class="glyphicon glyphicon-trash"></span></td>
                              </tr>
						<?php
						$i++;
							}
						?>
                          </tbody>
                        </table>
					
            </div>
            </div>
            </div>

    
    
    
    
      </div>
</div></div></div></section>

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
