<?php
include('model.php');

$tmporders = $db->tmporders;
$orders = $db->order_no;
$num  = $orders->findOne();

$cursor = $tmporders->findOne(array('order_no' => $num['no']));
$current = $cursor['qty'][0];

if($current == NULL){
	echo '<script type="text/javascript">
			var r = confirm("Cart is empty");
			if(r==true){
			window.location = "menu.php";
			}
		</script>';
}
else{
	header('location: cart.php');
}


?>