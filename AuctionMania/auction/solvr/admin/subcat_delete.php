<?php  
$conn=mysqli_connect('localhost','root','','init');
$cat_id=$_GET['id'];
$sql="delete from sub_cat_table where id='$cat_id'";
$res=mysqli_query($conn,$sql);
header('location:subcat_view.php');
?>