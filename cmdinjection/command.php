
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<center>
	<a href="index.html">Click to go back to sql index</a> /  
	<a href="/security">Click to go back to Home</a>

	<?php
	$ip = $_POST[ 'ip' ];
	echo "<h1>Your IP address is -  $ip</h1>";
	$result = shell_exec( 'ping  ' . $ip);
	echo "<pre>{$result}</pre>";
	?>
</center>
</body>
</html>