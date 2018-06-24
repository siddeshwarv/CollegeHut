<?php 

	//$query = "select RollNo from SuperUser where RollNo ='".$_GET['contact_name']."'";
	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
	$query = "select RollNo from SuperUser where RollNo ='SU001'";
	
	if(!$query_run1 = $mysqli->query($query))
	{	
		//$_SESSION['user_id'] = $contact_name;
		//echo "fsf";
		echo $_SESSION['user_id'];
		//header('Location:'.$http_referer);
				
	}
	else{
				

		if(isset($_GET['contact_name']) && isset($_GET['pass'])){
		$contact_name = $_GET['contact_name'];
		$pass = $_GET['pass'];

		//echo $contact_name;
		//echo $pass;

		if(!empty($contact_name) && !empty($pass)){
			//echo "OK";

			$query = "select RollNo from Btech16 where RollNo = '".$contact_name."' and RollNo = '".$pass."'";
			//$query2 = "select RollNo from SuperUser where RollNo ='".$contact_name."'";
			//$query_run = mysql_query($query);

			if($query_run = $mysqli->query($query)){
				$query_num_rows = mysqli_num_rows($query_run);
				//$query_num_rows2 = mysqli_num_rows($query_run1);
				
				if($query_num_rows==0){
					echo $contact_name;
					if(!strcmp($contact_name,"SU001")){
						$_SESSION['user_id'] = $contact_name;
						header('Location:../../shift3/SuperUser.html');
					
					}
					else{
					header('Location:'.$http_referer);
					}					
					
					//echo "Invalid Ename or deptno";
					
					
				}
				else{
					echo "ok logged in";
					$user_id = mysql_result($query,0,'name');
					
					
				
					$_SESSION['user_id'] = $contact_name;
					//echo $query_num_rows;
					//header('Location:../index.html');
					header('Location:'.$http_referer);
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


	
}

//header('Content-Type: application/json');
//$json = json_encode($contact_name);
//echo $json//;

//exit;
 ?>
