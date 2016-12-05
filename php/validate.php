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

	$code = $_POST["code"];

	$query = "SELECT * from users where id = " . $_SESSION["voterID"];
	$res = $con->query($query);
	$row = $res->fetch_assoc();

	if($code == $row["validation_code"]){
		$update = "UPDATE users SET valid = 1 WHERE id = " . $_SESSION["voterID"];
		$success = $con->query($update);
		if($success){
			$_SESSION["error"] = "Account validated!";
			$_SESSION["valid"] = 1;
			header("Location: homepage.php");
		}
		else{
			$_SESSION["error"] = "Account could not be validated, try resending code";
			header("Location: homepage.php");
		}
		
	}
?>