<?php
include("connect.php");
$sts=$_GET['sts'];
$exbtn_id=$_GET['exbtn_id'];
$user_id=$_GET['user_id'];


if($sts=='1')
{
	$sql=mysqli_query($con,"UPDATE ag_exibition_notification SET approove_status='0' where exibition_notification_id='$exbtn_id'");
	header("location:artist_events.php?id=$user_id");
}
else
{
	$sql=mysqli_query($con,"UPDATE ag_exibition_notification SET approove_status='1' where exibition_notification_id='$exbtn_id'");
	header("location:artist_events.php?id=$user_id");
}
?>