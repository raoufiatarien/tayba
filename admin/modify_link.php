<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";

$old = $_POST['old'];
$field = $_POST['field'];
$value = '"'.encrypt($_POST['value']).'"';

$query ="ALTER TABLE links CHANGE ".$old." ".$field." text";
$requette=$database->prepare($query);
    if ($requette->execute())
    {
        $query2 = "UPDATE links SET ".$field." = ".$value;
        $requette=$database->prepare($query2);
        if($requette->execute()){
           header("location:infos.php"); 
       }else {
            echo $query2;
       }
        
    }else  {
        echo $query;
            
    }
?>