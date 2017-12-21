<?php
include('model.php');
$fooditems = $db->fooditems;


$dishnm = $_GET['dishnm'];
$dishdesc = $_GET['dishdesc'];
$dishcost = $_GET['dishcost'];
$category = $_GET['category'];

$doc = array(
	"dish_name" => $dishnm,
	"dish_desc" => $dishdesc,
	"dish_cost" => $dishcost,
	"category" => $category);

$fooditems->insert($doc);

$cursor = $fooditems->findOne($doc);

session_start();
$_SESSION['imgstored']=0;
$_SESSION['dish_name'] = $dishnm;
$_SESSION['dish_desc'] = $dishdesc;
$_SESSION['dish_cost'] = $dishcost;
$_SESSION['id'] = $cursor['_id'];
header('location: admin1.php');
?>