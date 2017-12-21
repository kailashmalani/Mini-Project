<?php
include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/track.css">
</head>

<body style="overflow-x: hidden;">

  <!--Navigation end-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="profile.php">My Profile</a></li>
      <li><a href="track.php">Track Order</a></li>
      <li class="active"><a href="past.php">Past Order</a></li>
    </ul>
  </div>
</nav>

<!--<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default" style="margin-top:15px;">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Profile</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body" style="padding-top:10px;">Personal Information
        <ul class="list-group" style="padding-left:25px;padding-top:15px">
          <li class="list-group-item">Name</li>
          <li class="list-group-item">Email Id</li>
          <li class="list-group-item">Phone No.</li>
        </ul>
        </div>
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Address</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
</div>-->
<div class="container-fluid">
  <img id="sad" src="images/1360190.jpg" class="img-circle" >
  <p id="text">NO ORDER TO SHOW</p>
  </div>
  <div>
  <form action="menu.php">
  <input type="submit" name="" id="order" class="btn btn-success" value="Order Now">
  </form>
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