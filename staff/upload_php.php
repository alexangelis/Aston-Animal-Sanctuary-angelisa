
<?PHP

if (isset($_REQUEST['aid'])){$aid=$_REQUEST['aid'];}else{$aid ='-1';}

$temp_id=0;
$query="SELECT MAX(id_picture) AS maxid FROM animal_pictures WHERE id_animal = ".$aid;
echo '<hr>'.$query.'<hr>';
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
$pid=$temp_id;

  if(!empty($_FILES['uploaded_file']))
  {
    $path1 = "../uploads/";
    $path2 = $aid."_".$pid."_". basename( $_FILES['uploaded_file']['name']);
	$path = $path1.$path2;
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
	  echo '<hr>'.$path2.'<hr>';
	  
$query = "INSERT INTO `animal_pictures` ";
$query = $query."(`id_animal` , `id_picture` ,`filename`) ";  
$query = $query."VALUES ";
$query = $query."('".$aid."', '".$pid."', '".$path2."')";

//echo '<hr>'.$query.'<hr>';

//execution of the query
//echo '<hr>'.$query.'<hr>';
$result=$db->query($query); 
//presentation of the result
	if ($result)
		{
		echo '<h3><font color = "red">A new picture has been inserted</font></h3>';
		}
	else	
		{
		echo '<font face="Trebuchet MS, Arial, Helvetica">';echo 'ERROR.';
		$var6 ="ERROR";
		}	  
	  
	  
	  
	  
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>