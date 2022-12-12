<?php 
    session_start();
    require_once("../admin/config.php");

    if($_SESSION['key'] != "VotersKey")
    {
        echo "<script> location.assign('../admin/inc/logout.php'); </script>";
        die;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter's Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="./assets/css/login.css">
		<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body >
    
<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="../assets/images/logo.gif" width="30" height="30" class="d-inline-block align-top" alt="">
    <B>WELCOME TO ONLINE VOTING SYSTEM</B>
  </a>
</nav>
 





