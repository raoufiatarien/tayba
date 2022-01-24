<?php 
ob_start();
session_start();
require "database.php";
require  "hash.php";

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$id = $_POST['id'];
$pic=$_FILES["Image_name"]["name"];
if ($pic !== ''){
    $exploaded = explode(".",$pic);
    $ext = $exploaded[1];
    $des2 = generateRandomString();
    $pic = $des2.".".$ext;

    $move="../img/slider/parallax/";
    $pic1=$_FILES['Image_name']['tmp_name'];
    move_uploaded_file($pic1, $move.$pic);
    $pic = '"'.encrypt($pic).'"';

    $query2='UPDATE slides SET img = '.$pic.' 
    WHERE id ='.$id;
    $requette=$database->prepare($query2);
    if ($requette->execute())
    {
        header("location:slides.php");
    }else  {
        echo $query2;
            
    }
}else {
     header("location:slides.php");
}











?>