<?php
$sts=$_GET['sts'];
$id=$_GET['id'];
$p_id=$_GET['p_id'];
include("connect.php");
if($sts=='1')
{
	$sql=mysqli_query($con,"UPDATE ag_paintings SET active_status='0' where paintings_id='$p_id'");
	header("location:artist_paintings.php?id=$id");
}
else
{
	$sql=mysqli_query($con,"UPDATE ag_paintings SET active_status='1' where paintings_id='$p_id'");
	header("location:artist_paintings.php?id=$id");
}
?>