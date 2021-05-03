<?php
include("connect.php");
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

echo $email;

$qry=mysqli_query($con,"update ag_user_details set user_full_name='$name',user_address='$address',user_contact_num='$phone',user_email='$email' where user_details_id='$user_id'");
if($qry)
{
header("location:profile.php");
}
?>