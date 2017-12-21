<?php
include('model.php');
session_start();
if($_SESSION['type']=="admin"){
  include('admin_header.php');
}
else{
include('header.php');


$tmporders = $db->tmporders;
  $order_no = $db->order_no;
  $num = $order_no->findOne();
  if($_SESSION['login']!=1){
  $doc = array('$set' => array('email' => $_SESSION['email'],"order_no" => $num['no'],"qty" => array()));
  $tmporders->update(array('order_no' => $num['no']),$doc,array('upsert' => true));
  //$number = $num['no'];
 // $order_no->update(array('no' => $num['no']),array('$set' => array('no' => $number)));
}
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

<!-- Modal -->



<div id="part1">
  <div id="content">Lots of content</div>
</div>

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
</div>

<!--<div class="row" id="contact">
<div class="col-md-4" id="rahul" class="text-centre">Rahul Chaudhari</div>
<div class="col-md-4" id="kailash">Kailash Malani</div>
<div class="col-md-4" id="anurag">Anurag Rane</div>-->


<script type="text/javascript">

function Validate(){
  var password = document.getElementById("password").value;
  var repassword = document.getElementById("confirmpassword").value;
  if(password!=repassword){
    alert("Passwords do not match");
    password.focus();
    return false;
  }
  var val = mobile.value;
  if(/^\d{10}$/.test(val)){}
    else{
      alert("Invalid Mobile Number!");
      mobile.focus();
      return false;
    }
  return true;
}

</script>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
include('footer.php');
?>