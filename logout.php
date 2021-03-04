<?php 
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>

	<?php

      $_SESSION['username'];
      $_SESSION['password'];
	session_destroy();
     header("location: Registration.html");

	?>


</body>
</html>