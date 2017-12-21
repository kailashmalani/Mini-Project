<?php
session_start();
include('header.php');
include('model.php');
$_SESSION['paid']=1;
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
    <div class="panel panel-default" style="margin-top:70px;">
      <div class="panel-heading" style="padding-left:500px;">
        <h4 class="panel-title">
            <div class="row">
              <div class="col-md-6"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <span style="font-weight:bold;font-size:25px;">Your Order </span><span class="glyphicon glyphicon-arrow-down" style="font-size:20px;"></span></a>
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
                    <div class="col-md-6">
                        <h4><strong>'.$dish["dish_name"].'</strong></h4>
                        <h4><small>'.$dish["dish_desc"].'</small></h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <h4><strong>'.$dish["dish_cost"].'</strong> x</h4>
                    </div> 
                    <div class="col-md-1" style="padding-top: 10px;">
                          '.$key['qty'].'
                    </div>
                </div>   
                <hr>';
              }
                ?>  
             </div>  
             <div class="panel-footer">
              <div class="row">
                <div class="col-md-10 text-right">
                    <h4><strong>Total Amount: INR <?php echo $total ;?></strong></h4>
                </div>

              </div>
             </div>
        </div>
    </div>

    <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" style="padding-left:450px;">
               <div class="row">
              <div class="col-md-6"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <span style="font-weight:bold;font-size:25px;">TO Be Delivered at </span><span class="glyphicon glyphicon-arrow-down" style="font-size:20px;"></span></a>
              </div>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12"><span style="font-size:20px;font-weight:bold;"><?php echo $_SESSION['address'];?></span>
                  </div>
                </div>
              </div>
            </div>
    </div>

        
 </div>
</div>
<div class="row" style="margin-bottom: 50px;">
<div class="col-md-12">
  <form action="form.php" method="POST"><input type="submit" name="pdf" class="btn btn-primary pull-right" value="Generate pdf" style="margin: 10px;margin-right: 40px; "></form>
  <form action="track.php"><input type="submit"  name="" class="btn btn-primary pull-right" value="Track Order" style="margin: 10px;"></form>
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