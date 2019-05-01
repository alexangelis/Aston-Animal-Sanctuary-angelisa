    <h1>List of all animal adoption requests:</h1>
    <table  id="customers">
	<tr>
	<th><strong>User nickname</strong></th>
	<th><strong>Animal name</strong></th>
	<th><strong>Animal type</strong></th>

	</tr>
 
<?php
//adoption requests table
$query = 'SELECT u.nickname, a.name, t.type, ar.id_user, ar.id_animal ';
$query = $query.'FROM user u, animal a, animal_requests ar, animal_type t ';
$query = $query.'WHERE u.id = ar.id_user AND a.id = ar.id_animal AND t.id = a.type';

//echo '<hr>'.$query.'<hr>';

$rows = $db->query($query); 

foreach ($rows as $row) 
{ 

?> 
	<tr>
	<td><?= $row["nickname"] ?></td>
	<td><?= $row["name"] ?></td>
	<td><?= $row["type"] ?></td>

	</tr>

<?php 
}

?>	
		</table>