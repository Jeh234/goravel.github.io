<?php 
session_start();
include('config/dbcon.php');

if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login To Access Dashboard";
    header("Location: ../accManagement/login.php");
    exit(0);
}
else
{
    if($_SESSION['auth_role'] != "1")
    {
    $_SESSION['message'] = "You are not authorized as admin";
    header("Location: ../accManagement/login.php");
    exit(0);
    }
}
?>