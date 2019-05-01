   <h2>VERIFICATION</h2>
<p>	
<?php
 
if (isset($_REQUEST['uid'])){$uid=$_REQUEST['uid'];}else{$uid ='-1';}
if (isset($_REQUEST['verification'])){$verification=$_REQUEST['verification'];}else{$verification ='-1';}
//reads the variables 
echo '<br>'.$uid.'</br>';
echo '<br>'.$verification.'</br>';
//prints the variables



$query = "UPDATE `user` SET `verified`=".$verification." WHERE id = ".$uid;

	$result=$db->query($query); 
	if ($result)
		{
		echo '<h3><font color = "red">Users verification decision has been updated</font></h3>';
		$var6 ="ERROR";
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}
?>
</p>	