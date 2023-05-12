<?php
include('../include/dbconn.php');
$name=@$_POST['name']; //the @ is optional, to suppress error messages
$des=@$_POST['description'];
$status=@$_POST['status'];
$cat=@$_POST['category'];
$size=@$_POST['size'];
$price=@$_POST['price'];
/*$name="data"; //the @ is optional, to suppress error messages
$des="data";
$status=1;
$cat=1;
$size=1;
$price=1;*/

$sql="insert into product (product_name,product_description,product_status,product_category,product_size,product_price) values('$name','$des',$status,$cat,$size,$price)";
$res=mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
if ($res==1) echo "OK";
mysqli_close($dbconn);
?>
