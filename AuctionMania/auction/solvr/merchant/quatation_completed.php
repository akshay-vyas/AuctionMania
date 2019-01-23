<!DOCTYPE html>
<?php  include('dbconnect.php');
session_start();
error_reporting(0);
$current_vendor= $_SESSION['mid'];
$sql = "SELECT * FROM march_completed mc,vendor_confirm vc where mc.cvid = vc.cvid and mc.mid='$current_vendor'";
$cat=mysqli_query($conn,$sql);


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
   <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
</head>
<body class="sidebar-mini skin-blue wysihtml5-supported">
<div class="wrapper">

    <?php include('header.php');  ?>

  <!-- Content Wrapper. Contains page content -->
  

          
             

    <div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-xs-12">
  <div class="row" style=" opacity: 0.9;">
      <?php  $i=1; while($row=mysqli_fetch_assoc($cat)) { ?>
      
      <div class="col-xs-12 col-md-4">
          
            <div class="box box-primary" style="box-shadow: 10px 10px 5px #888888;">
            <div class="box-header with-border">
              <h3 class="box-title">Enquiry Id &nbsp; <?php echo $row['send_id']; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>Vendor Name: &nbsp; <?php echo $row['name']; ?></strong>
        
              <p class="text-muted">
                &nbsp;
              </p>
      <strong><i class="fa fa-book margin-r-5"></i>Vendor ID: &nbsp; <?php echo $row['cvid']; ?></strong>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Date</strong>
        
              <p class="text-muted" align="left"><?php echo $row['rdate'];?></p>
        
        <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Quantity</strong>
        
              <p class="text-muted"><?php echo $row['qty_id'];?> &nbsp; <?php echo $row['uiid'];?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> PRICE</strong>

              <p>
                <?php echo $row['price'];?>
              </p>
        
        <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Reason</strong>

              <p>
                <?php echo $row['mdesc'];?>
              </p>

              <hr>

              
        <div class="row">
        <div class="col-md-6 col-xs-12">
        <button class="btn btn-warning" name="invoice" value="print" onclick="PrintDiv();"><b>INVOICE</b></button>
        </div>
        <div class="col-md-6 col-xs-12">
        <button class="btn btn-success" name="payment" value="submit"><b>PAYMENT</b></button>
        </div>
        
        </div>
            </div>
      
            <!-- /.box-body -->
      
      
          </div>
      </div>
      
      <?php
      }
      ?>
      </div>
          </div></section>
    <!-- Content Header (Page header) -->
   

    <div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
            <div id="page-wrap">

    <h4 id="header">INVOICE</h4>
    
    <div id="identity">
    
            <label id="address">Chris Coyier
123 Appleseed Street
Appleville, WI 53719

Phone: (555) 555-5555</label>

            
    
    </div>
    
    <div style="clear:both"></div>
    
    <div id="customer">

            <label id="customer-title">Widget Corp.
c/o Steve Widget</lable>
<br>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><label>000123</label></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><label id="date">December 15, 2009</label></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>
    
    </div>
    
    <table id="items">
    
      <tr>
          <th>Item</th>
          <th>Description</th>
          <th>Unit Cost</th>
          <th>Quantity</th>
          <th>Price</th>
      </tr>
      
      <tr class="item-row">
          <td class="item-name"><div class="delete-wpr"><label>Web Updates</label></div></td>
          <td class="description"><label>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</label></td>
          <td><label class="cost">$650.00</label></td>
          <td><label class="qty">1</label></td>
          <td><span class="price">$650.00</span></td>
      </tr>
      
      <tr class="item-row">
          <td class="item-name"><div class="delete-wpr"><label>SSL Renewals</label></div></td>

          <td class="description"><label>Yearly renewals of SSL certificates on main domain and several subdomains</label></td>
          <td><label class="cost">$75.00</label></td>
          <td><label class="qty">3</label></td>
          <td><span class="price">$225.00</span></td>
      </tr>
      
     
      
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Subtotal</td>
          <td class="total-value"><div id="subtotal">$875.00</div></td>
      </tr>
      <tr>

          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Total</td>
          <td class="total-value"><div id="total">$875.00</div></td>
      </tr>
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Amount Paid</td>

          <td class="total-value"><label id="paid">$0.00</label></td>
      </tr>
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line balance">Balance Due</td>
          <td class="total-value balance"><div class="due">$875.00</div></td>
      </tr>
    
    </table>
    
    <div id="terms">
      <h5>Terms</h5>
      <label>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</label>
    </div>
  
  </div>


  </div>
</div>


    <!-- /.content -->
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

