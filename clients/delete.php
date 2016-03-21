<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete client</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$clients['id']?>">
			<label for="name">Name:</label>
			<span><?=$clients['name']?></span>
		</div>
		<div>
			<label for="name">Gender:</label>
			<span><?=$clients['gender']?></span>
		</div>
		<div>
			<label for="name">Email:</label>
			<span><?=$clients['email']?></span>
		</div>
		<div>
			<label for="name">Phone number:</label>
			<span><?=$clients['phonenumber']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>