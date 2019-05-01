    <h1>List of all new users:</h1>
    <table  id="customers">
	<tr>
	<th><strong>ID</strong></th>
	<th><strong>Username</strong></th>

	<th><strong>Nickname</strong></th>

	<th><strong>email</strong></th>
	<th><strong>telephone</strong></th>
	<th><strong>Approve</strong></th>
	<th><strong>Deny</strong></th>
	</tr>
	
<?php

//pending adoption requests table
$query = 'SELECT id,  username,  password,  nickname,  date_of_birth,  block,  email,  telephone, verified FROM user WHERE verified =0 ';


//echo '<hr>'.$query.'<hr>';

$rows = $db->query($query); 

foreach ($rows as $row) 
{ 

?> 
	<tr>
	<td><?= $row["id"] ?></td>
	<td><?= $row["username"] ?></td>

	<td><?= $row["nickname"] ?></td>

	<td><?= $row["email"] ?></td>
	<td><?= $row["telephone"] ?></td>
	
	<td><a href='verification.php?uid=<?= $row["id"] ?>&verification=1'>accept</a></td>
	<td><a href='verification.php?uid=<?= $row["id"] ?>&verification=2'>reject</a></td>
	</tr>

<?php 
}

?>	
		</table>