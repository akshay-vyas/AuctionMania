<?php
include('dbconnect.php');
session_start(0);
$suid=$_SESSION['uid'];
$id=$_REQUEST['id'];
$sql1="select * from product where pid ='$id'";
//echo $sql1;
$res1=mysqli_query($conn,$sql1);
//echo $suid;
if(isset($_POST['add']))
{
	if($_POST['pstart']>=$_POST['pend'])
	{
		echo "end date should be greater ";
	}
	else
	{
					$pname=$_POST['pname'];
					$pdesc=$_POST['pdesc'];
					$cat=$_POST['cat'];
					$aprice=$_POST['aprice'];
					$bprice=$_POST['bprice'];
					$pstart=$_POST['pstart'];
					$pend=$_POST['pend'];
          


        // $p_image=$_POST['p_image'];

          $target="../admin/";
$p_image=$_FILES["p_image"]["name"];
$target.=basename($_FILES["p_image"]["name"]);
move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);


          					
					
					$sql="update product set p_name='$pname', p_desc='$pdesc',cid='$cat', pic='$p_image',p_aprice='$aprice',p_bprice='$bprice',p_start='$pstart',p_end='$pend' where pid ='$id'";
					//echo $sql;
					$res=mysqli_query($conn,$sql);
          ?>

          <script>
          window.location = "user-sell.php";
          </script>
          <?php
         
	}
	//$sql="insert into category values(null,'$cat')";
	//$res=mysqli_query($conn,$sql);
}
?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>AUCTIONMANIA
 </title>
  
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
  
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


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
        On Auction
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">On Auction</li>
      </ol>
    </section>

    <!-- Main content -->
   
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          
           
          <div class="box box-success">
            <div class="box-header with-border">
            <div class="col-xs-12">
             
     <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                 <?php   while($row=mysqli_fetch_assoc($res1))
                  { 
         
        ?>
             

        <input type="hidden" name="id2" id="" value="<?php echo $row['pid'];  ?>">
        <div class="form-group">
                  <label for="cat_img">Name</label>
                  <input type="text" class="form-control"  name="pname" id="" value="<?php echo $row['p_name'];  ?>" >
                </div>

                <div class="form-group">
                  <label for="cat_img">Description</label>
                  <input type="text" class="form-control"  name="pdesc" id="" value="<?php echo $row['p_desc'];  ?>" >
                </div>

        <div class="form-group">
                  <label for="cat_img">Category</label>
                  <select name="cat">
    <option value="">Select</option>
           <?php 
    $sql2="SELECT * FROM category";
    $res2=mysqli_query($conn,$sql2);
    while($row2=mysqli_fetch_assoc($res2))
    {
    ?>
     <option value="<?php echo $row2['cid'];?>"<?php if($row['cid']==$row2['cid']){?> selected<?php }?>><?php echo $row2['cat_name'];?></option>
    <?php
    }
    ?>
      </select>
                </div>
        
        <div class="form-group">
                  <label for="cat_img">NEW IMAGE</label>
                  <input type="file" class="form-control" readonly="true" name="p_image" id="" value="" >
           <a href="#" onClick="openWindow('product_image.php?id=<?php echo $row['pid']?>');"><img src="../admin/<?php echo $row['pic'];?>" width="100" height="100"></a>
                </div>
        <div class="form-group">
                  <label for="cat_img">Actual price</label>
                  <input type="text" class="form-control" name="aprice" id="" value="<?php echo $row['p_aprice'];  ?>" >
                </div>

                 <div class="form-group">
                  <label for="cat_img">Actual price</label>
                  <input type="text" class="form-control" name="bprice" id="" value="<?php echo $row['p_bprice'];  ?>" >
                </div>
        <div class="form-group">
                  <label for="cat_img">Start Date</label>
                  <input type="date" class="form-control" name="pstart" id="" value="<?php echo $row['p_start'];  ?>" >
                </div>
        <div class="form-group">
                  <label for="cat_img">End Date</label>
                  <input type="date" class="form-control" name="pend" id="" value="<?php echo $row['p_end'];  ?>" >
                </div>
       
        
        
        
        <?php  }  ?>
            
      <div class="pull-left">
      <button type="submit"  name="add" class="btn btn-block btn-success">Update</button>
<!--  <a> <button type="submit" href="addcatagories.php" name="add" class="btn btn-block btn-success"></ADD></a>-->
        </div>
      </div>
    </form>
 
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

<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
