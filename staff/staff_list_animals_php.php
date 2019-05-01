 <h1>List of all animals :</h1>
    <table  id="customers">
	<tr>
	<th><strong>ID</strong></th>
	<th><strong>Name</strong></th>
	<th><strong>Type</strong></th>
	<th><strong>Gender</strong></th>
	<th><strong>Vaccinated</strong></th>
	<th><strong>Staff Answer</strong></th>
	<th><strong>Owner</strong></th>
	
	</tr>

<?php
//list animal table

$query = "SELECT a.id, a.name, g.gender, at.type, v.boolean, s.staff_answer , u.nickname "; 
$query = $query."FROM animal_requests ar, animal a, animal_type at, gender g, vaccinated v, staff_answer s , user u ";
$query = $query."WHERE at.id=a.type ";
$query = $query."AND g.id=a.gender ";
$query = $query."AND v.id=a.vaccinated ";
$query = $query."AND ar.id_animal=a.id ";
$query = $query."AND ar.staff_answer=s.id "; 
$query = $query."AND u.id=a.availability "; 
//$query = $query."AND a.availability>0";


$rows = $db->query($query); 


foreach ($rows as $row) 
{ 
$MYid = $row["id"];
?> 
	<tr>
	<td><?= $row["id"] ?></td>
	<td><?= $row["name"] ?></td>
	<td><?= $row["type"] ?></td>
	<td><?= $row["gender"] ?></td>
	<td><?= $row["boolean"] ?></td>
	<td><?= $row["staff_answer"] ?></td>
	<td><?= $row["nickname"] ?></td>
	


	</tr>

<?php 
}

?>	
		</table>