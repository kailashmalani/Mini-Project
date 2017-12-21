<?php
include('header.php');
include('model.php');
session_start();
$tmporders = $db->tmporders;
$orders = $db->order_no;
$num = $orders->findOne();
$fooditems = $db->fooditems;
$cursor = $tmporders->findOne(array('order_no'=> $num['no']));

function gettotal($num,$cursor,$fooditems){
  foreach ($cursor['qty'] as $key) {
    $dish_id = $key['dish_id'];
    $dish = $fooditems->findOne(array('_id' => new MongoId($dish_id)));
    $total+= $dish['dish_cost'] * $key['qty'];
  }
  return $total;
}

if($_SESSION['paid']==1){
  header('location: track.php');
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

<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default" style="margin-top:50px;">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-home"></span> Delivery Address</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-9">
                  <form action="changeaddress.php" method="GET">
                 <textarea name="address" class="form-contol" rows="3" style="width:100%;resize:none;"><?php echo $_SESSION['address'];?>
                    </textarea>
                  </div>
                  <div class="col-md-3">
                    <input type="submit" class="btn btn-primary pull-right" style="margin-top:20px;margin-right:30px;" value="Change" name="change">
                  </div></form>
                </div>
              </div>
            </div>
    </div>
   </div> 

    <div class="panel panel-default" style="">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Payment</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <ul>
                      <li data-toggle="modal" data-target="#myModal2"><a href="#myModal2" class="redfont">Cash on Delivery</a></li>
                    </ul>                   
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                  <ul>
                    <li data-toggle="modal" data-target="#myModal3"><a href="#myModal3" class="redfont">Card Payment</a></li>
                  </ul> 
                  </div>
                </div>
              </div>
            </div>
    </div>
   </div>
   </div>

    <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">
        <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Total Amount: INR <?php echo gettotal($num,$cursor,$fooditems);?></h4>
                </div>
                  <div class="modal-body" style="padding:40px 50px;">
                      <form action="storefinal.php">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Card Type</label>
                                <select class="form-control">
                                  <option>Visa</option>
                                  <option>Master Card</option>
                                  <option>Debit Card</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-12">
                            <div class="form-group">
                              <label>Card Number</label>
                              <input type="text" id="cardno" class="form-control" placeholder="Enter Card Number">
                            </div>
                           </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Card CVV</label>
                                <input type="password" id="cvv" class="form-control" placeholder="Enter Your CVV">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                <label>Enter Expiry Date</label>
                                <input type="date" class="form-control" placeholder="MM/YY">
                              </div>
                           </div>
                          </div>
                          <input type="submit" onclick="return Validate()"  class="btn btn-success btn-block" value="Place Order">
                      </form>
                  </div>
              </div>
          </div> 
      </div>

      <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">
        <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Total Amount: INR <?php echo gettotal($num,$cursor,$fooditems);?></h4>
                </div>
                  <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="storefinal.php">
                          <input type="submit"  class="btn btn-success btn-block" value="Place Order">
                      </form>
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

<script type="text/javascript">
  function Validate(){
    var card = cardno.value;
    if(/^\d{16}$/.test(card)){}
      else{
        alert("Invalid Card Number!");
        cardno.focus();
        return false;
      }
      var c = cvv.value;
      if(/^\d{3}$/.test(c)){}
        else{
          alert("Invalid CVV!");
          return false;
        }
        return true;
  }
</script>
