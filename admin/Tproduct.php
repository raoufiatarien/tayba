<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$front_img =$_FILES["pic"]["name"];
$exploaded = explode(".",$front_img);
$ext = $exploaded[1];
$des2 = generateRandomString();
$front_img = $des2.".".$ext;
$move="../img/portfolio/";
$pic1=$_FILES['pic']['tmp_name'];
move_uploaded_file($pic1, $move.$front_img);
$front_img = '"'.encrypt($front_img).'"';


$title = '"'.encrypt($_POST['title']).'"';
if($_POST['category'] === "Bio dates & Conventional"){
	$category = '"C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=="';
}else{
	$category = '"'.encrypt($_POST['category']).'"';
}

$subcategory = '"'.encrypt($_POST['subcategory']).'"';
if(isset($_POST['subsub'])){
	if($_POST['subsub'] !== "-----"){ 
		$subsub = '"'.encrypt($_POST['subsub']).'"';
	}else {
		$subsub = 'NULL';
	}
}else {
	$subsub = 'NULL';
}

if(isset($_POST['supersub'])){
	if($_POST['supersub'] !== "-----"){
		$supersub = '"'.encrypt($_POST['supersub']).'"';
	}else {
		$supersub = 'NULL';
	}
	
}else {
	$supersub = 'NULL';
}

$query2='INSERT INTO products VALUES ( NULL, '.$title.','.$front_img.','.$category.','.$subcategory.','.$subsub.','.$supersub.' )';
$requette=$database->prepare($query2);
	if ($requette->execute())
	{
		header("location:products.php");
	}else  {
		echo $query2;
			
	}





?>