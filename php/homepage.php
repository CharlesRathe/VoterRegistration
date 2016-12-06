<?php session_start() ?>

<!DOCTYPE html>
<html>
	<head>
        <?php include '../html/bootstrap.html'; ?>
        <title>Voter Registration Homepage</title>
        <link rel="stylesheet" href="../css/homepage.css" type="text/css">
        <link rel="stylesheet" href="../css/modal.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

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

			// GET elections associated with user's precinct
			$get_elections = "SELECT e.*, p.*, b.*, r.*, o.* FROM offices as o, election as e, ballot as b, raceballot as rb, races as r, precincts as p
									where p.precinct_id = b.precinct_id
								    and b.ballot_id = rb.ballot_id
								    and rb.race_id = r.race_id
								    and r.election_id = e.election_id
								    and o.office_id = r.office_id
								    and p.precinct_id = '" . $_SESSION["precinct"] . "' GROUP BY e.election_id";

			$res = $con->query($get_elections);
				$current = [];
				$past = [];
				$future = [];
				$i = 0;

			if($res->num_rows > 0){

				while($row = $res->fetch_assoc()){        // Fetch:   $row["voterID"]
					if($row["active"] == 1 && $row["completed"] == 0){
						array_push($current, $row);
					}

					if($row["active"] == 0 && $row["completed"] == 0){
						array_push($future, $row);
					}

					if($row["active"] == 0 && $row["completed"] == 1){
						array_push($past, $row);
					}
				}
			}

		?>

		<div class="container" style="width: 100%">
			<?php include 'navbar-admin.php';?>

			<!-- Greeting placard -->
			<div class="jumbotron">
			  	<h1>Hello <?php echo $_SESSION["full_name"];?></h1>
			  	<p>Check out relevant elections for <?php echo $_SESSION["precinct_name"]; ?> below!</p>
			</div>
			<div>
				<!-- Election Tabs -->
	  			<ul class="nav nav-tabs">
					  	<li class="active" style="width:33%"><a data-toggle="tab" href="#current">Current Elections</a></li>
						<li style="width:33%"><a data-toggle="tab" href="#future">Future Elections</a></li>
						<li style="width:33%"><a data-toggle="tab" href="#past">Past Elections</a></li>
	  			</ul>
	  			<div class="tab-content">
	  				<div id="current" class="tab-pane fade in active">
	  					<div class="list-group">
	  						<?php foreach($current as $c){ ?>
	  							<form action="election.php" method="post">
	  								<input type = "hidden" name="election_id" value= <?php echo '"' . $c["election_id"] . '"'; ?>>
			  						<button type="submit" class="list-group-item">
			  							<span style="float:left"><i>Election ID: 	<?php echo $c["election_id"]; ?></i></span> 
								  		<span style="float:right"><i>Office Title:  <?php echo $c["title"]; ?>      </i></span>
								  	</button>
								  </form>
						  	<?php } ?>
						</div>
	  				</div>
	  				<div id="future"  class="tab-pane fade">
	  					<div class="list-group">
	  						<?php foreach($future as $f){ ?>
	  						<form action="election.php" method="post">
	  							<input type = "hidden" name="election_id" value= <?php echo '"' . $f["election_id"] . '"'; ?>>
		  						<button type="submit" class="list-group-item">
		  							<span style="float:left"><i>Election ID: 	<?php echo $f["election_id"]; ?></i></span> 
							  		<span style="float:right"><i>Office Title:  <?php echo $f["title"]; ?>      </i></span>
							  	</button>
							  </form>
						  	<?php } ?>
						</div>
	  				</div>
	  				<div id="past"    class="tab-pane fade">      					
	  					<div class="list-group">
	  						<?php foreach($past as $p){ ?>
	  						<form action="election.php" method="post">
	  							<input type = "hidden" name="election_id" value= <?php echo '"' . $p["election_id"] . '"'; ?>>
		  						<button type="submit" name="election_id" value=<?php echo '"'.$p["election_id"] . '"'; ?> class="list-group-item">
		  							<span style="float:left"><i>Election ID: 	<?php echo $p["election_id"]; ?></i></span> 
							  		<span style="float:right"><i>Office Title:  <?php echo $p["title"]; ?>      </i></span>
							  	</button>
							  </form>
						  	<?php } ?>
						</div>
					</div>
	  			</div>
		  	</div>
       <!-- Alerts -->
        <?php 
            if(isset($_SESSION["error"])){
                echo "<script type='text/javascript'>alert('" . $_SESSION["error"] . "')</script>";
                unset($_SESSION["error"]);
            }

            if(isset($_SESSION["msg"])){
                echo "<script type='text/javascript'>alert('" . $_SESSION["msg"] . "')</script>";
                unset($_SESSION["msg"]);
            }

        ?>
  		</div>
	</body>

</html>