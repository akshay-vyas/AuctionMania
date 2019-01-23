<!DOCTYPE html>
<?php  //include('dbconnect.php');
$conn=mysqli_connect('localhost','root','','init');
session_start();
error_reporting(0);
$cat_id=$_GET['id'];
$sql="select * from march_assign a, quantity c, units d where a.send_id='$cat_id' AND a.qty_id=c.qty_id AND a.uiid=d.uiid";
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
	   $f9=$_POST['f9'];
	   $f10=$_POST['f10'];
	   $f11=$_POST['f11'];
	  

	  
	  $sql2="insert into march_recived values(null,'$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','On Going','1')";
	  $res2=mysqli_query($conn,$sql2);
	   
	 $sql3="update march_assign set mview='0' where send_id='$cat_id'";
   $res3=mysqli_query($conn,$sql3);
	  
	  header('location:enquiry_view.php');
	  //$sql="insert into princi_audio(princi_audio,from_date,to_date) values('$name','$from','$to')";
	  //mysqli_query($conn,$sql);
	
	
}



?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>College </title>
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
        Reply to Enquiry
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Profile</a></li>
		<li><a href="enquiry_view.php"><i class="fa fa-dashboard"></i> Enquiery View</a></li>
        <li class="active">Enquiery Accept</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
	<div class="col-md-3">

          <!-- Profile Image -->
          
          <!-- About Me Box -->
          <div class="box box-primary" style="box-shadow: 10px 10px 5px #888888;">
		<?php   while($row=mysqli_fetch_array($res)) {  ?>
            <div class="box-header with-border">
              <h3 class="box-title">Enquiry Id &nbsp;<?php echo $row['send_id'];  ?></h3>
            </div>
            <!-- /.box-header -->
			
            <div class="box-body">
			
			<input type="hidden" name="id11" id="" value="#">
              <strong><i class="fa fa-book margin-r-5"></i> Marchant Name&nbsp;&nbsp;<?php echo $row['mname'];  ?></strong>

              <p class="text-muted">
               &nbsp;
              </p>
				<strong><i class="fa fa-book margin-r-5"></i> Marchant ID</strong>
				<p class="text-muted"><?php echo $row['mid'];  ?></p>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Date</strong>

              <p class="text-muted"><?php echo $row['date'];  ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Quantity</strong>
				<p class="text-muted"><?php echo $row['qty_no'];  ?>&nbsp;&nbsp;<?php echo $row['ui_no'];  ?></p>
              

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Description</strong>

              <p><?php echo $row['mdesc'];  ?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-9">
          <div class="nav-tabs-custom" style="box-shadow: 10px 10px 5px #888888;">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Details</a></li>
              
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
			  
					<form class="form-horizontal" action="#" method="POST">
                  
                  <input placeholder="venord id" type="hidden" readonly="true" name="id11" id="" value="<?php echo $row['cvid'];  ?>">
                  
                  <input placeholder="send_id" type="hidden" readonly="true" class="form-control" name="f1" id="" value="<?php echo $row['send_id'];  ?>">
             
                  <input placeholder="mid" type="hidden" readonly="true" class="form-control" name="f2" id="" value="<?php echo $row['mid'];  ?>">

                  <input  placeholder="mname" type="hidden" readonly="true" class="form-control" name="f3" id="" value="<?php echo $row['mname'];  ?>">
              
                  <input placeholder="cvid" type="hidden" readonly="true" class="form-control" name="f4" id="" value="<?php echo $row['cvid'];  ?>">
                
				<input placeholder="cvid" type="hidden" readonly="true" class="form-control" name="f5" id="" value="<?php echo $row['date'];  ?>">
				
				<input placeholder="quantity" type="hidden" readonly="true" class="form-control" name="f6" id="" value="<?php echo $row['qty_no'];  ?>">
				
				<input placeholder="unit" type="hidden" readonly="true" class="form-control" name="f7" id="" value="<?php echo $row['ui_no'];  ?>">
				
				<input placeholder="mer desc" type="hidden" readonly="true" class="form-control" name="f8" id="" value="<?php echo $row['mdesc'];  ?>">
				
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Price</label>

                    <div class="col-sm-10">
					
                      <textarea class="form-control"  name="f9" id="" placeholder="Enter you price expectation"></textarea>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Hours</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="f10" id="" placeholder="Time to complete the job"></textarea>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Your Description</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="f11" id="" placeholder="Descrption"></textarea>
                    </div>
                  </div>
				    
                  
                  <div class="form-group">
                    
                  </div>
			
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit"  name="add" class="btn btn-block btn-info">Request Quatation</button>
                    </div>
                  </div>
                </form>
				<?php
		}
		?>
              </div>
             

              <div class="tab-pane" id="settings">
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
		
   </div></section>

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
