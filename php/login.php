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

	/* Validate form entered */
	if(isset($_POST["email"]) && isset($_POST["pwd"])){

		$validate = "SELECT * FROM users WHERE email = '" . $_POST["email"] . "'"; // . is concat // SELECT * FROM users WHERE email= '<email>'
		$res = $con->query($validate);

		/* Check that a user exists with that email */
		if($res->num_rows > 0){
			$row = $res->fetch_assoc();


			/* Check that password matches */
			if($_POST["pwd"] == $row["password"]){

				/* Set session variables */
				$get_prec = "SELECT * FROM precincts WHERE zip_code = " . $row["zipcode"];
				$res = $con->query($get_prec);
				$precinct_res = $res->fetch_assoc();
				$precinct = $precinct_res["precinct_id"];

				$_SESSION["precinct"] = $precinct;
				$_SESSION["precinct_name"] = $precinct_res["precinct_name"];
				$_SESSION["email"] = $row["email"];
				$_SESSION["voterID"] = $row["id"];
				$_SESSION["permissions"] = $row["permissions"];
				$_SESSION["full_name"] = $row["full_name"];
				$_SESSION["dob"] = $row["dob"];
				$_SESSION["address"] = $row["address"];
				$_SESSION["party_aff"] = $row["pary_aff"];
				$_SESSION["gender"] = $row["gender"];
				$_SESSION["valid"] = $row["valid"];

				/* Redirect to homepage if validated */
				header("Location: homepage.php");
			}

			else{
				/* Set message and redirect if password doesn't match */
				$_SESSION["error"] = "Incorrect password";
				header("Location: ../index.php");
			}
		}

		else{
			/* Set message and redirect if no user found */
			$_SESSION["error"] = "No user with that email";
			header("Location: ../index.php");
		}
	}
?>

