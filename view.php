<?php
include('model.php');
include('header.php');

session_start();


    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body >
<nav class="navbar navbar-inverse" style="border-radius: 0px;">
<div class="container-fluid">
<div class="col-md-8" >

<form method="GET" action="view.php">

<select name="category" class="btn btn-danger" style="margin-top:7px">
<?php

$category = $_GET['category'];
if ($category=="Pizza") 
  echo '<option value="Pizza" selected>Pizza</option>';
else
echo '<option value="Pizza" >Pizza</option>';
  
 if ($category =="Icecream") {
    echo '<option value="Icecream" selected>100 % Natural Icecream</option>';
  } 
  else
  echo '<option value="Icecream">100 % Natural Icecream</option>';

if ($category =="Staples") {
    echo '<option value="Staples" selected>Staples Box</option>';
  } 
  else
  echo '<option value="Staples">Staples Box</option>';

if ($category =="Meals") {
    echo '<option value="Meals" selected>All in 1 Meals</option>';
  } 
  else
  echo '<option value="Meals">All in 1 Meals</option>';

if ($category =="Biryani") {
    echo '<option value="Biryani" selected>Biryani</option>';
  } 
  else
  echo '<option value="Biryani">Biryani</option>';
 
 
 if ($category =="Wraps") {
    echo '<option value="Wraps" selected>Wraps</option>';
  } 
  else
  echo '<option value="Wraps">Wraps</option>';

if ($category =="Sandwiches") {
    echo '<option value="Sandwiches" selected>Sandwiches</option>';
  } 
  else
  echo '<option value="Sandwiches">Sandwiches</option>';

if ($category =="Salads") {
    echo '<option value="Salads" selected>Salads</option>';
  } 
  else
  echo '<option value="Salads">Salads</option>';
 
 if ($category =="Alacarte") {
    echo '<option value="Alacarte" selected>A La Carte</option>';
  } 
  else
  echo '<option value="Alacarte">A La Carte</option>';

  if ($category =="Drinks") {
    echo '<option value="Drinks" selected>Drinks & Deserts</option>';
  } 
  else
  echo '<option value="Drinks">Drinks & Deserts</option>';
  ?>

</select>

<input type="submit" name="submit" value="Apply" class="btn btn-danger" style="margin-top:7px;margin-left:15px;">

</form>

</div>
<div class="col-md-4">
    <?php 
    if($_SESSION['paid']!=1){
    echo '<form action="checkcart.php">
            <input type="submit" class="btn btn-danger pull-right" value="Checkout" style="float:left; margin-top: 7px;">
        </form>';
    }
    else{
         echo '<form action="track.php">
            <input type="submit" class="btn btn-danger" value="Track Order" style="float:left; margin-top: 7px;">
        </form>';
}?>

</div>

</div>
</nav>

<section>
<div class="row" id="items">
<div class="col-md-11 col-md-offset-1">
        <?php 
            $category = $_GET['category'];
               $col=$db->fooditems;
               $condition = array("category" => $category);
               $cursor=$col->find($condition);
               foreach ($cursor as $key)
                {
                  $dishname = $key['dish_name'];
                  $dishid = $key['_id'];
                  $dishname = str_replace(' ', '', $dishname);
                  echo'<div class="item1">';
                   echo "<img src='getfoodimg.php?dishname=$dishname' class=\"dishimg\">";
                   echo '<p class="dishnm">'.$key['dish_name'].'</p>
                  <p class="desc">'.$key['dish_desc'].'</p>
                     <p class="price">INR '.$key['dish_cost'].'</p>
                       <form  class="order" method="GET" action="order.php">
                       <input type="submit" name="p1" value="+ADD" class="cart" >
                        <input type="number" name="quantity" class="quantity" min="1" max="10" value="1">
                  <input type="hidden" name="dishid" value='.$dishid.'>
                       </form>
                        </p>
                        </div>';
               }
        ?> 
        </div>
</div>

    
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php
include('footer.php');
?>