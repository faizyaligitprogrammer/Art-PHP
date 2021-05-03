<?php
session_start();
include('connect.php');
//error_reporting(0);
$uname = $_POST['uname'];

 $query = "SELECT * FROM `ag_user_login` WHERE `login_name`='$uname'";

$result = mysqli_query($con,$query)or die(mysql_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo '1';
			
		}
		else{
			echo '0';
		}
?>