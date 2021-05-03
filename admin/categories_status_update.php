<?php
$sts=$_GET['sts'];
$c_id=$_GET['c_id'];
include("connect.php");
if($sts=='1')
{
	$sql=mysqli_query($con,"UPDATE ag_categories SET category_status='0' where categories_id='$c_id'");
	header("location:categories.php");
}
else
{
	$sql=mysqli_query($con,"UPDATE ag_categories SET category_status='1' where categories_id='$c_id'");
	header("location:categories.php");
}
?>