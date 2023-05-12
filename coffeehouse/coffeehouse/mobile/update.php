<?php
include('../include/dbconn.php');

$pid=@$_POST['pid'];
$name=@$_POST['name'];
$description=@$_POST['description'];
$status=@$_POST['status'];
$category=@$_POST['category'];
$size=@$_POST['size'];
$price=@$_POST['price'];

$sql="update product set product_name='$name', product_description='$description', product_status='$status', product_category='$category', product_size='$size', product_price='$price' where product_id=$pid";
$res=mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
if ($res===true) echo "OK_EDIT";
mysqli_close($dbconn);
?>
