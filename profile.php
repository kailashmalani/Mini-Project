<?php
include('model.php');
include('header.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/text.css">
</head>

<body style="overflow-x: hidden;">
  <!--Navigation end-->
  <nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">My Profile</a></li>
      <li><a href="track.php">Track Order</a></li>
      <li><a href="past.php">Past Orders</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default" style="margin-top:0px;margin-bottom:80px;">
    <form action="updateprofile.php" method="GET">
      <div class="panel-heading">
        <h4 class="panel-title">
            <div class="row">
              <div class="col-md-9" >
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="font-size:25px;color:#cc2900;margin-left:450px;font-weight:bolder;color:blue;">Profile</a>
              </div>
              <div class="col-md-3">
                  <button class="btn btn-primary btn-sm pull-right">SAVE</button>
              </div>   
            </div>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body" style="padding-top:20px;font-size:15px;font-weight:bold;color:black;"><span style="font-size:22px;margin-left:400px;font-weight:bold;color:#cc2900;">Personal Information</span>
        <hr>
          <div class="row">
            <div class="col-md-12" style="margin-top:8px;">
              Name:
              <textarea rows="1" name="username" class= "detail" style="margin-top: 10px;font-size:12px;" placeholder="Name"><?php echo $_SESSION['username'];?></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12" style="margin-top:8px;">
              E-mail:
              <textarea rows="1" name="email" placeholder="Email id" class="detail" style="margin-top: 10px;font-size:12px;"><?php echo $_SESSION['email'];?></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12" style="margin-top:8px;">
              Contact:
              <textarea rows="1" class="detail" name="mobile" placeholder="Contact"  style="margin-top: 10px;font-size:12px;"><?php echo $_SESSION['mobile'];?></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12" style="margin-top:8px;">
              Address:
              <textarea rows="2" class="detail" name="address" placeholder="Address" style="margin-top: 10px;font-size:12px;" ><?php echo $_SESSION['address'];?></textarea>
            </div>
          </div>
        </div>
      </div></form>
    </div>
  </div> 
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

include('footer.php');
?>