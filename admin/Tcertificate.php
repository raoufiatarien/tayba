<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";

$title = $_POST['title'];

$front_img =$_FILES["front_image"]["name"];
$exploaded = explode(".",$front_img);
$ext = $exploaded[1];
$des2 = $title."front_image";
$front_img = $des2.".".$ext;
$move="../img/slider/flexslider/";
$pic1 = $_FILES["front_image"]["tmp_name"];
move_uploaded_file($pic1, $move.$front_img);
$front_img = '"'.encrypt($front_img).'"';

$image1 =$_FILES["image1"]["name"];
$exploaded = explode(".",$image1);
$ext = $exploaded[1];
$des2 = $title."image";
$image1 = $des2.".".$ext;
$move="../img/slider/flexslider/";
$pic1=$_FILES['image1']['tmp_name'];
move_uploaded_file($pic1, $move.$image1);
$image1 = '"'.encrypt($image1).'"';


$title = '"'.encrypt($_POST['title']).'"';


$query2='INSERT INTO certificates VALUES ( NULL, '.$title.','.$front_img.','.$image1.' )';
$requette=$database->prepare($query2);
	if ($requette->execute())
	{
		header("location:certificates.php");
	}else  {
		echo $query2;
			
	}





?>