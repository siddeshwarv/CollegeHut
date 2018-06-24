<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");

	echo "hell";
	//echo $_GET['complaints'];
	//$complaint = $_GET['c'];
	$aabra= $_GET['aabra'];
	//$complaint = $_GET['c'];
	//$complaint  = mysql_real_escape_string($complaint);
	//echo $complaint;
	$roll = $_SESSION['user_id'];
	echo $roll;
	//echo $http_referer;
	$trim =  str_replace("http://localhost/ids/shift2/", "", $http_referer);
	$trim =  str_replace(".php", "", $trim);
	//$trim  = mysql_real_escape_string($trim);
	echo $trim;

	//$query = "insert into Complaint values('g_secy',8,'B16006',$complaint,false)";
	$next_id;
	$query2 = "select max(Complaint_id) from Complaint";
		if($query_run2 = $mysqli->query($query2)){				
				while($row = mysqli_fetch_array($query_run2)){
						//echo $row[0];
						$next_id = $row[0];
					}
			}
				else{
					//header('Location:../index.html');
					echo "bitch";
					//header('Location:'.$http_referer);
				}


	
	$next_id = $next_id + 1;
	echo $next_id;

	//$query = "INSERT INTO Complaint (Position,Complaint_id,RollNo,Complaint,status) VALUES('$trim','$next_id','$roll','$complaint',false)";
	$query = "INSERT INTO Complaint (Position,Complaint_id,RollNo,Complaint,status) VALUES('$trim','$next_id','$roll','$aabra',false)";

	if($query_run = $mysqli->query($query)){				
				echo 'dwsd';
				header('Location:'.$http_referer);
			}
				else{
					//header('Location:../index.html');
					echo "bitch";
					header('Location:'.$http_referer);
				}


 ?>