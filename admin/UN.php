<?php 
ob_start();
session_start();
require "database.php";
$username = '"'.password_hash($_POST['username'], PASSWORD_BCRYPT).'"';

$requette = $database->prepare('UPDATE admin SET username = '.$username);
$requette->execute();
$_SESSION['username'] = $_POST['username'];
$message ="Your username has been successfully changed";
header("location:settings.php?success=".$message);
?>