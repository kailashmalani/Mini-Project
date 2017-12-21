<?php
include('admin_header.php');
include('model.php');
$fooditems = $db->fooditems;
$category = $_GET['category'];
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
    <div class="panel panel-default" style="margin-top:10px;">
      <div class="panel-heading" style="padding-left:450px;">
        <h4 class="panel-title">
            <div class="row">
              <div class="col-md-6"><a data-parent="#accordion"> <span style="font-weight:bold;font-size:25px;">Remove Food Item</span></a>
              </div>
            </div>
        </h4>
      </div>
    </div>
   </div>
   	   

	<table class="table table-hover" style="margin-top:20px;margin-bottom:20px;">
		<th>Sr No.</th>
		<th>Product Name</th>
		<th>Action</th>
    <?php $cursor = $fooditems->find(array('category' => $category));
    $count = 1;
    foreach ($cursor as $key) {
		echo '<tr><td>'.$count.'</td>
			<td>'.$key['dish_name'].'</td>
			<td><form action="removeitem.php" method="GET">
      <input type="hidden" name="dishid" value = '.$key['_id'].'>
      <input type="hidden" name="category" value = '.$category.'>
      <button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></form></td>
		</tr>';
    $count++;	
  }?>
	</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
include('footer.php');
?>