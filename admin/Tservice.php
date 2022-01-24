<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";

$title = $_POST['title'];
$description = '"'.encrypt($_POST['description']).'"';
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
$des2 = $title."image1";
$image1 = $des2.".".$ext;
$move="../img/slider/flexslider/";
$pic1=$_FILES['image1']['tmp_name'];
move_uploaded_file($pic1, $move.$image1);
$image1 = '"'.encrypt($image1).'"';

$image2 =$_FILES["image2"]["name"];
$exploaded = explode(".",$image2);
$ext = $exploaded[1];
$des2 = $title."image2";
$image2 = $des2.".".$ext;
$move="../img/slider/flexslider/";
$pic1=$_FILES['image2']['tmp_name'];
move_uploaded_file($pic1, $move.$image2);
$image2 = '"'.encrypt($image2).'"';

$image3 =$_FILES["image3"]["name"];
$exploaded = explode(".",$image3);
$ext = $exploaded[1];
$des2 = $title."image3";
$image3 = $des2.".".$ext;
$move="../img/slider/flexslider/";
$pic1=$_FILES['image3']['tmp_name'];
move_uploaded_file($pic1, $move.$image3);
$image3 = '"'.encrypt($image3).'"';

$title = '"'.encrypt($_POST['title']).'"';


$query2='INSERT INTO services VALUES ( NULL, '.$title.','.$front_img.','.$image1.','.$image2.','.$image3.','.$description.' )';
$requette=$database->prepare($query2);
	if ($requette->execute())
	{
		header("location:services.php");
	}else  {
		echo $query2;
			
	}





?>