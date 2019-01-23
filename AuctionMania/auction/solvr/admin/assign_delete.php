<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from assign where aid='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:assign_view.php');
?>