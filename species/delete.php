<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete Species</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$species['id']?>">
			<label for="name">Name:</label>
			<span><?=$species['name']?></span>
		</div>
		<div>
			<label for="name">Date of birth:</label>
			<span><?=$species['dob']?></span>
		</div>
		<div>
			<label for="name">Race:</label>
			<span><?=$species['race']?></span>
		</div>
				<div>
			<label for="name">Sex:</label>
			<span><?=$species['sex']?></span>
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