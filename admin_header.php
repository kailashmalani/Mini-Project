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
        <li class="active"><a href="index.php" class="redfont">Home</a></li>
        <li><a href="new.php" class="redfont">Add food items</a></li>
        <li><a href="remove.php" class="redfont">Remove food items</a></li>
        <?php 
        if($_SESSION['login']!=1){
       echo ' <li data-toggle="modal" data-target="#myModal"><a href="#myModal" class="redfont">Sign In</a></li>
        <li data-toggle="modal" data-target="#myModal1"><a href="#myModal1" class="redfont">Sign Up</a></li>';
      }
        else if($_SESSION['login']==1){
          echo '<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi '.$username.' <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="totalamt.php">View Statistics</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="admin_past.php">Past Orders</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="signout.php">Sign Out</a></li>
          </ul>
        </li>';
        }  
        ?>
      </ul>
    </div>
  </div>
</nav>

  



<!-- Modal -->
  
<div style="border: 0.5px solid #cc2900;"></div>
  
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>