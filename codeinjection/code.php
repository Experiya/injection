
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<center>
	<a href="index.html">Click to go back to sql index</a> /  
	<a href="/security">Click to go back to Home</a>
	<h1>
	Answer is - 
    <?php eval ("echo ".$_REQUEST["exp"].";"); ?>
</h1>
</center>
    
    <!-- phpinfo(); -->
</body>
</html>