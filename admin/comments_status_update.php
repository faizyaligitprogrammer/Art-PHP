<?php
include("connect.php");
$sts=$_GET['sts'];
$c_id=$_GET['c_id'];

if($sts=='1')
{
	$sql=mysqli_query($con,"UPDATE ag_comments SET display_status='0' where comments_id='$c_id'");
	header("location:comments.php");
}
else
{
	$sql=mysqli_query($con,"UPDATE ag_comments SET display_status='1' where comments_id='$c_id'");
	header("location:comments.php");
}
?>