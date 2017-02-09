<?php   
	$checked_count = count($_POST['check']);
	$check = $_POST['check'];
	
	echo $checked_count;
	$date = $_POST['date'];
	echo $date;
	echo "<br>";
	$subject = $_POST['subject'];
	echo $subject;echo "<br>";
	$conn = new mysqli("localhost", "root", "mysql123", "attendance");
	$faculty = "swapna";
	// Check connection
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	 
	if(!empty($check))
	{
    foreach($check as $id)
    {  
		echo $id;
		echo "<br>";
		$stmt = $conn->prepare("INSERT INTO attendance(date, subject, rollno,facultyid) VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $date,$subject,$id,$faculty);
		$stmt->execute();

        
       $stmt->close();
	   
      
    }
	}
	else 
		header( 'Location: select.html' );
	$conn->close();
	header( 'Location: select.html' );
?>
