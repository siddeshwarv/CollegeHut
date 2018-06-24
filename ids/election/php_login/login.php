<?php 

	if(isset($_GET['contact_name']) && isset($_GET['pass'])){
		$contact_name = $_GET['contact_name'];
		$pass = $_GET['pass'];

		//echo $contact_name;
		//echo $pass;

		if(!empty($contact_name) && !empty($pass)){
			//echo "OK";

			$query = "select RollNo from Btech16 where RollNo = '".$contact_name."' and RollNo 	= '".$pass."'";
			//$query_run = mysql_query($query);

			if($query_run = $mysqli->query($query)){
				$query_num_rows = mysqli_num_rows($query_run);
				
				if($query_num_rows==0){
					echo "Invalid Ename or deptno";
					//header('Location:'.$http_referer);
					header('Location:../index1.html');
					
				}
				else{
					//echo "ok logged in";
					$user_id = mysql_result($query,0,'name');
					$_SESSION['user_id'] = $contact_name;
					//header('Location:../index1.html');
				}
			}
			else{
				echo "bad query";
			}
		}
		else{
			echo "You must supply all fields";
		}
}

//header('Content-Type: application/json');
//$json = json_encode($contact_name);
//echo $json//;

//exit;
 ?>

