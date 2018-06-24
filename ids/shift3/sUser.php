<?php
require 'Connection.php';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$var= $request->Estatus;
//echo $var;

$sql="update SuperUser set Election=".$var." where RollNo ='SU0001'";

if ($conn->query($sql) === TRUE) {
    echo "Table Updated";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>