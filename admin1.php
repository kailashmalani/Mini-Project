<?php
include('header.php');
session_start();
$dishname = $_SESSION['dish_name'];
$dishname = str_replace(' ', '', $dishname);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/admin1.css">
</head>
<body>
<div class="container">
<div class="panel panel-info" style="margin-top: 20px;">
<div class="panel-heading">Upload Dish Image </div>
<div class="panel-body">
	<form style="margin: 20px;" method="POST" action="storefood_img.php" enctype="multipart/form-data">
	<div class="row">
	<div class="col-md-3">
		<input type="file" name="dish_img" class="btn btn-primary" value="Select Image" ></div>
	<div class="col-md-offset-11"><input type="submit" name="submit" value="Upload" class="btn btn-success" ></div>
		</div>
	</form>
	<hr>
	<div id="preview"> Preview</div>
	<div class="row">
	<div class="col-md-offset-4">
	<?php
	if($_SESSION['imgstored']==1){
		 echo'<div class="item1">';
                   echo "<img src='getfoodimg.php?dishname=$dishname' class=\"dishimg\">";
                   echo '<p class="dishnm">'.$_SESSION['dish_name'].'</p>
                  <p class="desc">'.$_SESSION['dish_desc'].'</p>
                     <p class="price">'.$_SESSION['dish_cost'].'</p>
                        </div>

                        <div class="col-md-offset-10"><form action="index.php"><input type="submit" name="" class="btn btn-danger" value="Done"></form></div>';
	}

	?>
	</div>


</div>
</div>
</div>
</div>
</body>
</html>