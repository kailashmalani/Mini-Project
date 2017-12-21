<?php
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/contact1.css">
  <link rel="stylesheet" type="text/css" href="css/contact2.css">
</head>

<body style="overflow-x: hidden;">

  <!--Navigation end-->

      <!--div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
        <!-- Modal content>
              <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                  <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="login.php">
                        <div class="form-group">
                              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email-ID</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" placeholder="Enter password" name="pass">
                        </div>
                          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                      </form>
                  </div>
              </div>
          </div> 
      </div-->

    <!--div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content>
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="signup.php" method="POST" id="signup">
                <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter Your name" name="username">
                </div>
                <div class="form-group">
                    <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email-ID</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
                </div>
                <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" class="form-control" id="psw" placeholder="Enter password" name="pass" required="">
                </div>
                <div class="form-group">
                    <label for="rpsw"><span class="glyphicon glyphicon-eye-open"></span>Retype Password</label>
                    <input type="password" class="form-control" id="rpsw" placeholder="Enter password" name="repass" required="">
                </div>   
                <div class="form-group">
                    <label for="mobile" style="padding-top:8px;"><span class="glyphicon glyphicon-phone"></span>Mobile No.</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter Contact" name="mobile">
                </div>
                <div class="form-group">
                    <label for="address"><span class="glyphicon glyphicon-home"></span> Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                </div>

                <div>
                  <p id=errmsg></p>
                </div>  

                <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
                </form>
            </div>
          </div>
      </div>
    </div-->

    <div class="row" style="margin-top:25px;">
      <div class="col-md-12 text-center">
          <span style="color:#cc2900;font-size:60px;">OUR TEAM</span>
        </div>
      </div>
    </div>
    <div class="row" id="items">
      <div class="col-md-10 col-md-offset-1"> 
        <div class="item1"><img src="images/rahul.jpg" class="dishimg"/>
          <p class="dishnm">Rahul Chaudhari</p><p class="desc"><pre style="font-weight:bold;">
Email: rahul.chaudhari27297@gmail.com
Contact: 9405129161</pre>
        </div>
        <div class="item2"><img src="images/kailash.jpg" class="dishimg"/>
          <p class="dishnm">Kailash Malani</p><p class="desc"><pre style="font-weight:bold">Email: malanikailash@gmail.com
Contact: 8857907341</pre>
        </div>
        <div class="item3"><img src="images/anurag.jpg" class="dishimg"/>
          <p class="dishnm">Anurag Rane</p><p class="desc""><pre  style="font-weight:bold;">Email: anurag.rane9000@gmail.com
Contact: 9922845040</pre>
        </div>
      </div>
    </div>

    <div class="footer navbar-fixed-bottom">
      <div class="container-fluid" style="background-color: #000;">
        <div class="text-center">
            <h5 class="text-center" style="color: white;">  Copyright 2015-2016. FooDelight Pvt. Ltd. All rights reserved.</h5>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>