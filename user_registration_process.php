<?php 
include("connect.php");
//error_reporting(0);
if(isset($_POST['form_submit']))
{
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uname = $_POST['username'];
$pwd = $_POST['password'];
$pass = md5($pwd);
$qry="insert into ag_user_login(user_type_id,login_name,login_password,active_status) values(3,'$uname','$pass',1)";
$res=mysqli_query($con,$qry);

$t=mysqli_query($con,"select max(login_id) from ag_user_login");
$f=mysqli_fetch_array($t);
$id=$f[0];
echo "<b>".$id."</b>";
$sql1="insert into ag_user_details(login_id,user_full_name,user_address,user_contact_num,user_email,user_status) values('$id','$name','$address','$phone','$email','1')";
$result1=mysqli_query($con,$sql1);
header("location:login.php");
// echo $name;
// echo "<br>";
// echo $address;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $phone;
// echo "<br>";




}

?>