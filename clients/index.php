<?php
	require_once "index.logic.php";
	include "../common/header.php";
	date_create(time,timezone);
?>
	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Phone number</th>
				<th>Created</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $clients):
?>
			<tr>
				<td><?=$clients['name']?></td>
				<td><?=$clients['gender']?></td>
				<td><?=$clients['email']?></td>
				<td><?=$clients['phonenumber']?></td>
				<td><?=$clients['created']?></td>
				<td class="center"><a href="edit.php?id=<?=$clients['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$clients['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>