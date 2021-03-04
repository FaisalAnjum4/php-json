

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Validation </title>
</head>
<body>

	<h1>Registration Form Validation</h1>

	<?php 

		$firstName = $_POST['fname'];
		$lastName = $_POST['lastname'];
		$Gender = $_POST['gender'];
		$Email = $_POST['email'];
		$UserName = $_POST['username'];
		$Password = $_POST['pass'];
		$REmail = $_POST['remail'];

       $arr1 = array('username' => $UserName, 'pass' => $Password, 'firstname' => $firstName, 'lastName' => $lastName, 'gender'=> $Gender, 'email' => $Email );
$json_encoded_1 = json_encode($arr1);
	
         $f1 = fopen("text.txt", "a");
         fwrite($f1, $json_encoded_1 . "\n");
         fclose($f1);

        

       
        header('Location: Signin.html');
        exit;
	?>



</body>
</html>