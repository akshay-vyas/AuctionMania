

<?php
include('dbconnect.php');
session_start();
error_reporting(0);
$id= $_REQUEST['id'];

$sql = "SELECT * FROM march_recived where recieve_id='$id'";
$cat=mysqli_query($conn,$sql);


if(isset($_POST['update']))
{
$recieve = $_POST['recieve'];
$send = $_POST['send'];
$mid = $_POST['mid'];
$mname = $_POST['mname'];
$cvid = $_POST['cvid'];
$rdate = $_POST['rdate'];
$qty = $_POST['qty'];
$uiid = $_POST['uidd'];
$mdesc =$_POST['mdesc'];
$price = $_POST['price'];
$hours = $_POST['hours'];
$vdesc = $_POST['vdesc'];
$status = $_POST['status'];


if($status == 'Completed')
{
  $sql2="insert into march_completed values(null,'$recieve','$send','$mid','$mname','$cvid','$rdate','$qty','$uiid','$mdesc','$price','$hours','$vdesc','$status')";
  //echo $sql2;
  $res2=mysqli_query($conn,$sql2);
  $sql3="delete from march_recived where recieve_id='$recieve'";
  echo $sql3;
  $res3=mysqli_query($conn,$sql3);
  header('location:enquiry_replied_view.php');
}
else
{
  $sql3="update march_recived set status ='$status' where recieve_id ='$recieve'";
  echo $sql3;
  $res3=mysqli_query($conn,$sql3);
header('location:enquiry_replied_view.php');

}


}

?>
<?php


?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Solvr</title>
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
        Accepted Enquiry
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Profile</a></li>
    <li class="active">Enquiery Accept</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Details</h3>
    <div class="pull-right hidden-xs">
  
    </div>
            </div>
          <div class="box box-success">
            <div class="box-header with-border">
              <form method="post">
              <table class="table table-bordered">
                <tr>
                  <th >Enquiry Id</th>
                 <th>Marchant Name</th>
                  <th>Marchant ID </th>
          
                  <th>Date</th>
          <th>Quantity</th>
          <th>units</th>
          <th>Description</th>
          <th>price</th>
          <th>Hours</th>
          <th>Description</th>
          <th>Status</th>
          <th>Confirm</th>
          
                </tr>
        <?php  $i=1; while($row=mysqli_fetch_assoc($cat)) { ?>
        
               <tr>
                  <!--<td><?php echo $i;   ?></td>-->
                 
          
         
          <td><?php echo $row['send_id']; ?></td>
              
                  <td><?php echo $row['mname']; ?></td>
          <td><?php echo $row['mid']; ?></td>
          
          <td><?php echo $row['rdate']; ?></td>
          <td><?php echo $row['qty_id']; ?></td>
          <td><?php echo $row['uiid']; ?></td>
          <td><?php echo $row['mdesc']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><?php echo $row['hours']; ?></td>
          <td><?php echo $row['vdesc']; ?></td>
          <td>
          <select name="status" class="btn btn-info">
                    <option value="On Going">On Going</option>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                  </select>
          </td>
<input type="text" name="recieve" value="<?php echo $row['recieve_id']; ?>" hidden>
<input type="text" name="send" value="<?php echo $row['send_id']; ?>" hidden>
<input type="text" name="mid" value="<?php echo $row['mid']; ?>" hidden>
<input type="text" name="mname" value="<?php echo $row['mname']; ?>" hidden>
<input type="text" name="cvid" value="<?php echo $row['cvid']; ?>" hidden>
<input type="text" name="rdate" value="<?php echo $row['rdate']; ?>" hidden>
<input type="text" name="qty" value="<?php echo $row['qty_id']; ?>" hidden>
<input type="text" name="uiid" value="<?php echo $row['uiid']; ?>" hidden>
<input type="text" name="mdesc" value="<?php echo $row['mdesc']; ?>" hidden>
<input type="text" name="price" value="<?php echo $row['price']; ?>" hidden>
<input type="text" name="hours" value="<?php echo $row['hours']; ?>" hidden>
<input type="text" name="vdesc" value="<?php echo $row['vdesc']; ?>" hidden>
<input type="text" name="view" value="<?php echo $row['status']; ?>" hidden>






                  <td>
                 <button class="btn btn-success fa fa-edit" name="update" value="submit"> UPDATE</button>
                 
          </td>
           
                </tr>
      <?php  $i++; }  ?>  
        
              </table>
            </form>
            </div>

    
    
    
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

