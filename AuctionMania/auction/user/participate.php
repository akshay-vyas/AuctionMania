<?php
include('dbconnect.php');
session_start();
$pid=$_POST['pid'];
$cat=$_POST['cid'];
$uid=$_SESSION['uid'];
$today = $_POST['pend'];


$sql="insert into assemble values(null,'$pid','$cat','$uid','','$today')";
$res=mysqli_query($conn,$sql);
header('location:auction-list.php');
?>