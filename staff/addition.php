   <h2>ADDITION OF AN ANIMAL</h2>
<p>	
<?php
 
if (isset($_REQUEST['uid'])){$uid=$_REQUEST['uid'];}else{$uid ='-1';}
if (isset($_REQUEST['aid'])){$aid=$_REQUEST['aid'];}else{$aid ='-1';}
if (isset($_REQUEST['answer'])){$answer=$_REQUEST['answer'];}else{$answer ='-1';}
//reads the variables from the database
echo '<br>'.$uid.'</br>';
echo '<br>'.$aid.'</br>';
echo '<br>'.$answer.'</br>';
//printing the variables


?>
</p>	