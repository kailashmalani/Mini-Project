<?php
include('model.php');
session_start();
$day = $_GET['day'];
$month = $_GET['month'];

$date1 = $day.'.'.$month.'.'.'16';
$date1 = (string)$date1;

$user = $db->User;
//echo $date;

		$cursor = $user->aggregate(array(array('$unwind' => '$user_orders'), array('$group' => array('_id' => '$user_orders.order_date', 'amt' => array('$sum' => '$user_orders.total'), 'count' => array('$sum' => 1)))));


				//var_dump($cursor);
		//echo $cursor['result'][1]['_id'];
		//echo $date1;
$_SESSION['flag']=0;
for($i=0;$i<count($cursor['result']);$i = $i+1){			
if(strcmp($cursor['result'][$i]['_id'],$date1)==0){
	$_SESSION['total'] = $cursor['result'][$i]['amt'];
	$_SESSION['count'] = $cursor['result'][$i]['count'];
	$_SESSION['flag']=1;
	break;
}
}

if($_SESSION['flag']!=1){
		echo '<script> var r= confirm("Invalid date");
    if(r==true){window.location = "totalamt.php";}</script>';
}
else{
header('location: totalamt.php');}

?>