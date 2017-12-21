<?php
include('model.php');
session_start();
$user = $db->User;
$currentuser = $user->findOne(array('email' => $_SESSION['email']));

$address = $_GET['address'];
$_SESSION['address'] = $address;

$user->update(array('email' => $_SESSION['email']),array('$set' => array('address' => $address)));

echo '<script> var r= confirm("Address Changed Successfully!");
    if(r==true){window.location = "payment.php";}</script>';
	

//header('location: payment.php');

?>