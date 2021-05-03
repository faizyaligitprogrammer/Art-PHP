<?php
include("connect.php");
$c_name=$_POST['c_name'];
$c_details=$_POST['c_details'];
$qry="insert into ag_categories(categories_name,categories_details,category_status) values('$c_name','$c_details','1')";
$res=mysqli_query($con,$qry);
header("location:categories.php");
?>