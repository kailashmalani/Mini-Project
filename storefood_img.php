<?php
include ('model.php');
session_start();

$grid = $db->getGridFS();


$f = $_FILES['dish_img'];
$dishname = $_SESSION['dish_name'];
$dishname = str_replace(' ', '', $dishname);
$tmpname = $f['tmp_name'];

$grid->storeFile($tmpname, array('dish_name'=>$dishname ,'about' => 'dish'));
$_SESSION['imgstored']=1;

header('location: admin1.php');


?>