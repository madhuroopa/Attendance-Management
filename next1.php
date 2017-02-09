<html>
<body>
<form  action ="" method="post">


<br>
<br>
<?php
$branch = $_POST["branch"];
$year = $_POST["year"];
$date = $_POST['date'];
$subject = $_POST['subject'];
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
		$row["rollno"] ;
		echo "<br>";
		echo "<br>";
    }
   
} else {
    header( 'Location: select.html' );
	}
	 $conn->close();
?>
<input type="submit" name="submit" value="submit"/>
</form>
<body>
</html>
<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$password="";//database word  
$db="server";//database name  
$tbl_name="attendance"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['check'];  
$chk=""; 
$date = $_POST['date'];
$subject = $_POST['subject'];
$faculty = "S" 
for($chk1 = 0; $chk1 <= $checkbox1 ; $chk1 = $chk1 + 1)  {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into attendance(date,subject,rollno,facultyid) values ('$date','$subject','$chk','$faculty')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  