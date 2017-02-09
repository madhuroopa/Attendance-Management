<html>
<body>
<form  action="database.php" method="post">
<?php
$branch = $_POST["branch"];
$year = $_POST["year"];
$subject = $_POST["subject"];
$date = $_POST["date"];
$conn = new mysqli("localhost", "root", "mysql123", "attendance");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM third where branch = '".$branch."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {?>
		<input type = "checkbox" name = "check[]" value="<?php echo $row['rollno']; ?>" >
		<?php echo 
		$row["rollno"];
		echo "<br>";
		echo "<br>";
    }
   
} else {
    header( 'Location: select.html' );
	}
	 $conn->close();
?>
<input type = "hidden" name = "date" value = "<?php echo $_POST['date']; ?>">
<input type = "hidden" name = "subject" value = "<?php echo $_POST['subject']; ?>">
<input type="submit" name="submit" value="submit"/>
</form>
<body>
</html>

	