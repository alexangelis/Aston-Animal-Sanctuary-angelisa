   <h2>ADD ANIMAL</h2>
	<form method = "post" action='add_animal_1.php'>
	<table>
	<tr><td>Name</td><td><input type = 'text' id = 'name' name = 'name'></td></tr>
	<tr><td>Date Of Birth</td><td><input type = 'date' id = 'date_of_birth' name = 'date_of_birth'></td></tr>
	<tr><td>Description</td><td><input type = 'text' id = 'description' name = 'description'></td></tr>	

	<tr><td>Type</td><td><select id = 'type' name = 'type'>	

<?php
//gets all values from animal_type table and puts them to the select element of the form
$rows = $db->query("SELECT id, type FROM animal_type"); 
foreach ($rows as $row) 
{ 
?> 
	<option value="<?= $row["id"] ?>"><?= $row["type"] ?></option>
<?php 
}
?>		
</td></tr>


	
	<tr><td>Gender</td><td><select id = 'gender' name = 'gender'>	
<?php
//gets all values from gender table and puts them to the select element of the form
$rows = $db->query("SELECT id, gender FROM gender"); 
foreach ($rows as $row) 
{ 
?> 
	<option value="<?= $row["id"] ?>"><?= $row["gender"] ?></option>
<?php 
}
?>		
</td></tr>
	
	

	<tr><td>Vaccinated</td><td><select id = 'vaccinated' name = 'vaccinated'>	
<?php
//get all values from vaccinated table and puts them to the select element of the form
$rows = $db->query("SELECT id, boolean FROM vaccinated"); 
foreach ($rows as $row) 
{ 
?> 
	<option value="<?= $row["id"] ?>"><?= $row["boolean"] ?></option>
<?php 
}
?>		
</td></tr>	
	
	<tr><td></td><td><input type = 'submit' value = 'Add'></td></tr>	
	</table>
	</form>