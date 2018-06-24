<?php
require 'Connection.php';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$tname= $request->tableName;

$sql1="Create table ".$tname." ( RollNo varchar(6),  Name varchar (30), Branch varchar(40), Hostel varchar(30), RoomNo int, PhoneNo varchar (10), GName varchar(30), GPhoneNo varchar(10), Password varchar(30), Primary Key (RollNo));";

if ($conn->query($sql1) === TRUE) {
    echo "Table Created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>