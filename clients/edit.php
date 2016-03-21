<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$clients['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$clients['name']?>">
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" name="gender" value="Woman"> Woman
			<input type="radio" name="gender" value="Man"> Man<br>
		</div>
		<div>
			<label for="name">Email:</label>
			<input type="text" id="email" name="email" value="<?=$clients['email']?>">
		</div>
		<div>
			<label for="name">Phone number:</label>
			<input id="text" name="phonenumber" value="<?=$clients['phonenumber']?>"></input>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>