 <?php
 include('conn.php');
 ?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Sapiens Clinic</title>

<link rel="shortcut icon" href="saplogo.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.php" class="logo">
<img src="saplogo.png" alt="Logo">
</a>
<a href="index.php" class="logo logo-small">
<img src="saplogo.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>

 

<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

 
<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="saplogo.png" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="saplogo.png" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">

<p class="text-muted mb-0">Administrator</p>
</div>
</div>
 
<a class="dropdown-item" href="logout.php">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
 
 
<li class="">
<a href="enquiry.php"><img src="assets/enquiry.png"  style="height: 30px; width: 30px;" /></i> <span>Enquiry</span> </a>
 
</li>

 
<li class="">
<a href="appoin.php"><img src="assets/appointment.png"  style="height: 30px; width: 30px;" /></i> <span>Appointment</span> </a>
 
</li>
 

<li class=""><a href="logout.php"><img src="assets/logout.png"  style="height: 30px; width: 30px;" /></i> <span>Logout</span> </a></li>
 
  
</div>
</div>
</div>

 

<?php
ob_flush();
?>
