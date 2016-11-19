<?php session_start(); 

	/* Set up database connection */
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


	/* Get Form Variables */
	$full_name = $_POST["fn"] . $_POST["ln"];
	$email = $_POST["email"];
	$pass = $_POST["pwd"];
	$ver = $_POST["ver-pwd"];
	$date = $_POST["dob"];
	$add = $_POST["address"];
	$zip = $_POST["zip"];
	$state = $_POST["state"];
	$perm = 2;

	// ID type/num
	$idt = $_POST["idt"];
	$idn = $_POST["idn"];

	if($idt == "ssn"){
		$idString = "null, " . $idn . ", null";
	}

	if($idt == "lic"){
		$idString = $idn . ", null, null";
	}

	if($idt == "ppt"){
		$idString = "null, null, " . $idn;
	}

	// Optional Demographics

	if(isset($_POST["gen"]))
	{
		$gen = "'" . $_POST["gen"] . "'";
	}

	else {
		$gen = "null";
	}

	if(isset($_POST["aff"]))
	{
		$aff = "'" . $_POST["aff"] . "'";
	}

	else {
		$aff = "null";
	}

	/* Validate that user does not already exist */

	$validate = "SELECT * FROM users WHERE email = '" . $email . "'";

	$res = $con->query($validate);

	if($res->num_rows != 0){
		$_SESSION["error"] = "User already exists";
		header("Location: ../index.php");
	}


	else{

		/* Validate that passwords have to match */

		if($pass != $ver && $pass != ""){
			$_SESSION["error"] = "Passwords did not match";  // Note can do with js too
			header("Location: ../index.php");
		}

		/* Get max voterID */

		$max = "SELECT max(id) from users";

		$res = $con->query($max);

		$row = $res->fetch_row();

		$maxID = $row[0] + 1;

		/* Put new user into the database (need to generate voter id) -> $voterID */

		$insert = "INSERT INTO users(`id`, `full_name`, `email`, `password`, `address`, `zipcode`, `permissions`, `dob`, `state`, `gender`, `party_aff`, `license_nmbr`, `ssn`, `passport_nmbr`) VALUES (" . $maxID . ", '" . $full_name . "', '" . $email . "', '" . $pass . "', '" . $add . "', " . $zip . ", " . $perm . ", '" . $date . "', '" . $state . "', " . $gen . ", " . $aff . ", " . $idString . ")";

		echo $insert;

		$success = $con->query($insert);

		/* If successfully put into db, set session variables and redirect to homepage */
		if($success){
			$_SESSION["voterID"] = $voterID;
			$_SESSION["permissions"] = 3;
			$_SESSION["full_name"] = $full_name;
			$_SESSION["email"] = $email;
			header("Location: homepage.php");
		}

		else{
			echo $con->error;
		}
	}	
?>