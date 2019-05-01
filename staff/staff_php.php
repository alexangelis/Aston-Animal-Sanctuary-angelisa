    <h1>List of all pending adoption requests:</h1>
    <table  id="customers">
	<tr>
	<th><strong>User nickname</strong></th>
	<th><strong>Animal name</strong></th>
	<th><strong>Animal type</strong></th>
	<th><strong>Approve</strong></th>
	<th><strong>Deny</strong></th>
	</tr>
<?php
//the pending adoption requests table
$query = 'SELECT u.nickname, a.name, t.type, ar.id_user, ar.id_animal ';
$query = $query.'FROM user u, animal a, animal_requests ar, animal_type t ';
$query = $query.'WHERE u.id = ar.id_user AND a.id = ar.id_animal AND a.availability = 0 AND t.id = a.type AND ar.staff_answer = 0 ';

//echo '<hr>'.$query.'<hr>';

$rows = $db->query($query); 

foreach ($rows as $row) 
{ 

?> 
	<tr>
	<td><?= $row["nickname"] ?></td>
	<td><?= $row["name"] ?></td>
	<td><?= $row["type"] ?></td>
	<td><a href='answer.php?uid=<?= $row["id_user"] ?>&aid=<?= $row["id_animal"] ?>&answer=1'>approve</a></td>
	<td><a href='answer.php?uid=<?= $row["id_user"] ?>&aid=<?= $row["id_animal"] ?>&answer=2'>deny</a></td>
	</tr>

<?php 
}

?>	
		</table>