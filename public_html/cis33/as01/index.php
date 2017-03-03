<?php ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>CIS 33 Assignment 01</title>  
</head>
<body>
  <h1>Welcome to CIS 33!</h1>
  <p>
	<?php echo date('Y-m-d G:m:s'); ?><br />
	<?php echo $_SERVER['REMOTE_ADDR']; ?>
  </p>
</body>
</html>
