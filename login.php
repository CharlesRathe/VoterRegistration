<?php 

	/* Call Database */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'voterregistration');
	$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	/* Check that connection set up successful */
	if(!$con){
		echo "Couldn't connect to database";
		echo "Err no." . mysqli_connect_errno() . PHP_EOL;
	}

	else{
		echo "Connected";
	}

	/* Validate username/password */
	

	/* Redirect to homepage if validated or redirect to welcome page if not */
?>