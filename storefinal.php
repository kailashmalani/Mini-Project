<?php
include('model.php');
session_start();

$order = $db->orders;
$tmporders = $db->tmporders;

$order_no = $db->order_no;
$num = $order_no->findOne();
$user = $db->User;
$doc = $tmporders->findOne(array('order_no' => $num['no']));
$curruser = $user->findOne(array('email' => $_SESSION['email']));
$orders = $curruser['orders']+1;
$user->update(array('email' => $_SESSION['email']),array('$set' => array('orders' => $orders)));



$currdate = date("d.m.y");
$time = date("H:i:s");

/*$order->insert($doc);
$insertedorder = $order->findOne(array('order_no' => $num['no']));
$doc = array('$set' => array('order_status' => 'confirmed', 'order_date' => $currdate, 'order_time' => $time));


//echo date(DATE_ISO8601, $currdate->sec);

$order->update(array('order_no' => $num['no']),$doc);
header('location: final.php');*/
$doc1 = array('$push' => array("user_orders" => array('order_no' => $num['no'],'qty' => $doc['qty'], 'order_date' => $currdate, "order-time" => $time, "total" => $doc['total'], 'order_status' => 'confirmed' )));
$user->update(array('email' => $_SESSION['email']),$doc1);

echo '<script> var r= confirm("Order Placed Successfully!");
    if(r==true){window.location = "final.php";}</script>';

//header('location: final.php');

?>