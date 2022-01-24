<?php 
ob_start();
require "database.php";

$classname=$_GET['id'];




$query="DELETE FROM slides where id= :ID";
$requette=$database->prepare($query);
$requette->execute(array(':ID'=>$classname));

  header("location:slides.php");

?>