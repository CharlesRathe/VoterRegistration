<?php session_start();

	/* Set up database connection */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'vote');
	$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	$validation = rand(pow(10, 3), pow(10, 4)-1);
	/* Check that connection set up successful */
	if(!$con){
		echo "Couldn't connect to database";
		echo "Err no." . mysqli_connect_errno() . PHP_EOL;
	}

	$query = "SELECT * FROM users where id = " . $_SESSION["voterID"];
	$res = $con->query($query);
	$row = $res->fetch_assoc();

	$subject = "Voter's Choice - VALIDATE";
	$message = "Please validate using this code: " . $row["validation_code"];

	mail($_SESSION["email"], $subject, $message);

	header("location: homepage.php/");
?>