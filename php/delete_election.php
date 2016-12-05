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

	$races = [];

	$delete = "DELETE from election where election_id = " . $_POST["election_id"];
	$get_races = "SELECT race_id from races where election_id = " . $_POST["election_id"];
	$res = $con->query($get_races);

	while($row = $res->fetch_assoc())
	{
		array_push($races, $row["race_id"]);
	}

	// foreach($races as $race){
	// 	$delete_race_precincts = "DELETE FROM raceprecincts where race_id =" . $race;
	// 	$con->query($delete_race_precincts);
	// }

	foreach($races as $race){
		$delete_race_candidates = "DELETE FROM racecandidate where race_id =" . $race;
		$con->query($delete_race_candidates);
	}

	foreach($races as $race){
		$delete_race_ballots = "DELETE FROM raceballot where race_id =" . $race;
		$con->query($delete_race_ballots);
	}

	foreach($races as $race){
		$delete_races = "DELETE FROM raceprecincts where race_id =" . $race;
		$con->query($delete_races);
	}

	$con->query($delete);

	$_SESSION["error"] = "Election deleted";

	header("location: homepage.php");



?>