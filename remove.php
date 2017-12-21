<?php
include('admin_header.php');
include('model.php');
$fooditems = $db->fooditems;

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
		<th>Category Name</th>
		<th>Total Items</th>

		<tr><td>1</td>
			<td><a href="remove1.php?category=Pizza">Pizza</a></td>
			<?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Pizza')).'</td>';?>
		</tr>


    <tr><td>2</td>
      <td><a href="remove1.php?category=Icecream">100% Natural Ice-creams</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Icecream')).'</td>';?>
    </tr>

    <tr><td>3</td>
      <td><a href="remove1.php?category=Staples">Staples Box</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Staples')).'</td>';?>
    </tr>

    <tr><td>4</td>
      <td><a href="remove1.php?category=Meals">All in One Meals</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Meals')).'</td>';?>
    </tr>

    <tr><td>5</td>
      <td><a href="remove1.php?category=Biryani">Briyani</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Biryani')).'</td>';?>
    </tr>

    <tr><td>6</td>
      <td><a href="remove1.php?category=Wraps">Wraps</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Wraps')).'</td>';?>
    </tr>

    <tr><td>7</td>
      <td><a href="remove1.php?category=Sandwiches">Sandwiches</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Sandwiches')).'</td>';?>
    </tr>

    <tr><td>8</td>
      <td><a href="remove1.php?category=Salads">Salads</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Salads')).'</td>';?>
    </tr>

    <tr><td>9</td>
      <td><a href="remove1.php?category=Alacarte">A la Carte</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Alacarte')).'</td>';?>
    </tr>

    <tr><td>10</td>
      <td><a href="remove1.php?category=Drinks">Drinks & Deserts</a></td>
      <?php echo '<td style="padding-left: 35px;"> '.$fooditems->count(array('category' => 'Drinks')).'</td>';?>
    </tr>


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

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>