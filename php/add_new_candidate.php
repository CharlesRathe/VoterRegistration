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

	$race = $_POST["race"];
	$election = $_POST["election"];
	$name = $_POST["name"];
	$bio = $_POST["bio"];
	$state = $_POST["state"];

	$get_office = "SELECT * FROM offices as o, races as r where r.office_id = o.office_id and r.race_id = " . $race;
	$res = mysqli_query($con, $get_office);
	$row = $res->fetch_assoc();
	$office = $row["office_id"];

	$max_id = "SELECT max(candidate_id) as max from candidates";
	$maxres = mysqli_query($con, $max_id);
	$maxrow = $maxres->fetch_assoc();
	$max_id = $maxrow["max"] + 1;

	$insert = "INSERT INTO `candidates`(`candidate_id`, `candidate_name`, `candidate_state`, `candidate_bio`, `office_id`) 
				VALUES (" . $max_id . ", '" . $name . "', '" . $state . "', '" . $bio . "', " . $office . ")";

	if($rescan = mysqli_query($con, $insert)){

	$max_rc_id = "SELECT max(race_cand_id) as max from racecandidate";
	$maxrc = mysqli_query($con, $max_rc_id);
	$maxrcrow = $maxrc->fetch_assoc();
	$max_rc = $maxrcrow["max"] + 1;


	$insert_rb = "INSERT INTO `racecandidate`(`candidate_id`, `race_id`, `race_cand_id`) VALUES (" . $max_id . ", " . $race . ", " . $max_rc .")";

	if($resins = mysqli_query($con, $insert_rb)){
		$_SESSION["election_id"] = $election;
		$_SESSION["msg"] = "Candidate added";
		header("Location: election.php");
	}

	else{
		$_SESSION["error"] = "Couldn't add candidate";
		$_SESSION["election_id"] = $election;
		header("location: election.php");
	}
}

	else{
		$_SESSION["error"] = "Couldn't add candidate";
		$_SESSION["election_id"] = $election;
		header("location: election.php");
	}



?>