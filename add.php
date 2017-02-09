<?php
$user = $_POST["facultyid"];
$pass = $_POST["password"];
$servername = "localhost";
$username = "root";
$password = "mysql123";
$dbname = "attendance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$stmt = $conn->prepare("INSERT INTO faculty(facultyid,password) VALUES (?, ?)");
$stmt->bind_param("ss",$user,$pass);
$stmt->execute();
$stmt->close();
$conn->close();
header( 'Location: admin.php' );
?>