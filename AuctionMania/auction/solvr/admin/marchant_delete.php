<?php
include('dbconnect.php');
$delete=$_GET['id'];

$sql="delete from march_reg where mid='$delete'";
$res=mysqli_query($conn,$sql);
header('location:marchant_view.php');
?>