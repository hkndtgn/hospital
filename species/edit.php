<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit species</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$species['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$species['name']?>">
		</div>
		<div>
			<label for="name">Date of birth:</label>
			<input type="text" id="dob" name="dob" value="<?=$species['dob']?>">
		</div>
		<div>
			<label for="name">Race:</label>
			<input id="text" name="race" value="<?=$species['race']?>"></input>
		</div>
		<div>
			<label for="name">Sex:</label>
			<input id="text" name="sex" value="<?=$species['sex']?>"></input>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>