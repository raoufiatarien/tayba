<?php 
ob_start();
require "database.php";

$classname=$_GET['id'];




$query="DELETE FROM certificates where id= :ID";
$requette=$database->prepare($query);
$requette->execute(array(':ID'=>$classname));

  header("location:certificates.php");

?>