<?php
include('model.php');
$foodelight = $db->foodelight;


$dishname=$_GET['dishname'];


$grid=$db->getGridFS();
$cursor=$grid->findOne(array("dish_name"=>$dishname,"about"=>"dish"));
header("Content-type:$cursor->file['type'];");
echo $cursor->getBytes();

/*
On HTML page use
echo "<img src='getfood_img.php?dishname=$key['dish_name']'>";
*/
?>


