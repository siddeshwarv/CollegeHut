<?php 
	
	require "core.inc.php";
	require "connect.inc.php";
	//"../index2.html";
	//header('Location:../index2.html');

	if(logged_in()){
		//echo "you are logged in";
		echo "<a href=\"log_out.php\">log out</a>";
		//echo $current_file = $_SERVER['SCRIPT_NAME'];
		//header('Location:../index2.html');
		echo $_SESSION['user_id'];
		//echo 'hello';
		echo 'Hello';
		
	}

	else{
		//echo "no";
		//echo $variable = 0;
		include "login.php";

	}
	//echo $current_file;
 ?>


  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<img src="images.png" align = "right">
  	<h1 style="color:blue;" align="center">Welcome to IIT mandi election portal</h1><br>

  	<h1 style="color:red;" align="center">Select the secretaries to vote</h1><br><br>
  	<form action="get_votes.php" method="GET" align="center"><br>
   	Technical:
   	  <select name="tech">
   	  	<?php 
   	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
   	//echo 'bitch';
 	$query1 = "select name,roll from sec where post = 'technical'";
	if($query_run1 = $mysqli->query($query1)){	
 			while($row = mysqli_fetch_array($query_run1)){
 				//echo "<option value="'.$row['roll'].'">" . $row['name'] . "</option>";
 				echo '<option value=" '.$row['roll'].' "> '.$row['name'].' </option>';	
 			}
 			
 		}
 		else
 		{
 			echo 'bad';
 		}
 	?>

 	</select><br>
   Cultural:
   <select name="cult">
   	  	<?php 
   	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
   	//echo 'bitch';
 	$query1 = "select name,roll from sec where post = 'Cultural'";
 	if($query_run1 = $mysqli->query($query1)){	
 			while($row = mysqli_fetch_array($query_run1)) {
 				echo '<option value=" '.$row['roll'].' "> '.$row['name'].' </option>';

 			}
 			
 		}
 		else
 		{
 			echo 'bad';
 		}
 	?>

 	</select><br>
   General
   <select name="gen">
   	  	<?php 
   	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
   	//echo 'bitch';
 	$query1 = "select name,roll from sec where post = 'general'";
 	if($query_run1 = $mysqli->query($query1)){	
 			while($row = mysqli_fetch_array($query_run1)){
 				echo '<option value=" '.$row['roll'].' "> '.$row['name'].' </option>';
 				 				
 			}
 			
 		}
 		else
 		{
 			echo 'bad';
 		}
 	?>

 	</select><br>
 	Hostel
   <select name="hostel">
   	  	<?php 
   	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
   	//echo 'bitch';
 	$query1 = "select name,roll from sec where post = 'hostel'";
 	if($query_run1 = $mysqli->query($query1)){	
 			while($row = mysqli_fetch_array($query_run1)){
 				echo '<option value=" '.$row['roll'].' "> '.$row['name'].' </option>';
 			}
 			
 		}
 		else
 		{
 			echo 'bad';
 		}
 	?>

 	</select><br>
 	Academic
   <select name="acad">
   	  	<?php 
   	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
   	//echo 'bitch';
 	$query1 = "select name,roll from sec where post = 'Academic'";
 	if($query_run1 = $mysqli->query($query1)){	
 			while($row = mysqli_fetch_array($query_run1)){
 				echo '<option value=" '.$row['roll'].' "> '.$row['name'].' </option>';
 				 				
 			}
 			
 		}
 		else
 		{
 			echo 'bad';
 		}
 	?>

 	</select><br>
 	Research
   <select name="res">
   	  	<?php 
   	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");
   	//echo 'bitch';
 	$query1 = "select name,roll from sec where post = 'Research'";
 	if($query_run1 = $mysqli->query($query1)){	
 			while($row = mysqli_fetch_array($query_run1)){
 				echo '<option value=" '.$row['roll'].' "> '.$row['name'].' </option>';
 				 				
 			}
 			
 		}
 		else
 		{
 			echo 'bad';
 		}
 	?>

 	</select><br>
   <input type="submit" value="Submit">
 	</form>
  

  </body>
  </html>
