   <h2>REQUESTS ANSWER</h2>
<p>	
<?php
 
if (isset($_REQUEST['uid'])){$uid=$_REQUEST['uid'];}else{$uid ='-1';}
if (isset($_REQUEST['aid'])){$aid=$_REQUEST['aid'];}else{$aid ='-1';}
if (isset($_REQUEST['answer'])){$answer=$_REQUEST['answer'];}else{$answer ='-1';}
//reads the variables 
echo '<br>'.$uid.'</br>';
echo '<br>'.$aid.'</br>';
echo '<br>'.$answer.'</br>';

$query = "UPDATE `animal_requests` ";
$query=$query." SET `staff_answer` = ".$answer;
$query=$query." WHERE `id_user` = ".$uid." AND `id_animal` = ".$aid;

	$result=$db->query($query); 
	if ($result)
		{
		echo '<h3><font color = "red">The request answer has been updated</font></h3>';
		$var6 ="ERROR";
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}

$query = "UPDATE `animal` ";
$query=$query." SET `availability` = ".$uid;
$query=$query." WHERE `id` = ".$aid;

	$result=$db->query($query); 
	if ($result)
		{
		echo '<h3><font color = "red">The animal has been updated</font></h3>';
		$var6 ="ERROR";
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}
?>
</p>	