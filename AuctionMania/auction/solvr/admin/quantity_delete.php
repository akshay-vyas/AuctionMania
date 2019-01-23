<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from quantity where qty_id='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:quantity_view.php');
?>