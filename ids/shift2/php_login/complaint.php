<?php 
	require "connect.inc.php";
	$data = json_decode(file_get_contents("php://input"));

	$s1 = $data->angular_var1;
	$s2 = $data->angular_var2;

	$val = $_GET['id'];

	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");

	//$query1 = "update Complaint set status = 1 where RollNo = '".$s1."' ";
	$query1 = "update Complaint set status = 0 where RollNo = '".$s1."'";

	if($query_run1 = $mysqli->query($query1)){
			echo "Updated";
			header('Location:../g_secy.php');
			//echo $s2;
		}
			else{
				echo "not";
			}


 ?>