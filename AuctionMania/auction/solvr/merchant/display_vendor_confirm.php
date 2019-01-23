<!DOCTYPE html>
<?php  
include('dbconnect.php');
error_reporting(0);
$cat_id=$_GET['id'];


$sql="select * from vendor_confirm where cvid='$cat_id'";
$res=mysqli_query($conn,$sql);


?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Init </title>
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
        Description of client
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Catagory</a></li>
        <li class="active">Edit Catagory</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
	  
        <div class="col-md-3">

          <!-- Profile Image -->
          
          <!-- About Me Box -->
          <div class="box box-primary">
		
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
			
            <div class="box-body">
			<?php   while($row=mysqli_fetch_assoc($res)) {  ?>
			<input type="hidden" name="id11" id="" value="<?php echo $row['cvid'];  ?>">
              <strong><i class="fa fa-book margin-r-5"></i> Name</strong>

              <p class="text-muted">
               <?php echo $row['name'];  ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $row['email'];  ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Mobile</strong>
				<p class="text-muted"><?php echo $row['phone'];  ?></p>
              

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> city</strong>

              <p><?php echo $row['city'];  ?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Details</a></li>
              
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
					<form class="form-horizontal" action="quatation.php">
                  
                  
                  <input type="hidden" name="id11" id="" value="<?php echo $row['cvid'];  ?>">
				  
                  <input placeholder="name" type="hidden" readonly="true" class="form-control" name="f1" id="" value="<?php echo $row['name'];  ?>" >
             
                  <input placeholder="email" type="hidden" readonly="true" class="form-control" name="f2" id="" value="<?php echo $row['email'];  ?>" >

                  <input placeholder="phone" type="hidden" readonly="true" class="form-control" name="f3" id="" value="<?php echo $row['phone'];  ?>" >
              
                  <input placeholder="city" type="hidden" readonly="true" class="form-control" name="f4" id="" value="<?php echo $row['city'];  ?>" >
                
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" readonly="true" name="f5" id="inputExperience" placeholder="Experience"><?php echo $row['vdesc'];  ?></textarea>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Client</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" readonly="true" name="f6" id="inputExperience" placeholder="Experience"><?php echo $row['client'];  ?></textarea>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">services</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="f7" readonly="true" id="inputExperience" placeholder="Experience"><?php echo $row['service'];  ?></textarea>
                    </div>
                  </div>
				    <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">certificate</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="f8" readonly="true" id="inputExperience" placeholder="Experience"><?php echo $row['certificate'];  ?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    
                  </div>
				  			  <?php
			}
			?>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit"  name="add" class="btn btn-block btn-info">Request Quatation</button>
                    </div>
                  </div>
                </form>
              </div>
             

              <div class="tab-pane" id="settings">
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
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
