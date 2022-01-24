<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";
$username = '"'.$_POST['Username'].'"';
$password = '"'.$_POST['Password'].'"';
$query = "SELECT username FROM admin LIMIT 1";
$exist = $database->prepare($query);
$exist->execute();
$n = $exist->fetch(PDO::FETCH_ASSOC);
$message ="";
if (!password_verify($_POST['Username'], $n['username'])){
	$message = "Incorrect username";
	header("location:login.php?Error=".$message);
}else {
	$query1 = "SELECT * FROM admin LIMIT 1";
	$exist = $database->prepare($query1);
	$exist->execute();
	$n = $exist->fetch(PDO::FETCH_ASSOC);
	if (!password_verify($_POST['Password'], $n['password'])){
		$message = "Incorrect password";
		header("location:login.php?Error=".$message);
	}else{
		
		date_default_timezone_set('Africa/Algiers');
		$date = date('Y-m-d');
		$time = date('H:i:s'); 
		$q ="UPDATE admin SET login_date = '".encrypt($date)."' , login_time = '".encrypt($time)."'";
		$requette = $database->prepare($q);
		$requette->execute();
		$_SESSION['username'] = $_POST['Username'];
		$_SESSION['date'] = $date;
		$_SESSION['time'] = substr($time, 0, 5);
		header("location:index.php");
	}
}
?>