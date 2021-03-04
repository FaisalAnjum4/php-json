<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Validation </title>
</head>
<body>
<?php 

    	$username = $_POST['username1'];
    	$password = $_POST['password1'];

    	$f = fopen("text.txt", "r");
$read = fread($f, filesize("text.txt"));

 $json_decoded = json_decode($read, true);
$jsondec = explode(",", $json_decoded);
     
 for($i = 0; $i < count($jsondec); $i++) {

          if($username==$jsondec[0])
      $_SESSION['username']= $jsondec[0];
      $_SESSION['password']= $jsondec[1];


}

    

?>
<form action="logout.php" method="POST">
	<input type="submit" value="LOGOUT">
</form>


</body>
</html>
