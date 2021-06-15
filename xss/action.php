
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<center>
	<a href="index.php">Click to go back to sql index</a> /  
	<a href="/security">Click to go back to Home</a>


</center>
<?php
$name = $_POST['name'];
echo "<center style='margin: 25px 50px 75px 100px;'><h1>Hello,  $name </h1></center>";
?>
</body>
</html>