<?php
session_start();  
if(isset($_SESSION['views']))
    unset($_SESSION['views']); 
?>

<html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>

<hr><center>You are logged out</center>
<hr><center><a href = "index.php">click here to login</a></center><hr>

</body></html>