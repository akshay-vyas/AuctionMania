<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from admin_login where id='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:admin_view.php');
?>