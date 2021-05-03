<?php
include("connect.php");
$user_id=$_GET['user_id'];
$art_id=$_GET['art_id'];
$purchased_user_id=$_GET['purchased_user_id'];
$date=date('Y-m-d');
$qry=mysqli_query($con,"insert into ag_purchase_request(painting_id,user_details_id,requested_date,request_status) values('$art_id','$purchased_user_id','$date','1')");
header("location:art_purchase_confirmation.php?user_id=$user_id&&art_id=$art_id&&purchased_user_id=$purchased_user_id");
?>