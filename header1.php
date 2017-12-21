<?php
session_start();
$username = $_SESSION['username'];

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
<section id="navbar">
<nav class="navbar " style="margin-bottom: 0px;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="home.php" class="redfont">Home</a></li>
        <li><a href="menu.php" class="redfont">Menu</a></li>
        <li><a href="contact.php" class="redfont">Contact us</a></li>
        <?php 
        if($_SESSION['login']!=1){
       echo ' <li data-toggle="modal" data-target="#myModal"><a href="#myModal" class="redfont">Sign In</a></li>
        <li data-toggle="modal" data-target="#myModal1"><a href="#myModal1" class="redfont">Sign Up</a></li>';
      }
        else if($_SESSION['login']==1){
          echo '<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi '.$username.' <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">My Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="track.php">Track Order</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="past.php">Past Order</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="signout.php">Sign Out</a></li>
          </ul>
        </li>';
        }  
        ?>
      </ul>
    </div>
  </div>
  <div style="border: 0.5px solid #cc2900;"></div>
</nav>
</section>
</body>
</html>
