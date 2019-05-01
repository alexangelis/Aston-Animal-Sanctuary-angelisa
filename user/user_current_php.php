    <h1>List of your current adoption requests</h1>
	
<?php

//We want to find all the "animals" that are not adopted.
//This means that in the table "animals" the field availability = 0.
//We also want the animals that the users has requested for adoption.
//This means that the field id in the table "user" equals with the current user id.
//The current user id is the id of the user who has logged in.

$query='SELECT a.id, a.name, a.date_of_birth, a.description, a.type, a.gender, a.vaccinated ';
$query=$query.'FROM user u, animal_requests ar, animal a '; 
$query=$query.'WHERE u.id=ar.id_user AND ar.id_animal=a.id ';
$query=$query.'AND a.availability=0 ';
$query=$query.'AND u.id = '.$current_user_id;

$rows = $db->query($query);  
if ($rows->rowCount() == 0) { 
	echo '<p>You do not have current adoption requests</p>';
	$checkIfExist = 1;
}
else
{
?> 
    <table  id="customers">
	<tr>
	<th><strong>ID</strong></th>
	<th><strong>Name</strong></th>
	<th><strong>date Of Birth</strong></th>
	<th><strong>Description</strong></th>

<?php 
foreach ($rows as $row) 
{ 
$MYid = $row["id"];
?> 
	<tr>
	<td><?= $row["id"] ?></td>
	<td><?= $row["name"] ?></td>
	<td><?= $row["date_of_birth"] ?></td>
	<td><?= $row["description"] ?></td>



	</tr>

<?php 
}
		echo '</table>';
}
?>	