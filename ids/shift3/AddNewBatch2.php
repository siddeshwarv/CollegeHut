<?php
	
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	require 'Connection.php';

	$query1="show tables";
	$result=$conn->query($query1);
	//echo $result;
	// if(===TRUE)
	// {
	// 	echo "Executed";
	// }
	// else
	// {
	// 	echo "Error";
	// }
	
	$outp = "";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	    if ($outp != "") {$outp .= ",";}
	    $outp .= '{"Table":"'  . $rs["Tables_in_CollegeHut"] . '"}';
	}
	$outp ='{"records":['.$outp.']}';
	 $conn->close();

	 echo($outp);

?>