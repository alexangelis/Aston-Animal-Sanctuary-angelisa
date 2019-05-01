    <h1>Request adoption</h1>

<p>	
<?php
//we want to request an animal adoption 
//$id = $_REQUEST["id"]; 
if (isset($_REQUEST['id'])){$id=$_REQUEST['id'];}else{$id ='-1';}
//reads the id variable
//echo $id;

//$rows = $db->query("SELECT * FROM animal where availability=1"); 

$checkIfExist = 0;
$query='SELECT id_user , id_animal FROM animal_requests where id_user ='.$current_user_id.' AND id_animal = '.$id;
//query to request an animal adoption
$rows = $db->query($query); 
if ($rows->rowCount() > 0) { 
	echo '<p>You have requested for that animal</p>';
	$checkIfExist = 1;
}

if ($checkIfExist == 0)
{
$query = "INSERT INTO `animal_requests` ";
$query = $query."(`id_user` , `id_animal`) ";
$query = $query."VALUES ";
$query = $query."('".$current_user_id."', '".$id."')";

	$result=$db->query($query); 
	if ($result)
		{
		echo '<h3><font color = "red">Adoption requested successfully</font></h3>';
		$var6 ="Adoption requested successfully";
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}
}
?>
</p>	
