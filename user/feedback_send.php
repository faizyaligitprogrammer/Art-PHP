<?php
include("connect.php");
$user_id=$_POST['user_id'];
$art_id=$_POST['art_id'];
$artist_id=$_POST['artist_id'];
$message=$_POST['message'];
$qry=mysqli_query($con,"insert into ag_comments(painting_id,user_details_id,comments,display_status) values('$art_id','$user_id','$message','0')");
header("location:art_details.php?art_id=$art_id&&user_id=$artist_id");

?>