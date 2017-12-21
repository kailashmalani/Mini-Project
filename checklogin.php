<?php
include('model.php');
session_start();

if($_SESSION['login']!=1){
	echo '<script type="text/javascript">
			var r = confirm("Please Login");
			if(r==true){
			window.location = "cart.php";
			}
		</script>';
}
else{
$orders = $db->order_no;
$num = $orders->findOne();
$tmporders = $db->tmporders;
$currentorder = $tmporders->findOne(array('order_no' => $num['no']));

if($currentorder['qty'][0]==NULL){
	echo '<script type="text/javascript">
			var r = confirm("Cart is empty");
			if(r==true){
			window.location = "cart.php";
			}
		</script>';
}
else{
	header('location: payment.php');
}
}

?>
