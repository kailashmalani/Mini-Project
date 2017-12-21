<?php
include('header.php');
include('model.php');
session_start();


    
?>


<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body >



<div class="row">
<div class="col-md-10 col-md-offset-1">
<section id="Pizza">
<div>
	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="head">Pizza <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pizza.php">Pizza</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="icecream.php">100% Natural Icecreams</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="staples.php">Staples Box</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="meals.php">All in 1 Meals</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="biryani.php">Biryani</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="wraps.php">Wraps</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="sandwiches.php">Sandwiches</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="salads.php">Salads</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="drinks.php">Drinks & Desert</a></li>
          </ul>
        </li>
</div>
</div>
</div>
	
</section>

<section>
<div class="row" id="items">
	<div class="col-md-10 col-md-offset-1">
        <div class="item1">
        <img src="images/pizza/Chicken-Tikka.jpg" class="dishimg"/>
        <p class="dishnm">Chicken Tikka Pizza</p>
        <p class="desc">Chicken Tikka, Chicken Kebab, Red Paprika, Capsicum, Onions
        <p class="price">$6</p>
        <form  class="order" method="GET" action="pizza.php">
        <input type="submit" name="p1" value="+ADD" class="cart" >
        <input type="number" name="quantity" class="quantity">
        </form>
        </p>
        </div>

		<div class="item2"><img src="images/pizza/Everything-Special.jpg" class="dishimg"/><p class="dishnm">Chicken Tikka Pizza</p><p class="desc">Chicken Tikka, Chicken Kebab, Red Paprika, Capsicum, Onions<p class="price">$6</p>
        <form id="order" class="order">
        <input type="submit" name="cart" value="+ADD" class="cart">
        <input type="number" name="quantity" class="quantity">
        </form></p></div>


		<div class="item3"><img src="images/pizza/Four-Seasons.jpg" class="dishimg"/><p class="dishnm">Chicken Tikka Pizza</p><p class="desc">Chicken Tikka, Chicken Kebab, Red Paprika, Capsicum, Onions<p class="price">$6</p>
        <form id="order" class="order">
        <input type="submit" name="cart" value="+ADD" class="cart">
        <input type="number" name="quantity" class="quantity">
        </form></p></div>
	</div>
</div>

<div class="row" id="items">
    <div class="col-md-10 col-md-offset-1">
        <div class="item1">
        <img src="images/pizza/Chicken-Tikka.jpg" class="dishimg"/>
        <p class="dishnm">Chicken Tikka Pizza</p>
        <p class="desc">Chicken Tikka, Chicken Kebab, Red Paprika, Capsicum, Onions
        <p class="price">$6</p>
        <form id="order" class="order">
        <input type="submit" name="cart" value="+ADD" class="cart">
        <input type="number" name="quantity" class="quantity">
        </form>
        </p>
        </div>

        <div class="item2"><img src="images/pizza/Everything-Special.jpg" class="dishimg"/><p class="dishnm">Chicken Tikka Pizza</p><p class="desc">Chicken Tikka, Chicken Kebab, Red Paprika, Capsicum, Onions<p class="price">$6</p>
        <form id="order" class="order">
        <input type="submit" name="cart" value="+ADD" class="cart">
        <input type="number" name="quantity" class="quantity">
        </form></p></div>


        <div class="item3"><img src="images/pizza/Four-Seasons.jpg" class="dishimg"/><p class="dishnm">Chicken Tikka Pizza</p><p class="desc">Chicken Tikka, Chicken Kebab, Red Paprika, Capsicum, Onions<p class="price">$6</p>
        <form id="order" class="order">
        <input type="submit" name="cart" value="+ADD" class="cart">
        <input type="number" name="quantity" class="quantity">
        </form></p></div>
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