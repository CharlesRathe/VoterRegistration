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


	// New Candidate
	if($_POST["candidate"] == "new"){ ?>
		<!doctype html>
		<html class="no-js" lang="">
		    <head>
		        <meta charset="utf-8">
		        <meta http-equiv="x-ua-compatible" content="ie=edge">
		        <title>Create Candidate</title>
		        <meta name="description" content="Create an election for people to vote in!">
		        <meta name="viewport" content="width=device-width, initial-scale=1">
		        <?php include("../html/bootstrap.html");?>
		        <link rel="stylesheet" href="../css/homepage.css">
		        <link rel="stylesheet" href="../css/modal.css">
		    </head>
		    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("navbar-admin.php");?>

		        <div class="container">
		            <div class="col-lg-10 col-lg-offset-1" style="text-align:center">
		                <div class="panel panel-primary">
		                    <div class="panel-heading">
		                        <h2>Add Candidate Details</h2>
		                    </div>
		                    <div class="panel-body">
		                        <form action="add_new_candidate.php" method="post">
		                            <div class="form-group">
		                                <label for="name">Candidate Name: </label>
		                                <input class="form-control" type="text" name="name" id="name">    
		                            </div>
		                            <div class="form-group">
		                                <label for= "state">Candidate State: </label>  
		                                <input class="form-control" type="text" name="state" id="state">
		                            </div>
		          					<div class="form-group">
		          						<label for="bio"> Candidate BIO: </label>
		          						<input class="form-control bio-field" type="text" name="bio" id="bio">
		                                
		                            </div>
		                            <input type="hidden" name="race" value=<?php echo '"' . $race . '"'; ?>>
		                         	<input type="hidden" name="election" value=<?php echo '"' . $election . '"'; ?>>

		                            <button class="btn btn-primary" type="submit" value="Submit">Create</button>
		                        </form>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </body>
		</html>
	<?php }

	// Get candidate
	else{

		$max_cand_id = "SELECT max(race_cand_id) as max from racecandidate";
		$max = mysqli_query($con, $max_cand_id);
		$row = $max->fetch_assoc();
		$max_id = $row["max"] + 1;

		$query = "SELECT * FROM candidates where candidate_name = '" . $_POST["candidate"] . "'";
		echo $query;
		$res = mysqli_query($con, $query);

		$row = $res->fetch_assoc();

		$insert_rc = "INSERT into racecandidate (`candidate_id`, `race_id`, `race_cand_id`) VALUES (" . $row["candidate_id"] . ", " . $race . ", " . $max_id . ")";
		if($ins_res = mysqli_query($con, $insert_rc)){
			$_SESSION["msg"] = "Candidate added!";
			$_SESSION["election_id"] = $election;
			header("Location: election.php");
		}

		else{
			$_SESSION["error"] = "Candidate not added!";
			$_SESSION["election_id"] = $election;
			header("Location: election.php");
		}
	}

?>