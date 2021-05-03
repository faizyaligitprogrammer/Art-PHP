<?php
include("connect.php");
$sts=$_GET['sts'];
$id=$_GET['id'];
$logid=$_GET['logid'];
if($sts=='1')
{
	$sql=mysqli_query($con,"UPDATE ag_user_details SET user_status='0' where user_details_id='$id'");
	$sql2=mysqli_query($con,"UPDATE ag_user_login SET active_status='0' where login_id='$logid'");
	header("location:artist_details.php");
}
else
{
	$sql=mysqli_query($con,"UPDATE ag_user_details SET user_status='1' where user_details_id='$id'");
	$sql2=mysqli_query($con,"UPDATE ag_user_login SET active_status='1' where login_id='$logid'");
	header("location:artist_details.php");
}
?>