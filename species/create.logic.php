<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$dob = $db->escape_string($_POST["dob"]);
		$race = $db->escape_string($_POST["race"]);
		$sex = $db->escape_string($_POST["sex"]);
		
		// Prepare query and execute
		$query = "insert into species (name, dob, race, sex) values ('$name','$dob','$race', '$sex')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>