<?php

//Connection

$conn = "";

try {
	$servername = "localhost";
	$dbname = "salon";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=salon",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

//Validate

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM employee");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) &&
			($user['password'] == $password)) {
				header("location: adminMain.php");
		}
		else {
			echo ("<script language='javascript'>
                                window.alert('Wrong username or password. Please try again!');
                                window.location.href='login-page.php';
                                </script>");
			
		}
	}
}


?>
