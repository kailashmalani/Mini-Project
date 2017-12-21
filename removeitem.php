<?php
include('model.php');
$fooditems = $db->fooditems;
$dishid = $_GET['dishid'];
$category = $_GET['category'];

$fooditems->remove(array('_id' => new MongoId($dishid)));
header('location: remove1.php?category='.$category);

?>