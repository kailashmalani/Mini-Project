<?php
include('admin_header.php');
?>

<html>
<head>
	<title></title>
</head>
<body>
<div class="container" style="margin-top: 20px;">
<div class="panel panel-info">
<div class="panel-heading">Add food item</div>
<form method="GET" action="addfooditems.php">
	<div class="input-group" style="margin: 20px;">
  <span class="input-group-addon" id="sizing-addon2">Dish name</span>
  <input type="text" class="form-control" name="dishnm" placeholder="Dishname" aria-describedby="sizing-addon2">
</div>
	<hr>
	<div class="input-group" style="margin: 20px;">
  <span class="input-group-addon" id="sizing-addon2">Dish Description</span>
  <input type="text" class="form-control" name="dishdesc" placeholder="Dish Description" aria-describedby="sizing-addon2">
</div><hr>
<div class="input-group" style="margin: 20px;">
  <span class="input-group-addon" id="sizing-addon2">Dish Cost: INR </span>
  <input type="text" class="form-control" name="dishcost" placeholder="Dish Cost" aria-describedby="sizing-addon2">
</div><hr>
<div style="margin: 20px;">
	Category
	<br><input style="margin: 10px;" type="radio" name="category" value="Pizza">Pizza<br>
	<input type="radio" name="category" style="margin: 10px;" value="100% Natural Ice-creams">100% Natural Ice-creams<br>
	<input style="margin: 10px;" type="radio" name="category" value="Staples Box">Staples Box<br>
	<input type="radio" style="margin: 10px;" name="category" value="All in 1 Meals">All in 1 Meals<br>
	<input type="radio" name="category" style="margin: 10px;" value="Biryani">Biryani<br>
	<input type="radio" name="category" style="margin: 10px;" value="Wraps">Wraps<br>
	<input type="radio" name="category" style="margin: 10px;" value="Sandwiches">Sandwiches<br>
	<input type="radio" name="category" style="margin: 10px;" value="Salads">Salads<br>
	<input type="radio" name="category" style="margin: 10px;" value="A La Carte">A La Carte<br>
	<input type="radio" name="category" style="margin: 10px;" value="Drinks & Desert">Drinks & Desert<br>

	<input type="submit" name="submit" class="btn btn-primary" value="Upload Image ->"><span class="col-md-10"></span></div>
</form>
</div>
</div>	

</body>
</html>

<?php
include('footer.php');

?>