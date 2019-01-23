<?php

include('dbconnect.php');
session_start();
$uid=$_SESSION['uid'];
date_default_timezone_set('Asia/Calcutta');
$today= date("Y-m-d");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AUCTIONMANIA</title>
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
  <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  
  <script src="sweetalert.js"></script>
    <style>
* {
    box-sizing: border-box;
}
.button3:hover {
    background-color: #f44336;
    color: white;
}

.zoom {
    padding: 25px;
    
    transition: transform .2s;
    width: 100px;
    height: 100px;
    margin: 0 auto;
}

.zoom:hover {
  padding: 10px;
    -ms-transform: scale(2.5); /* IE 9 */
    -webkit-transform: scale(2.5); /* Safari 3-8 */
    transform: scale(1.5); 
}
</style>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php  include('header.php'); ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SELECTED PRODUCT
      </h1>
      <ol class="breadcrumb">
        <li><a href="main_home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">selected</li>
      </ol>
    </section>

    <!-- Main content -->

        <!-- /.col -->
	<div class="row">
       <?php
      include('dbconnect.php');
      $sql="select * from category c, product p,assemble a,user u where p.pid=a.pid and u.uid=a.uid and p.cid =  c.cid and a.uid = '$uid' and a.temp > '$today'";
      $res=mysqli_query($conn,$sql);
      
      
      
      while($row=mysqli_fetch_assoc($res))
      {
      
      ?>
        <div class="col-md-4">
         
   <div class="box box-primary">
            <div class="box-header with-border">
			
              <h3 class="box-title">Product Name: &nbsp;<?php echo $row['p_name'];?></h3>
              <img class="profile-user-img img-responsive img-circle zoom" src="../admin/<?php echo $row['pic'];?>" alt="User profile picture" width=50% height=50%>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Product Description: &nbsp;<?php echo $row['p_desc'];?></strong>

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
				HIGHEST BID:&nbsp;<?php
$high=$row['pid'];
$sql7="select MAX(h_price),uid from assemble where pid = '$high'";

$res7=mysqli_query($conn,$sql7);
$row7=mysqli_fetch_array($res7);





         echo $row7[0];

        
         ?></span></strong>
				
         
            </div>
			<form method="POST" action="">
			<div class="input-group input-group-sm col-md-12">
			
                <input type="text" name="amt" class="form-control" style="background-color: white; " placeholder="Enter the bid here">
				<input type="hidden" name="aid" class="form-control" value=<?php echo $row['aid'];?>>
				<input type="hidden" name="h_price" class="form-control" value=<?php echo $row['h_price'];?>>
        <input type="hidden" name="b_price" class="form-control" value=<?php echo $row['p_bprice'];?>>
                    <hr>
                     <center> <button style="padding:5px;" type="submit" name="update" value="submit" class="btn btn-info btn-flat fa fa-gavel">&nbsp;&nbsp;BID NOW&nbsp;&nbsp;&nbsp;</button></center>
                    
					
              </div></form><br>
            <!-- /.box-body -->
          </div>
		 
          <!-- /. box -->
        </div>

         <?php
      }
      ?>
    </div>
		
        <!-- /.col -->
     
      <!-- /.row -->
    
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2018 <a href="#">AUCTIONMANIA</a>.</strong> All rights
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
<?php
date_default_timezone_set('Asia/Calcutta');
$today= date("Y-m-d");
if(isset($_POST['update']))
{
  $amt=$_POST['amt'];
  $aid=$_POST['aid'];
  $h_price = $_POST['h_price'];
  $b_price = $_POST['b_price'];
  if($amt < $h_price || $amt < $b_price )
  {
    
     ?>
        <script>
     

swal({
    title: "INVALID BID",
    text: "Place bid higher than present value!",
    type: "error"
}).then(function() {
    window.location = "auction-list.php";
});
      </script>
        <?php
  }
  else
  {
   

  $sql1="update assemble set h_price='$amt' where aid='$aid' and h_price < '$amt'";
 
  $res1=mysqli_query($conn,$sql1);
    ?>
        <script>
     

swal({
    title: "Congrats",
    text: "Bid was placed successfully!",
    type: "success"
}).then(function() {
    window.location = "auction-list.php";
});
      </script>
        <?php
}
}
?>
