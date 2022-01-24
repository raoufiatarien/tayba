<?php 
ob_start();
session_start();
require "database.php";
$old = '"'.$_POST['old'].'"';
$new = '"'.password_hash($_POST['new'], PASSWORD_BCRYPT).'"';
$requette = $database->prepare('SELECT password from admin LIMIT 1');
$requette->execute();
$pass =$requette->fetch(PDO::FETCH_ASSOC);
$pass = $pass['password']; 
if ( password_verify($_POST['old'],$pass)){
	$query = "UPDATE admin SET password =".$new;
	$req = $database->prepare($query);
	$req->execute();
	$message ="Your password has been successfully changed";
	header("location:settings.php?success=".$message);
}else {
	$message ="old password value is incorrect ";
	header("location:settings.php?Error=".$message);
}
?>