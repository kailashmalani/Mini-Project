<?php
include('header.php');
include('model.php');
session_start();

$user = $db->User;
$orders = $db->order_no;
$num = $orders->findOne();
$curruser = $user->findOne(array('email' => $_SESSION['email']));
$order_status = $user->findOne(array('user_orders.order_status' => 'confirmed'));
$totalorders = count($curruser['user_orders']);
$order_date = $curruser['user_orders'][$totalorders-1]['order_date'];
$currdate = date("d.m.y");
$currtime = date("i");


//echo $order_time-$currtime;
//$currdate = "19.11.16";
//echo $currdate-$order_date;
//echo $currtime."   ";
//$order_time = "09";

//echo $currtime-$order_time;
if($order_date==$currdate){
  //echo 'today';
  $order_time =  $curruser['user_orders'][$totalorders-1]['order-time'];
  $mins =  substr($order_time,3,2);
  if(date("H")>substr($order_time,0,2)&&$mins>$currtime){
    $timeleft = 60-$mins + $currtime;
    //echo $timeleft;
   
  }
  else if(date("H")>substr($order_time,0,2)&&$mins<$currtime){
    //echo $timeleft;
    
  }
  else{
    $timeleft = $currtime - $mins;
    //echo $timeleft;
  }

}
else{
  header('location: nopastorder.php');
}

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
  <nav class="navbar navbar-inverse" style="border-radius: 0px;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="profile.php">My Profile</a></li>
      <li class="active"><a href="track.php">Track Order</a></li>
      <li><a href="past.php">Past Order</a></li>
    </ul>
  </div>
</nav>
<?php

 if($curruser['user_orders'][$totalorders-1]['order_status'] == "confirmed"){
    echo '
  <div class="row">
  <div class=" col-md-3 col-md-offset-5">
  <h1 style="margin-left: 12px;"><small>Estimated Time: </small></h1>
  <div id="clockdiv">

  <div>
    <span class="minutes"></span>
    <div class="smalltext"><strong>Minutes</strong></div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext"><strong>Seconds</strong></div>
  </div></div>
</div></div>

<div class="row" id="part2">
  <div  id="ordering">
    <div class="row">
      <img style="padding-left:120px;width:258px;height:119px;" src="images/c8116.jpg">
    </div>
    <div class="row">
      <span style="font-size:35px;font-weight:bold;padding-top:20px;padding-left:115px;color:red;">Ordering</span>
    </div>
    <div clas="row" style="padding-top:20px;font-size:15px;">
      The ordering platforms feature a clean and contemporary design for a quick & seamless ordering, tracking and payment experience.
    </div>  
  </div>
  <div id="packaging">
    <div class="row">
      <img style="padding-left:120px;width:258px;height:119px;" src="images/c7125474-601d-443e-8fe7-ef5a65328213.jpg">
    </div>
    <div class="row">
      <span style="font-size:35px;font-weight:bold;padding-top:20px;padding-left:115px;color:red;">Packaging</span>
    </div>
    <div clas="row" style="padding-top:20px;font-size:15px;">
      Our packaging is engineered to keep the food fresh, hot and easy to consume. Our delivery bags maintain food integrity through the delivery cycle.
    </div> 
   </div>  
  <div id="delivery">
    <div class="row">
      <img style="padding-left:120px;width:258px;height:119px;" src="images/c47078.jpg">
    </div>
    <div class="row">
      <span style="font-size:35px;font-weight:bold;padding-top:20px;padding-left:115px;color:red;">Delivering</span>
    </div>
    <div clas="row" style="padding-top:20px;font-size:15px;">
      We provide a superfast delivery within 38 Minutes. Extra 8 mins (30 + 8) are incorporated to ensure rider and road safety.
    </div>   
  </div>
</div>';
  
}
else{
echo '<div class="container-fluid">
  <img id="sad" src="images/1360190.jpg" class="img-circle" >
  <p id="text">NO ORDER TO TRACK</p>
  </div>
  <div>
  <form action="menu.php">
  <input type="submit" name="" id="order" class="btn btn-success" value="Order Now">
  </form>
  </div>';}
  ?>



  
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
  function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  return {
    'total': t,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
var time = '<?php echo $timeleft;?>';
var deadline = new Date(Date.parse(new Date()) + (38- time )* 60 *1000);
initializeClock('clockdiv', deadline);
</script>