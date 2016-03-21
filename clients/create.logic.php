<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$gender = $db->escape_string($_POST["gender"]);
		$email = $db->escape_string($_POST["email"]);
		$phonenumber = $db->escape_string($_POST["phonenumber"]);
		$created = $db->escape_string($_POST["created"]);
		
		// Prepare query and execute
		$query = "insert into clients (name, gender, email, phonenumber, created) values ('$name','$gender','$email','$phonenumber','$created')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>