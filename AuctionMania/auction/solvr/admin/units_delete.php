<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from units where ui_no='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:units_view.php');
?>