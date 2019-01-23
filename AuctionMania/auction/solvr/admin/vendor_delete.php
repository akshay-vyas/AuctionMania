<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from vendor_request where vid='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:vendor_request.php');
?>