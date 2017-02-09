<?php
session_start();
$faculty = $_SESSION["faculty"];
$subject = $_GET['subject'];
$date = $_GET['date'];
$conn = new mysqli("localhost", "root", "mysql123", "attendance");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM attendance where subject = '".$subject."' and date = '".$date."' and facultyid = '".$faculty."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<br>" ;
		echo $row["rollno"];
	}
   
} else {
    echo $sql;
	}
	 $conn->close();

?>