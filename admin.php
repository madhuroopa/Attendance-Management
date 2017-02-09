<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".hid").hide();
    $("#show").click(function(){
        $(".hid").show();
    });
});
</script>
</head>

<body>
	<input type  = "button" id = "show" value = "ADDFACULTY">
	<form action = "add.php" method = "post">
	<h4 class = "hid">FacultyId</h4>
	<input class = "hid" type = "text" name = "facultyid"><br>
	<h4 class = "hid"> Password</h4>
	<input class = "hid" type = "text" name = "password" value = "changeme"><br>
	<input type = "submit" class = "hid" value = "submit"></form>
</body>
</html>