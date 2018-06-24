<?php 

$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
//echo "bitch";
$val = (int)$_GET['id'];
//echo $val;
$type = $_GET['type'];
echo $type;
echo $val;


	$query1 = "update Complaint set status = 1 where Complaint_id = '".$val."'";

	if($query_run1 = $mysqli->query($query1)){
			echo "Updated";
			//header('Location:../g_secy.php');
			header('Location:../'.$type);
			//echo $s2;
		}
			else{
				echo "not";
			}




 ?>