<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$data = json_decode(file_get_contents("php://input"));
	$disease_name = $data->angular_var1;
	$patient_name = $data->angular_var2;
	$prog1 = $data->angular_var3;
	$prog2 = $data->angular_var4;
	$prog3 = $data->angular_var5;
	$doctor_name = $_SESSION['user_id']; 

	
	$query_check = "select RollNo from Secretary where RollNo = '".$doctor_name."'";	
	$check;
	if($query_run1 = $mysqli->query($query_check))
	{	
		echo "dsdw";
		
		while($row = mysqli_fetch_array($query_run1))
		{
			$check =  $row[0];
		}
				
	}
	else{
	echo "hell";
	}
	echo $check;

	if($check!=NULL){
	$query11 = "update promises set pro1 = '".$prog1."',pro2 = '".$prog2."',pro3 = '".$prog3."' where position = 'cult_secy'";
	if($query_run1 = $mysqli->query($query11))
	{
		echo "yep";
			}
	else{
		echo "not";
	}
	
		
	}



	


 ?>
