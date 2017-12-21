<?php
include('model.php');
session_start();
$order_no = $db->order_no;
$num = $order_no->findOne();
$number = $num['no']+1;
$order_no->update(array('no' => $num['no']),array('$set' => array('no' => $number)));

$tmporders = $db->tmporders;
$tmporders->drop();

$_SESSION['login']=null;
$_SESSION['email']=null;
$_SESSION['username']=null;
$_SESSION['mobile']=null;
$_SESSION['address']=null;
$_SESSION['type']=null;
$_SESSION['paid']=null;
session_write_close();
session_destroy();

header('location: index.php');

?>