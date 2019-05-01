   <h2>REGISTER</h2>
<p>	
<?php
 
if (isset($_REQUEST['username'])){$username=$_REQUEST['username'];}else{$username ='-1';}
if (isset($_REQUEST['password'])){$password=$_REQUEST['password'];}else{$password ='-1';}
if (isset($_REQUEST['nickname'])){$nickname=$_REQUEST['nickname'];}else{$nickname ='-1';}
if (isset($_REQUEST['date'])){$date=$_REQUEST['date'];}else{$date ='-1';}
if (isset($_REQUEST['email'])){$email=$_REQUEST['email'];}else{$email ='-1';}
if (isset($_REQUEST['telephone'])){$telephone=$_REQUEST['telephone'];}else{$telephone ='-1';}


$temp_id=0;
$query="SELECT MAX(user.id) AS maxid FROM user";
$rows = $db->query($query); 

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


$query = "INSERT INTO `user` ";
$query = $query."(`id` ,`username` , `password` , `nickname` , `date_of_birth` , `email`, `telephone`) ";  
$query = $query."VALUES ";
$query = $query."('".$temp_id."', '".$username."', '".$password."', '".$nickname."', '".$date."', '".$email."', '".$telephone."')";

$result=$db->query($query); 
	if ($result)
		{
		echo '<h3><font color = "red">Your data have been inserted into the database and you are waiting for approval from a staff member</font></h3>';
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}












?>
</p>	