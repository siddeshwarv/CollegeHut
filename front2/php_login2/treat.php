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


	$query = "update treatment set progress1 = '".$prog1."',progress2 = '".$prog2."',progress3 = '".$prog3."' where patient_email = '".$patient_name."'";
	if($query_run1 = $mysqli->query($query))
	{
		//cho "run";
		$query1="delete from treatment where progress1=1 AND progress2=1 AND progress3=1";
		if($query_run2 = $mysqli->query($query1))
		{
			echo "Deleted";

			$query3 = "insert into histrory values('".$patient_name."','".$doctor_name."','".$disease_name."')";
			if($query_run4 = $mysqli->query($query3)){
				echo "inserted";
			}
			else{
				echo "not inserted";
			}
		}
		else
		{
			echo "Not deleted";
		}
			}
	else{
		echo "not";
	}


 ?>