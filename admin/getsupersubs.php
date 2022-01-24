<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";
$query ="SELECT * FROM sub_sub_sub_category";
$subs = $database->query($query);
$sbs = "<option > ----- </option>";
while ($donnees = $subs->fetch()) {
        $sbs = $sbs."<option>".decrypt($donnees['name'])."</option>";
}
echo $sbs;
?>