<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$var = 'aaaa';
	if(logged_in()){		
		$var = $_SESSION['user_id'];		
	}

	header('Content-Type: application/json');
	echo json_encode($var);

 ?>