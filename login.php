<?php
// Start the session
session_start();
?>
<?php
$user = $_POST["uname"];
$pass = $_POST["password"];
$servername = "localhost";
$username = "root";
$password = "mysql123";
$dbname = "attendance";
$_SESSION["faculty"] = $user;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM faculty where facultyid = '".$user."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
        if( $row["password"] == $pass)
			header( 'Location: select.html' );
    }
   
} else {
    header( 'Location: login.html' );
	}
$conn->close();
?>