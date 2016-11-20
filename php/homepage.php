<?php session_start() ?>

<!DOCTYPE html>
<html>
	<head>
        <?php include '../html/bootstrap.html'; ?>
        <title>Voter Registration Homepage</title>
        <link rel="stylesheet" href="../css/homepage.css" type="text/css">
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

			// GET CURRENT ELECTIONS FROM THIS PRECINCT (In array)
			// GET PAST ELECTIONS FROM THIS PRECINCT (HOW LONG?) (In array)
			// GET ELECTIONS NOT YET STARTED FORM THIS PRECINCT (In array)
		?>

		<div class="container" style="width: 100%">
			<?php include 'navbar-admin.php';?>


		<div class="jumbotron">
		  	<h1>Hello <?php echo $_SESSION["full_name"];?></h1>
		  	<p>Check out relevant elections for <?php echo $_SESSION["precinct_name"]; ?> below!</p>
		</div>

  			<ul class="nav nav-tabs">
				  	<li class="active" style="width:33%"><a data-toggle="tab" href="#current">Current Elections</a></li>
					<li style="width:33%"><a data-toggle="tab" href="#future">Future Elections</a></li>
					<li style="width:33%"><a data-toggle="tab" href="#past">Past Elections</a></li>
  			</ul>
  			<div class="tab-content">
  				<div id="current" class="tab-pane fade in active">
  					<div class="list-group">
  						<!-- For each election: -->
					  	<button type="button" class="list-group-item">Cras justo odio</button>
					</div>

  				</div>
  				<div id="future"  class="tab-pane fade">
  					<div class="list-group">
  						<!-- For each election: -->
					  	<button type="button" class="list-group-item">Cras justo odio</button>
					</div>
  				</div>
  				<div id="past"    class="tab-pane fade">      					
  					<div class="list-group">
  						<!-- For each election: -->
					  	<button type="button" class="list-group-item">Cras justo odio</button>
					</div>
				</div>
  			</div>
  		</div>
	</body>

</html>