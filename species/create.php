<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Species</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Date of birth:</label>
			<input type="text" id="dob" name="dob">
		</div>
		<div>
			<label for="name">Race:</label>
			<input id="text" name="race"></input>
		</div>
		<div>
			<label for="name">Sex:</label>
			<input id="text" name="sex"></input>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>