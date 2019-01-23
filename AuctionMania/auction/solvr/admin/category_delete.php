<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from cat_table where cid='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:category_view.php');
?>