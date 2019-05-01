 <h1>List of all animals :</h1>
    <table  id="customers">
	<tr>
	<th><strong>ID</strong></th>
	<th><strong>Name</strong></th>
	<th><strong>Pictures</strong></th>
	<th><strong>Add Picture</strong></th>

	</tr>

<?php
//list animal table

$query = "SELECT id, name FROM animal"; 


$rows = $db->query($query); 


foreach ($rows as $row) 
{ 
$MYid = $row["id"];
?> 
	<tr>
	<td><?= $row["id"] ?></td>
	<td><?= $row["name"] ?></td>
	<td>
<?php 



/////////////////////////////////////

$query1 = 'SELECT filename FROM animal_pictures WHERE id_animal = '.$row["id"];

$rows1 = $db->query($query1); 

foreach ($rows1 as $row1) 
{ 

?> 
	<img width = '50' src = '../uploads/<?= $row1["filename"] ?>'>

<?php 
}



//////////////////////////////////


?>	
    </td>
	<td>
	  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
	<input type="hidden" name="aid" value="<?= $row["id"] ?>"></input><br />
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
	</td>
	</tr>

<?php 
}

?>	
		</table>