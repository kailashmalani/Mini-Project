<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body style="overflow-x: hidden;">
<nav class="navbar ">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#" class="redfont">Home</a></li>
        <li><a href="#" class="redfont">Menu</a></li>
        <li><a href="#" class="redfont">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container-fluid" style="padding-bottom:50px;">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default" style="">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="modal" href="#myModal">Sign In</a>
            /
            <a data-toggle="modal" href="#myModal1">Sign Up</a>
          </h4>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
        <!-- Modal content-->
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
      </div>

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
    </div>
    </div>


    <div class="panel panel-default" style="">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Delivery Address</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-9">
                    <textarea class="form-contol" rows="3" style="width:100%;resize:none;">
                    </textarea>
                  </div>
                  <div class="col-md-3">
                    <button class="btn btn-primary pull-right" style="margin-top:20px;margin-right:30px;">Submit</button>
                  </div>
                </div>
              </div>
            </div>
    </div>

        <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
            <div class="row">
              <div class="col-md-6"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
              </div>
            </div>
        </h4>
      </div>
        <div id="collapse1" class="panel-collapse collapse in">
             <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <h4><strong>Product Name</strong></h4>
                        <h4><small>Description of the product</small></h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <h4><strong>price</strong> x</h4>
                    </div>  
                    <div class="col-md-2">
                         <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2"><button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                    </div>
                </div>   
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h4><strong>Product Name</strong></h4>
                        <h4><small>Description of the product</small></h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <h4><strong>price</strong> x</h4>
                    </div>  
                    <div class="col-md-2">
                         <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2"><button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                    </div>
                </div>  
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h4><strong>Product Name</strong></h4>
                        <h4><small>Description of the product</small></h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <h4><strong>price</strong> x</h4>
                    </div>  
                    <div class="col-md-2">
                         <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2"><button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                    </div>
                </div>   
                <hr>
                <div class="row">
                    <div class="col-md-9 text-right">
                        <h5>Added items?</h5>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary btn-block btn-sm">Update</button>
                    </div>
                </div>
             </div>  
             <div class="panel-footer">
             <div class="row">
                <div class="col-md-9 text-right">
                    <h4><strong>Total Amount</strong></h4>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success btn-block btn-lg">Checkout</button>
                </div>
              </div>
             </div>
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
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>