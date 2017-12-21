<?php
include('model.php');

$newqty = $_GET['newqty'];
$dish_id = $_GET['dish_id'];
$orders = $db->order_no;
$tmporders = $db->tmporders;
$num = $orders->findOne();


$tmporders->update(array("order_no" => $num['no'], "qty.dish_id" => new MongoId($dish_id)),array('$set' => array("qty.$.qty"=> "$newqty")));

header('location: cart.php');
 

?>