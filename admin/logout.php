<?php
session_start();
unset($_SESSION['user_name']); 
if(session_destroy())
{
header("location:../login.php");
}
?>