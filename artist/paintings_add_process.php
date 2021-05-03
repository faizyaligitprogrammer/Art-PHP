<?php 
include("connect.php");
//error_reporting(0);
$category_id = $_POST['category_id'];
$u_id = $_POST['u_id'];
$art_name=$_POST['art_name'];
$prize=$_POST['prize'];
$desc = $_POST['desc'];
$pro_pic=$_FILES['PF_file']['name'];
$dimension = $_POST['dimension'];
$qry="insert into ag_paintings(categories_id,artist_user_id,painting_name,painting_path,painting_price,dimension,description,active_status) values('$category_id','$u_id','$art_name','$pro_pic','$prize','$dimension','$desc','0')";

$res=mysqli_query($con,$qry);
//echo $qry;
//die();

if(move_uploaded_file($_FILES['PF_file']['tmp_name'],'upload/'.$pro_pic))

{
header("location:paintings_view.php");
}
?>