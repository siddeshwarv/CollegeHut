<?php
require 'Connection.php';
// $RollNo=$_POST["RollNo"];
// $Name=$_POST["Name"];
// $Branch=$_POST["Branch"];
// $Hostel=$_POST["Hostel"];
// $RoomNo=$_POST["RoomNo"];
// $PhoneNo=$_POST["PhoneNo"];
// $GName=$_POST["GName"];
// $GPhoneNo=$_POST["GPhoneNo"];
// $Password=$_POST["Password"];

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$tname= $request->tableName;
$RollNo=$request->RollNo;
$Name=$request->Name;
$Branch=$request->Branch;
$Hostel=$request->Hostel;
$RoomNo=$request->RoomNo;
$PhoneNo=$request->PhoneNo;
$GName=$request->GName;
$GPhoneNo=$request->GPhoneNo;
$Password=$request->Password;
//echo $RollNo;
// echo $Name;
// echo $Branch;
// echo $Hostel;
// echo $RoomNo;
// echo $PhoneNo;
// echo $GName;
// echo $GPhoneNo;
 

$sql = "insert into ".$tname." values ('".$RollNo."','".$Name."','".$Branch."','".$Hostel."',".$RoomNo.",'".$PhoneNo."','".$GName."','".$GPhoneNo."','".$Password."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>