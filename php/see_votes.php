<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Create Election</title>
        <meta name="description" content="Create an election for people to vote in!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include("../html/bootstrap.html");?>
        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/modal.css">
        <link rel="stylesheet" href="../css/election.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            include("navbar-admin.php");
            if(!isset($_POST["election_id"])){
                $_POST["election_id"] = $_SESSION["election_id"];
                unset($_SESSION["election_id"]);
            }

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

            // Get Race info
            $get_races = "SELECT r.* FROM races as r, election as e where r.election_id = e.election_id and e.election_id = " . $_POST["election_id"];
            $res_race = $con->query($get_races);
            $races = [];
            // Push all race ID's onto race array
            while($row = $res_race->fetch_assoc()){
                array_push($races, $row["race_id"]);
            }

            // Prep candidates call
            $get_race_candidates = "SELECT c.*, o.*, r.* FROM candidates as c, racecandidate as rc, races as r, offices as o where
                                        r.race_id = rc.race_id and r.office_id = o.office_id and c.candidate_id = rc.candidate_id and r.race_id = '";
        ?>

        <div class="container">
            <div class="col-lg-10 col-lg-offset-1" style="text-align:center">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Election Info</h2>
                    </div>
                    <div class="panel-body">
                        <!-- Election Info -->

                        <!-- Race tabs -->
                        <div class="myModal">
                            <!-- Tab headers -->
                            <ul class="nav nav-tabs">
                                <?php foreach($races as $race){ ?>
                                    <li <?php if($race == $races[0]){echo ' class="active"';} ?>><a data-toggle="tab" href=<?php echo '"#tab_' . $race . '"'; ?>>Race <?php echo $race ?></a></li>
                                <?php } ?>
                            </ul>
                            <!-- Tab Content -->
                            <div class="tab-content">
                                <br>
                                <?php foreach($races as $race){ 

                                    // For each race, get candidates
                                    $res = $con->query($get_race_candidates . $race . "'");
                                    $candidates = [];
                                    while($row = $res->fetch_assoc()){
                                        array_push($candidates, $row["candidate_id"]);
                                    }

                                    echo '<div id="tab_' . $race . '" class="tab-pane fade in'; if($race == $races[0]){echo ' active"';} else{echo '"';}?> >
                                    <?php echo "Candidates for race " . $race;
                                    foreach($candidates as $candidate){ 
                                    	$get_candidate_results = "SELECT count(users_id) as count FROM uservote where candidate_id = " . $candidate;
                                    	$res = mysqli_query($con, $get_candidate_results);
                                    	$row = $res->fetch_assoc();
                                    	$count = $row["count"];
                                    	$get_candidate_name = "SELECT * from candidates where candidate_id = " . $candidate;
                        
                                    	$res2 = mysqli_query($con, $get_candidate_name);
                                    	$row2 = $res2->fetch_assoc();

                                    	?>
                      					<li class="list-group-item"><?php echo $row2["candidate_name"] . ": " . $count;?></li>
                     				<?php } 
                     			}?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
