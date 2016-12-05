<?php

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

	$type = $_POST["type"];
	echo $type;

	if($type == "national"){

		$all_pr = "SELECT precinct_id from precincts";
		$res = $con->query($all_pr);
		while($row = $res->fetch_assoc()){

				$get_max_ballot = "SELECT max(ballot_id) as max FROM ballot";
				$res2 = $con->query($get_max_ballot);

				$row2 = $res2->fetch_assoc();

				$max_ballot = $row2["max"];

			$sql = "INSERT INTO `ballot`(`ballot_id`, `precinct_id`) VALUES (" . $max_ballot . "," . $row["precinct_id"] . ")";
			$res = $con->query($sql);
			echo $res->error;
		}
	}

	elseif($type == "state"){
		$select_state = "SELECT * from precinct where state=" . $_POST["state"];
		$res = $con->query($select_state);
		while($row = $res->fetch_assoc()){

			$get_max_ballot = "SELECT max(ballot_id) as max FROM ballot";
			$res2 = $con->query($get_max_ballot);

			$row2 = $res2->fetch_assoc();

			$max_ballot = $row2["max"];

			$sql = "INSERT INTO `ballot`(`ballot_id`, `precinct_id`) VALUES (" . $max_ballot . "," . $row["precinct_id"] . ")";
			$con->query($sql);

		}

	}

	elseif($type == "local"){
				$get_max_ballot = "SELECT max(ballot_id) as max FROM ballot";
			$res = $con->query($get_max_ballot);

			$row = $res->fetch_assoc();

			$max_ballot = $row["max"];

			$sql = "INSERT INTO `ballot`(`ballot_id`, `precinct_id`) VALUES (" . $max_ballot . "," . $_POST["local"] . ")";
			$con->query($sql);
	}




?>