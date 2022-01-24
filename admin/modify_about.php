<?php 
ob_start();
session_start();
require "database.php";
require "hash.php";

$value = encrypt($_POST['value']);
$query2 = 'UPDATE about SET text = "'.$value.'"  WHERE id = 2';
$requette=$database->prepare($query2);
	if ($requette->execute())
	{	
		$msg = "The about section has been succesfully modified";
		header("location:index.php?msg=".$msg);
	}else  {
		echo $query2;
			
	}

