<?php
include("connect.php");
$user_id=$_POST['user_id'];
$event_name=$_POST['event_name'];
$event_venue=$_POST['event_venue'];
$event_date=$_POST['event_date'];
$qry="insert into ag_exibition_notification(requestedby_artist_id,event_name,requested_venue,requested_date,approove_status) values('$user_id','$event_name','$event_venue','$event_date','0')";
$res=mysqli_query($con,$qry);
header("location:exibition_details.php");
?>