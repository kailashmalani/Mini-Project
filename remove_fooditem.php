<?php
include('model.php');

$orders = $db->order_no;
$num = $orders->findOne();

$tmporders = $db->tmporders;

$dish_id = new MongoId($_GET['dish_id']);

//echo $dish_id;

//$doc = $tmporders->findOne(array('order_no' => $num['no']));

$doc = array('$pull' => array('qty' => array('dish_id' => $dish_id)));
$tmporders->update(array('order_no' => $num['no']),$doc);

header('location: cart.php');


?>
