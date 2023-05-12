<?php
$user = $_GET['user_id'];
include('../include/dbconnect.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
$path = 'C:\xampp\htdocs\tiket\images/';
$pic = $_FILES["file"]["name"];
$tmplocation = $_FILES["file"]["tmp_name"];
  
	if (file_exists($path . $pic))
    {
	  unlink($path . $pic);
	  $del = "DELETE FROM user WHERE username='$user'";
	  echo $del;
	  //$result = mysql_query($update) or die(mysql_error());
	  if ($result) {
		header('Location: ../index.html'); }
    }
?>