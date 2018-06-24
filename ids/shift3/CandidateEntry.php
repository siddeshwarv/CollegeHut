<?php
require 'Connection.php';
$name=$_POST["name"];
$roll=$_POST["roll"];
$post=$_POST["post"];
$Vada1=$_POST["Vada1"];
$Vada2=$_POST["Vada2"];
$Vada3=$_POST["Vada3"];
$Vada4=$_POST["Vada4"];
$Vada5=$_POST["Vada5"];

$sql = "insert into sec values ('".$name."','".$roll."','".$post."',0,'".$Vada1."','".$Vada2."','".$Vada3."','".$Vada4."','".$Vada5."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>