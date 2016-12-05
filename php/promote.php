<?php session_start();

	/* Call Database */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'vote');
	$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	/* Check that connection set up successful */
	if(!$con){
		echo "Couldn't connect to database";
		echo "Err no." . mysqli_connect_errno() . PHP_EOL;
	}

	$user_id = $_POST["id"];

	$query = "UPDATE users SET permissions = 2 where id = " . $user_id;

	$con->query($query);
	header("location: homepage.php");
	
	?>