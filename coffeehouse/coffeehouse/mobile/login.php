<?php
// Inialize session
session_start();

// Include database connection settings
include('../include/dbconn.php');

	/* capture values from HTML form */
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql= "SELECT username, password, level_id FROM user WHERE username= '$username' AND password= '$password'";
	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error());
	$row = mysqli_num_rows($query);
	
	if($row == 0){
	 // Jump to indexwrong page
	echo "NO DATA";
	}
	else{
	 $r = mysqli_fetch_assoc($query);
	 $username= $r['username'];
	 //$password= $r['password'];
	 $level= $r['level_id'];
	 	
		if($level==1) { 
			echo "1";
		} 
		elseif($level==2) {
			echo "2";
		}
		else {
			
		}
		
	}	
	
	//echo $username;
	//echo "<br>";
	//echo $password;


mysqli_close($dbconn);	
?>