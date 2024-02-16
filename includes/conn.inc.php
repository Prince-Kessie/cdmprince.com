<?php
// Server is localhost with
$servername='localhost';
$conn = new mysqli('localhost', 'root', '', 'organization-db');
 
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' .
    $conn->connect_errno . ') '.
    $conn->connect_error);
}

else {
    return $conn;
}