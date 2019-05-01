   <h2>REGISTER</h2>
<p>	
<?php

//receiving the name of the variables from the form in the previous page
if (isset($_REQUEST['id'])){$username=$_REQUEST['id'];}else{$id ='-1';}
if (isset($_REQUEST['name'])){$name=$_REQUEST['name'];}else{$name ='-1';}
if (isset($_REQUEST['date_of_birth'])){$date_of_birth=$_REQUEST['date_of_birth'];}else{$date_of_birth ='-1';}
if (isset($_REQUEST['description'])){$description=$_REQUEST['description'];}else{$description ='-1';}
if (isset($_REQUEST['type'])){$type=$_REQUEST['type'];}else{$type ='-1';}
if (isset($_REQUEST['gender'])){$gender=$_REQUEST['gender'];}else{$gender ='-1';}
if (isset($_REQUEST['vaccinated'])){$vaccinated=$_REQUEST['vaccinated'];}else{$vaccinated ='-1';}

//finding of the max value of id field in the table animal
$temp_id=0;
$query="SELECT MAX(id) AS maxid FROM animal";
$rows = $db->query($query);
 
//increase of the value by 1
if ($rows->rowCount() == 0) { 
	$temp_id=1;
}
else
{
	foreach ($rows as $row) 
{ 
$temp_id = $row["maxid"];
$temp_id = $temp_id + 1;
}
}	

//creation of the query that insert values in the database
$query = "INSERT INTO `animal` ";
$query = $query."(`id` ,`name` , `date_of_birth` , `description` , `availability` , `registrar_id`,`type`, `gender`, `vaccinated`) ";  
$query = $query."VALUES ";
$query = $query."('".$temp_id."', '".$name."', '".$date_of_birth."', '".$description."', '0', '".$current_user_id."', '".$type."', '".$gender."', '".$vaccinated."')";

//execution of the query
//echo '<hr>'.$query.'<hr>';
$result=$db->query($query); 
//presentation of the result
	if ($result)
		{
		echo '<h3><font color = "red">The data of the new animal have been inserted into the database</font></h3>';
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}












?>
</p>	