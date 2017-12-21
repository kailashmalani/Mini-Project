<?php
include('model.php');
session_start();

$username = $_GET['username'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$address = $_GET['address'];

$user = $db->User;

$user->update(array('email' => $_SESSION['email']),array('$set' => array('username' => $username, 'email' => $email, 'mobile' => $mobile, 'address' => $address)));

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['mobile'] = $mobile;
$_SESSION['address'] = $address;

echo '<script> var r= confirm("Profile Updated Successfully!");
    if(r==true){window.location = "profile.php";}</script>';
//header('location: profile.php');

?>