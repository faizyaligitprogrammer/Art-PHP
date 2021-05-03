<?php
include("connect.php");
$p_id=$_POST['p_id'];
$art_name=$_POST['art_name'];
$dimension=$_POST['dimension'];
$prize=$_POST['prize'];
$desc=$_POST['desc'];
     //include("../imgdown/db_connect.php");
    //s$con = mysql_connect("localhost","root","","car_showroom");
    $qry="update ag_paintings set painting_name='$art_name',painting_price='$prize',dimension='$dimension',description='$desc',active_status='0' where paintings_id='$p_id'";
    $res=mysqli_query($con,$qry);

	header("location:paintings_view.php");

?>