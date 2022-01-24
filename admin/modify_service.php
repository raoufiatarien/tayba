<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";

$title = $_POST['title'];
if (isset($_FILES["front_image"]["name"]) && !empty($_FILES["front_image"]["name"])){
	$front_img =$_FILES["front_image"]["name"];
	$exploaded = explode(".",$front_img);
	$ext = $exploaded[1];
	$des2 = $title."front_image";
	$front_img = $des2.".".$ext;
	$move="../img/slider/flexslider/";
	$pic1=$_FILES['front_image']['tmp_name'];
	move_uploaded_file($pic1, $move.$front_img);
	$front_img = '"'.encrypt($front_img).'"';
}

if(isset($_FILES["image1"]["name"]) && !empty($_FILES["image1"]["name"])){
	$image1 =$_FILES["image1"]["name"];
	$exploaded = explode(".",$image1);
	$ext = $exploaded[1];
	$des2 = $title."image1";
	$image1 = $des2.".".$ext;
	$move="../img/slider/flexslider/";
	$pic1=$_FILES['image1']['tmp_name'];
	move_uploaded_file($pic1, $move.$image1);
	$image1 = '"'.encrypt($image1).'"';
}
if(isset($_FILES["image2"]["name"]) && !empty($_FILES["image2"]["name"])){
	$image2 =$_FILES["image2"]["name"];
	$exploaded = explode(".",$image2);
	$ext = $exploaded[1];
	$des2 = $title."image2";
	$image2 = $des2.".".$ext;
	$move="../img/slider/flexslider/";
	$pic1=$_FILES['image2']['tmp_name'];
	move_uploaded_file($pic1, $move.$image2);
	$image2 = '"'.encrypt($image2).'"';
}

if(isset($_FILES["image3"]["name"]) && !empty($_FILES["image3"]["name"])){
	$image3 =$_FILES["image3"]["name"];
	$exploaded = explode(".",$image3);
	$ext = $exploaded[1];
	$des2 = $title."image3";
	$image3 = $des2.".".$ext;
	$move="../img/slider/flexslider/";
	$pic1=$_FILES['image3']['tmp_name'];
	move_uploaded_file($pic1, $move.$image3);
	$image3 = '"'.encrypt($image3).'"';

}
$title = '"'.encrypt($_POST['title']).'"';
$description = '"'.encrypt($_POST['description']).'"';

$query2 ='UPDATE services SET title ='.$title;

if (isset($front_img)){
	$query2 = $query2.', front_img = '.$front_img;
}
if(isset($image1)){
	$query2 = $query2.', img1 = '.$image1;
}
if(isset($image2)){
	$query2 = $query2.', img2 = '.$image2;
}
if(isset($image3)){
	$query2 = $query2.', img3 = '.$image3;
}
$query2 = $query2.', description ='.$description.' WHERE id = '.$_POST['id'];
$requette=$database->prepare($query2);
	if ($requette->execute())
	{
		header("location:services.php");
	}else  {
		echo $query2;
			
	}





?>