<?php
include('model.php');
session_start();

$user = $db->User;

$user_orders = $user->findOne(array('email' => $_SESSION['email']));

$orders = $user_orders['orders'];
 
if($orders == 0){ 
  header('location: nopastorder.php');
}
else{
  header('location: pastorder.php');
}
//var_dump($user_orders['user_orders']);

?>