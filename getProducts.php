<?php
ob_start();
require 'admin/database.php';
require "admin/hash.php"; 
$query="SELECT * FROM products";
if(isset($_GET['cat'])){
	$_GET['cat'] = str_replace("_"," ",$_GET['cat']);
	$cat = "'%".encrypt($_GET['cat'])."%'";
	$query = $query." WHERE category LIKE ".$cat;
}
if(isset($_GET['sub'])){
	$_GET['sub'] = str_replace("_"," ",$_GET['sub']);
	$sub= "'".encrypt($_GET['sub'])."'";
	$query = $query." AND sub_category = ".$sub;
}
if(isset($_GET['sub_sub'])){
	$_GET['sub_sub'] = str_replace("_"," ",$_GET['sub_sub']);
	$sub_sub= "'".encrypt($_GET['sub_sub'])."'";
	$query = $query." AND sub_sub_category = ".$sub_sub;
}
if(isset($_GET['sub_sub_sub']) && !empty($_GET['sub_sub_sub'])){
	$_GET['sub_sub_sub'] = str_replace("_"," ",$_GET['sub_sub_sub']);
	$sub_sub_sub= "'".encrypt($_GET['sub_sub_sub'])."'";
	$query = $query." AND sub_sub_sub_category = ".$sub_sub_sub;
}
$products = $database->query($query);
$response ="";
while ( $product = $products->fetch()) {
	$response = $response.'<li class="portfolio-item2">
                <div class="thumb-wrapp">
                  <a class="lightbox" onclick="img(\'img/portfolio/'.decrypt($product['pic']).'\')" href="#dog" data-pretty="prettyPhoto" title="zoom"><img src="img/portfolio/'.decrypt($product['pic']).'" class="folio-image" alt=""></a>
                  <div class="folio-caption">
                    <h5>'.decrypt($product['name']).'</h5>
                    <span class="folio-link">
									<div style="visibility: hidden;">
										<i class="icon-rounded  icon-32 icon-zoom-in"></i>
									</div>
									</span>
                  </div>
                </div>
                <div class="hidden-md hidden-lg"><br><br></div>
              </li>';
}
echo $response;
?>