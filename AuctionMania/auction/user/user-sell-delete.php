




<?php
include('dbconnect.php');

session_start(0);
$suid=$_SESSION['uid'];
$id=$_REQUEST['id'];
?>

<?php
$sql1="delete from product where pid ='$id'";
echo $sql1;
$res1=mysqli_query($conn,$sql1);

header('location:user-sell.php');
?>

