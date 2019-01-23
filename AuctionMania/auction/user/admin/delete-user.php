<!doctype html>
<html>
<head>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  


</head>
<body>
	</body>
	</html>

<?php
include('dbconnect.php');
session_start();
$user = $_REQUEST['id'];
$sql ="delete from user where uid = '$user'";
$res =mysqli_query($conn,$sql);
 
  	

?>
<script>
swal("Please Note!", "User has been deleted!", "info").then(function() {
    window.location = "user-view.php";
});;

</script>
