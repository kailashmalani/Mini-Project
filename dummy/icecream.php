<?php
include('header.php');
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="head">100% Natural Ice-cream <span class="caret"></span></a>
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
        <div class="item1">p1</div>
        <div class="item2">p1</div>
        <div class="item3">p1</div>
    </div>
</div>

<div class="row" id="items">
    <div class="col-md-10 col-md-offset-1">
        <div class="item1">p1</div>
        <div class="item2">p1</div>
        <div class="item3">p1</div>
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