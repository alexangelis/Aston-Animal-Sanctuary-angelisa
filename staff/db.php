<?php
session_start();

$db = new PDO("mysql:dbname=angelisa_astonanimalsanctuary;host=localhost","angelisa","dMRWcgF6G"); 

if(isset($_SESSION['views'])) //an h metavlhth session exei timh - ti vlepei opoios ekane login
{
	$current_user_id=$_SESSION['views'];
?>

<?php
}
else    //an den exei ginei login (akoma)
	{
	if (isset($_POST['username'])){$username=$_POST['username'];}else{$username ='1';}      //elegxei an elave metavlhtes username,password, ti plhktrologh8hke
	if (isset($_POST['password'])){$password=$_POST['password'];}else{$password ='1';}      // an den lavei vazei times vazei 1 se oses den elave

	$login = 10;

	$query = "SELECT id, username, password FROM staff";
	$rows = $db->query($query); 

	if (!$rows){echo '<h3><center>ERROR</center></h3>';}
	else
		{
		foreach ($rows as $row) 
			{
			
			$user =  stripslashes($row['username']);
			$pass =  stripslashes($row['password']);
			$id =  stripslashes($row['id']);
			if (($username == $user) && ($password == $pass))  // an isxuei h sun8hkh ginetai login
				{
				$login = 5;
				$_SESSION['views'] = $id;
				}			
			}
		}

	
if ($login == 5) 
{				
?>

<?php
}
if ($login == 10) //an to login paramenei 10(den exei ginei login)
{
	include 'add_animal_1_variables.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aston animal sanctuary User</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>

</style>
</head>
<body>

<div class="header">

  <h1>STAFF</h1>
</div>

<div class="row">
  <div class="col-3 menu">
    <ul>
	<?php echo $var2; ?>
    </ul>
  </div>

  <div class="col-6">


  <form action = 'index.php'  method='post'>
		<table>
		<tr><td></td><td colspan = "2"><p><b><h3>Login</h3></b></p></td></tr>
		<tr></tr><tr></tr><br>
		<tr><td align = "center"><p>Username:</p></td> <td><input type= "text" name="username" id= "username" /></td></tr>
		<tr><td align = "center"><p>Password:</p></td><td><input type= "password" name="password"id= "password" /></td></tr>
		<tr><td align = "center"></td><td><input type="submit" value="Enter"/><input type="reset" value="Clear"/></td></tr>
		</table>
		</form>

  </div>

  <div class="col-3 right">
    <div class="aside">
      <h2><?php echo $var4; ?></h2>
      <p><?php echo $var5; ?></p>
	  <p><?php echo $var6; ?></p>
    </div>
  </div>
</div>

<div class="footer"><p>Developed by Alexandros Angelis. Contact details: <a href = 'mailto:angelisa@aston.ac.uk'>angelisa@aston.ac.uk</a>.</p>
</div>

</body>
</html>
		
		
		
<?php
				exit;
				}
	}

?>