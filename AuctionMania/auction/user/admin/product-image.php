<?php
$id=$_REQUEST['id'];
  include("dbconnect.php");
  $sql="select * from product where pid='$id'";
  $res=mysql_query($sql);
  
  $row=mysql_fetch_array($res);
  
  ?>
  
<img src="../admin/<?php echo $row['pic'];?>" width="450" height="450">