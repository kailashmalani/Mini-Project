<?php session_start();
include('model.php'); ?>

<?php 

if($_SESSION['paid']==1){
	echo '<script> var r= confirm("Your Order has already been placed");
    if(r==true){window.location = "menu.php";}</script>';
}
else{


$tmporders = $db->tmporders; 
$orders = $db->order_no;
$num = $orders->findOne();
 $dishid = $_GET['dishid'];
 $qty = $_GET['quantity'];

 if($qty==0){
 	$qty=1;
 }
 
 $currentorder = $tmporders->findOne(array('order_no' => $num['no']));

 $cursor = $tmporders->findOne(array('qty.dish_id' => new MongoId($dishid)));
 	if($cursor != NULL){
	$remove_fooditem = array('$pull' => array('qty' => array('dish_id' => new MongoId($dishid))));
	$tmporders->update(array('order_no' => $num['no']), $remove_fooditem);
 }

 $addqty = array('$push' => array('qty'=> array('dish_id'=>new MongoId($dishid),'qty'=>$qty)));
 	$tmporders->update(array('order_no' => $num['no']), $addqty);
header('location: menu.php');
}
?>