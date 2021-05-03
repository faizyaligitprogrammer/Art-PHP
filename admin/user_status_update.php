<?php
$sts=$_GET['sts'];
$id=$_GET['id'];
$loginid=$_GET['loginid'];
include("connect.php");
if($sts=='1')
{
	$sql=mysqli_query($con,"UPDATE ag_user_details SET user_status='0' where user_details_id='$id'");
	//login status updateed
	$sql1=mysqli_query($con,"UPDATE ag_user_login SET active_status='0' where login_id='$loginid'");
	header("location:user_details.php");

}
else
{
	$sql=mysqli_query($con,"UPDATE ag_user_details SET user_status='1' where user_details_id='$id'");
	//login status updateed
	$sql1=mysqli_query($con,"UPDATE ag_user_login SET active_status='1' where login_id='$loginid'");
	header("location:user_details.php");
}
?>