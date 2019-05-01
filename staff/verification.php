<?php
include 'db.php';
include 'verification_variables.php';

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

  <h1>STAFF </h1>
</div>

<div class="row">
  <div class="col-3 menu">
    <ul>
	<?php echo $var2; ?>
    </ul>
  </div>

  <div class="col-6">
  <?php include 'verification_php.php'; ?>
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
