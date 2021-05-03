<?php 

include("connect.php");
//error_reporting(0);
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$specialities=$_POST['specialities'];
$pro_pic=$_FILES['PF_file']['name'];
$uname = $_POST['username'];
$pwd = $_POST['password'];
$pass = md5($pwd);
$qry="insert into ag_user_login(user_type_id,login_name,login_password,active_status) values(2,'$uname','$pass',1)";
$res=mysqli_query($con,$qry);


$t=mysqli_query($con,"select max(login_id) from ag_user_login");
$f=mysqli_fetch_array($t);
$id=$f[0];

$sql="insert into ag_user_details(login_id,user_full_name,user_address,user_contact_num,user_email,user_status) values('$id','$name','$address','$phone','$email','1')";
$result=mysqli_query($con,$sql);

$t1=mysqli_query($con,"select max(user_details_id) from ag_user_details");
$f1=mysqli_fetch_array($t1);
$id1=$f1[0];


$query="insert into ag_artist(user_details_id,dob,specilaities,artist_image,artist_status) values('$id1','$dob','$specialities','$pro_pic','1')";
$reslt=mysqli_query($con,$query);
//echo $query;
//die();
move_uploaded_file($_FILES['PF_file']['tmp_name'],'upload/'.$pro_pic);
header("location:login.php");
?>