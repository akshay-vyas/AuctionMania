<?php
include('dbconnect.php');
$del=$_GET['id'];
$sql="select * from march_decline where decline_id='$del'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
$v_flag= $row['v_flag'];
$m_flag= $row['m_flag'];
}
echo $v_flag,$m_flag;
if($m_flag=='0')
{
	$sql1="delete from march_decline where decline_id='$del'";
	$res1=mysqli_query($conn,$sql1);
	header('location:enquiry_view.php');
}
else
{
	$sql2="update march_decline set v_flag=0 where decline_id='$del'";
	$res2=mysqli_query($conn,$sql2);
	header('location:enquiry_decline_view.php');
}
?>





 