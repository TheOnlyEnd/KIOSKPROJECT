<?php
include('../include/dbconn.php');
$pid=4; //if you want to test
//$pid=@$_POST['pid']; 
$sql="select * from product where product_id=$pid";
$res=mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
$r=mysqli_fetch_array($res,MYSQLI_NUM);
$json[]=$r;
echo json_encode($json,JSON_UNESCAPED_UNICODE);
mysqli_free_result($res);
mysqli_close($dbconn);
?>
