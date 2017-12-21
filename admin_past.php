<?php
include('model.php');
include('admin_header.php');

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
<div class="container">
  <div class="panel-group" id="accordion" style="margin-bottom: 50px;">
    <div class="panel panel-default" style="margin-top:70px;">
      <div class="panel-heading" style="padding-left:500px;">
        <h4 class="panel-title">
            <div class="row">
              <div class="col-md-6"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <span style="font-weight:bold;font-size:25px;">Past Orders </span><span class="glyphicon glyphicon-arrow-down" style="font-size:20px;"></span></a>
              </div>
            </div>
        </h4>
      </div>
        <div id="collapse1" class="panel-collapse collapse in">
             <div class="panel-body">
             <?php
              $user = $db->User;
              $allusers = $user->find();
              $fooditems = $db->fooditems;
      			
              //var_dump($curruser['user_orders'][0]['order_date']);
              foreach ($allusers as $curruser) {
              	
              for ($i=0;$i<$curruser['orders'];$i=$i+1) {
                     
                $order_date = $curruser['user_orders'][$i]['order_date']; 
                $user_orders = $curruser['user_orders'][$i];
               // var_dump($user_orders);    
                 echo '<div class="row">
                 <div class="col-md-2">
                  <h4><strong>Order Date</strong></h4><h4 style="padding: 20px;"><small><strong>'.$order_date.'</small></strong></h4></div>';
                 echo ' <div class="col-md-2">
                  <h4><strong>User Name</strong></h4><h4 style="padding: 20px; padding-left: 0px;"><small><strong>'.$curruser['username'].'</small></strong></h4></div>';
                  echo '<div class="col-md-6"><table class="table table-condensed" >
                  <thead>
                  <tr><th width="65%"><h4><strong>Food Items</strong></h4></th>
                  <th><h4><strong>Quantity</strong></h4></th>
                  </tr></thead>';
                    $qty = $user_orders['qty'];
                    $once =1;
                    //var_dump($qty[0]);
                    echo '<tbody>';
                    for($j=0;$j<count($qty);$j=$j+1){
                      $dish_id = $qty[$j]['dish_id'];
                      $dish = $fooditems->findOne(array('_id' => new MongoId($dish_id)));
//                      var_dump($dish);
                      $dish_name = $dish['dish_name'];
                      $dish_cost = $dish['dish_cost'];
                      echo '<tr><td>'.$dish_name.'</td><td style="padding-left: 35px;">'.$qty[$j]['qty'].'</td></tr>';
                    }
                    echo '</tbody></table></div><div class="col-md-2"><h4><strong>Total Amount</strong></h4><h3 style="padding: 10px;padding-left:40px;"><small><strong>INR'.'   '.$user_orders['total'].'</small></strong></h3></div>';
                echo '</div><hr>';}} ?>  
                
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