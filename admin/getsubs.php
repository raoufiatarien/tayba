<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";
if($_GET['cat'] === "Bio dates & Conventional"){
	$_GET['cat'] = "Bio dates";
}
$cat = '"%'.encrypt($_GET['cat']).'%"';
//echo $_GET['cat'].'lol';
//echo "<br>".$cat;
$query ="SELECT * FROM sub_category WHERE category LIKE ".$cat;
$subs = $database->query($query);
$sbs = "<option > ----- </option>";
while ($donnees = $subs->fetch()) {
        $sbs = $sbs."<option>".decrypt($donnees['name'])."</option>";
}
echo $sbs;
?>