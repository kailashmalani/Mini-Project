<?php
include('model.php');
if(isset($_POST['submit'])){
  
	$user = $db->User;
  $orders = $db->order_no;
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cred = array('email' => $email,'pass' => $pass);
 
  
	$cursor = $user->findOne($cred);
	if($cursor==NULL){
		echo '<script> var r= confirm("Invalid email or password");
    if(r==true){window.location = "cart.php";}</script>';
	}
  else{
    session_start();
	$_SESSION['username']=$cursor['username'];
	$_SESSION['email']=$cursor['email'];
	$_SESSION['pass']=$cursor['pass'];
  $_SESSION['mobile']=$cursor['mobile'];
  $_SESSION['address']=$cursor['address'];
  $_SESSION['type']=$cursor['type'];
  $_SESSION['login']=1;

  $num = $orders->findOne();
  $tmporders = $db->tmporders;
  $doc = array('$set' => array('email' => $_SESSION['email']));
  $tmporders->update(array('order_no' => $num['no']),$doc); 
  header('location: cart.php');
}


}

?>