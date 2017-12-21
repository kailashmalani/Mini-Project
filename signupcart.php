<?php

include('model.php');

$user = $db->User;

	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];

	function matchpass($pass,$repass){
		if($pass==$repass)
			return 1;
	}

	if(matchpass($pass,$repass)==1){
		$doc = array(
			"username" => $username,
			"email" => $email,
			"pass" => $pass,
			"mobile" => $mobile,
			"address" => $address,
			"type" => "user",
			"orders" => 0);
		$user->insert($doc);
		echo "passwd matched";
	//	header('location: cart.php');
		
	}
	else{
		echo '<script> var r= confirm("Passwords donot match");
    if(r==true){window.location = "cart.php";}</script>';
	}


?>