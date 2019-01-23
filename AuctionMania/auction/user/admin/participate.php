<?php
include('dbconnect.php');
session_start();
$pid=$_POST['pid'];
$cat=$_POST['cid'];
$uid=$_SESSION['uid'];

$temp="$uid"."$pid";
echo $temp;
echo $cid;
echo $pid;

$sql="insert into assemble values(null,'$pid','$cat','$uid','','$temp')";
$res=mysqli_query($conn,$sql);
header('location:user-purchase.php');
?>