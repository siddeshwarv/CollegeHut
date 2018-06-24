<?php

session_start();

$_SESSION['user_id'] = B16006;

$db = new mysqli('localhost', 'root', 'Ayush@123', 'CollegeHut2');

// // Check connection
// if ($db->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
