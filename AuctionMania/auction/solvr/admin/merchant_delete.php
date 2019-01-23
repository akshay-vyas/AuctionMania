<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from march_register where mid='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:merchant_view.php');
?>