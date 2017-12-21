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
</nav>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="pass">
            </div>
              <button type="submit" class="btn btn-success btn-block" name="submit"> Login</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 



<!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="signup.php" method="POST" id="signup">
                <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>
                    <input type="text" required="" class="form-control" id="usrname" placeholder="Enter Your name" name="username">
                </div>
                <div class="form-group">
                    <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email-ID</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
                </div>
                <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="pass" required="">
                </div>
                <div class="form-group">
                    <label for="rpsw"><span class="glyphicon glyphicon-eye-open"></span>Retype Password</label>
                    <input type="password" required="" class="form-control" id="confirmpassword" placeholder="Enter password" name="repass" required="">
                </div>   
                <div class="form-group">
                    <label for="mobile" style="padding-top:8px;"><span class="glyphicon glyphicon-phone"></span>Mobile No.</label>
                    <input type="text" required="" class="form-control" id="mobile" placeholder="Enter Contact" name="mobile">
                </div>
                <div class="form-group">
                    <label for="address"><span class="glyphicon glyphicon-home"></span> Address</label>
                    <input type="text" required="" class="form-control" id="address" placeholder="Enter Address" name="address">
                </div>

                <div>
                  <p id=errmsg></p>
                </div>  

                <button type="submit"  class="btn btn-success btn-block" name="submit" onclick="return Validate()"> Sign Up</button>
                </form>
            </div>
          </div>
      </div>
    </div>
<div style="border: 0.5px solid #cc2900;"></div>
	
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">

function Validate(){
  var password = document.getElementById("password").value;
  var repassword = document.getElementById("confirmpassword").value;
  if(password!=repassword){
    alert("Passwords do not match");
    return false;
  }
  var val = mobile.value;
  if(/^\d{10}$/.test(val)){}
    else{
      alert("Invalid Mobile Number!");
      return false;
    }
  return true;
}

</script>