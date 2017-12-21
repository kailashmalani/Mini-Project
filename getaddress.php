<?php
$address = null;

if(isset($_GET['submit'])){
$address = $_GET['address'];}
echo $address;
//header('location: cart.php');
?>