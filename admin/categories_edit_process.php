<?php
include("connect.php");
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$c_details=$_POST['c_details'];
$qry="update ag_categories set categories_name='$c_name',categories_details='$c_details' where categories_id='$c_id'";
$res=mysqli_query($con,$qry);
header("location:categories.php");
?>