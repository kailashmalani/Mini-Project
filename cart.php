<?php
session_start();
include('model.php');

if($_SESSION['login']!=1){
include('header1.php');}
else{
  include('header.php');
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body style="overflow-x: hidden;">
  <!--Navigation end-->
  
  <!--<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">My Profile</a></li>
      <li><a href="#">Track Order</a></li>
      <li><a href="#">Past Order</a></li>
    </ul>
  </div>
</nav>-->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login_order.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="pass">
            </div>
              <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"></span> Login</button>
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
                <form role="form" action="signupcart.php" method="POST" id="signup">
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

                <button type="submit" class="btn btn-success btn-block" name="submit" onclick="return Validate()"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
                </form>
            </div>
          </div>
      </div>
    </div>

<div class="container">

  <div class="container-fluid" style="padding-bottom:50px;">
  <div class="panel-group" id="accordion">



    
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

             <?php
             $orders = $db->order_no;
             $num = $orders->findOne();
              $tmporders = $db->tmporders;
              $fooditems = $db->fooditems;
              $currentorders = $tmporders->findOne(array('order_no' => $num['no']));
              foreach ($currentorders['qty'] as $key) {
                $dish_id = $key['dish_id'];
                $dish = $fooditems->findOne(array('_id' => new MongoId($dish_id)));
                $total += $dish["dish_cost"] * $key['qty'];
               echo ' <div class="row">
                    <div class="col-md-4">
                        <h4><strong>'.$dish["dish_name"].'</strong></h4>
                        <h4><small>'.$dish["dish_desc"].'</small></h4>
                    </div>
                    <div class="col-md-3 text-right">
                        <h4><strong>'.$dish["dish_cost"].'</strong> x</h4>
                    </div> 
                    <form action = "changeqty.php" method="GET"> 
                    <div class="col-md-1">
                         <input type="number" name="newqty" min=1 max=10 class="form-control" value='.$key['qty'].'>
                    </div>
                      
                      <input type="hidden" name = "dish_id" value='.$key['dish_id'].'> 
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary btn-block btn-sm" value="Change">
                    </div></form>
                    <form action = "remove_fooditem.php" method = "GET">
                    <input type="hidden" name = "dish_id" value='.$key['dish_id'].'>
                    <div class="col-md-1"><button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                    </div></form>
                </div>   
                <hr>';
              }
                ?>
                <div class="row">
                    <div class="col-md-9 text-right">
                        <h5>Added items?</h5>
                    </div>
                    <div class="col-md-2">
                      <form action="menu.php">
                        <input type="submit" name="submit" value="Add more items" class="btn btn-primary btn-block btn-sm">
                        </form>
                    </div>
                </div>
             </div>  
             <div class="panel-footer">
             <div class="row">
                <div class="col-md-9 text-right">
                    <h4><strong>Total Amount : <?php echo $total ;?></strong></h4>
                </div>
                <?php $tmporders->update(array('order_no' => $num['no']),array('$set' =>array('total' => $total)));?>
                <div class="col-md-2 pull-right">
                  <form action="checklogin.php">
                    <input type="Submit" name="submit" value="Checkout" class="btn btn-success btn-block btn-sm" style="margin-top: 5px;">
                  </form>
                    <!--button class="btn btn-success btn-block btn-lg" >
                    Checkout</button-->
                </div>
              </div>
             </div>
        </div>
    </div>

    		
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