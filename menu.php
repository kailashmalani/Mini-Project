<?php
include('header.php');
include('model.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="menu1.css">
</head>
<body >

<nav class="navbar navbar-inverse" style="margin-bottom: 0px;border-radius: 0px;">
  <div class="container-fluid">
    <ul class="nav navbar-nav pull-right">
    <li>
    <?php 
    if($_SESSION['paid']!=1){
    echo '<form action="checkcart.php">
            <input type="submit" class="btn btn-danger" value="View Cart" style="float:left; margin-top: 7px;">
        </form>';
    }
    else{
         echo '<form action="track.php">
            <input type="submit" class="btn btn-danger" value="Track Order" style="float:left; margin-top: 7px;">
        </form>';
}?>

        </li>
    </ul>
  </div>
</nav>

<div class="row text-center" style="background-color:white;">
    <div class="col-md-12">
        <h3 style="color: #cc2900;"><strong>WELCOME</strong></h3>
        <h3 style="color: #cc2900;"><strong>Food is Waiting!</strong></h3>
    </div>
</div>
<sec;margin-top:15px;tion style="background-color:white;">
<div class="row" id="items">
    <div class="col-md-10 col-md-offset-1">
        <div class="item1">
        <a href="view.php?category=Pizza"><img src="images/mix/PIzza1110-X-810.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">PIZZA</p>
        </div>

        <div class="item2">
        <a href="view.php?category=Icecream"><img src="images/mix/vegan-mixed-berry.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">ICECREAM</p>
        </div>


        <div class="item3">
        <a href="view.php?category=Staples"><img src="images/mix/Paneer-Makhni-Meal.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">STAPLES</p>
        </div>
    </div>
</div>

<div class="row" id="items">
    <div class="col-md-10 col-md-offset-1">
        <div class="item1">
        <a href="view.php?category=Meals"><img src="images/mix/allinone.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">MEALS</p>
        </div>

        <div class="item2"><a href="view.php?category=Biryani"><img src="images/mix/biryani.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">BIRYANI</p>
        </div>


        <div class="item3"><a href="view.php?category=Wraps"><img src="images/mix/wraps.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">WRAPS</p>
        </div>
    </div>
</div>

<div class="row" id="items">
    <div class="col-md-10 col-md-offset-1">
        <div class="item1">
        <img src="images/mix/38-MIN.jpg" class="dishimg"/>
        </div>

        <div class="item2"><a href="view.php?category=Sandwiches"><img src="images/mix/sandwich.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">SANDWICH</p>
        </div>


        <div class="item3"><a href="view.php?category=Salads"><img src="images/mix/Farmer's-Market-Salad.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">SALADS</p>
        </div>
    </div>
</div>

<div class="row" id="items" style="margin-bottom: 50px;">
    <div class="col-md-10 col-md-offset-1">
        <div class="item1">
    <img src="images/mix/1-AM.jpg" class="dishimg"/>
        </div>

        <div class="item2"><a href="view.php?category=Alacarte"><img src="images/mix/alacarte.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">A LA CARTE</p>
        </div>


        <div class="item3"><a href="view.php?category=Drinks"><img src="images/mix/drinks.jpg" class="dishimg"/></a>
        <p style="color:#cc2900;font-size:20px;text-align:center;margin-top:15px;">DRINKS</p>
        </div>
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