<?php
	require_once "create.logic.php";
	include "../common/header.php";

?>
	<h1>New Client</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" name="gender" value="Woman" required> Woman
			<input type="radio" name="gender" value="Man"> Man<br>
		</div>
		<div>
			<label for="name">Email:</label>
			<input type="text" id="email" name="email" required>
		</div>
		<div>
			<label for="name">Phone number:</label>
			<input id="text" name="phonenumber" required></input>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>