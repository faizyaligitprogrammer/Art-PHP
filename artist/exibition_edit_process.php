<?php
include("connect.php");
$event_id=$_POST['event_id'];
$event_name=$_POST['event_name'];
$event_venue=$_POST['event_venue'];
$event_date=$_POST['event_date'];
$qry="update ag_exibition_notification set event_name='$event_name',requested_venue='$event_venue',requested_date='$event_date',approove_status='0' where exibition_notification_id='$event_id'";
    $res=mysqli_query($con,$qry);

	header("location:exibition_details.php");

?>