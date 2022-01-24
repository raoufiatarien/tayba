<?php 
ob_start();
require "database.php";

$classname=$_GET['id'];




$query="DELETE FROM products where id= :ID";
$requette=$database->prepare($query);
$requette->execute(array(':ID'=>$classname));

  header("location:products.php");

?>