<?php
session_start();
// Destroying All Sessions
unset($_SESSION['name']);
// Redirecting To Home Page
header("Location: login.php");


?>