<?php 
	session_start();

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
	$num_races = $_POST["num_races"];

	foreach($_POST["candidates"] as $race => $candidate){
		$find_ballot = "SELECT * FROM raceballot as rb, ballot as b where rb.race_id = " . $race . " and b.precinct_id = " . $_SESSION["precinct"] . " and rb.ballot_id = b.ballot_id";
		$res = mysqli_query($con, $find_ballot);
		$row = $res->fetch_assoc();

		$find_candidate = "SELECT * FROM candidates where candidate_name = '" . $candidate . "'";
		echo $find_candidate;
		$res2 = mysqli_query($con, $find_candidate);
		$row2 = $res2->fetch_assoc();

		$insert = "INSERT INTO `uservote`(`candidate_id`, `users_id`, `ballot_id`) VALUES (" . $row2["candidate_id"] .", " . $_SESSION["voterID"] . ", " . $row["ballot_id"] . ")";
		if($insres = mysqli_query($con, $insert)){
			$_SESSION["msg"] = "You just voted! Good job!";
			header("Location: homepage.php");
		}

		else{
			$_SESSION["error"] = "Couldn't vote at this time! Try again!";
			header("location: homepage.php");
		}
	}

?>