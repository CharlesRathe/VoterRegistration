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

            $voted = "SELECT * FROM uservote as uv, ballot as b, raceballot as rb, races as r where uv.users_id = " . $_SESSION["voterID"] . " and b.ballot_id = uv.ballot_id and rb.ballot_id = b.ballot_id and rb.race_id = r.race_id and r.election_id = " . $_POST["election_id"];
            $vote_res = mysqli_query($con, $voted);
            if($vote_res->num_rows == 0){
                $has_voted = 0;
            }

            else{
                $has_voted = 1;
            }
            $races = [];

            // Get election info
            $get_election_info = "SELECT * FROM election where election_id = " . $_POST["election_id"];
            $res = $con->query($get_election_info);
            $row = $res->fetch_assoc();
            if($row["election_level"] == 'nat'){
                $level = 1;
            }
            if($row["election_level"] == 'sta'){
                $level = 2;
            }
            if($row["election_level"] == 'loc'){
                $level = 3;
            }

            // Get election status                            
            if($row["active"] == 1 && $row["completed"] == 0){
                $status = "open";
            }
            elseif($row["active"] == 0 && $row["completed"] == 1){
                $status = "completed";
            }
            elseif($row["active"] == 0 && $row["completed"] == 0){
                $status = "not started";
            }

            // Get Race info
            $get_races = "SELECT r.*, o.* FROM races as r, election as e, offices as o where r.election_id = e.election_id and o.office_id = r.office_id and e.election_id = " . $_POST["election_id"];

            $res_race = $con->query($get_races);
            $race_num = $res_race->num_rows;

            // Push all race ID's onto race array
            while($row = $res_race->fetch_assoc()){
                $race_id = $row["race_id"];
                $num_can = $row["num_candidates"];
                $office = $row["title"];
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
                            <div class="election">
                                <p>
                                Election ID: <?php echo $_POST["election_id"]; ?></p>
                                <hr>
                                This election is <?php echo $status; ?></p>
                            </div>

                            <!-- Race tabs -->
                            <div class="myModal">
                                <!-- Tab headers -->
                                <ul class="nav nav-tabs">
                                    <?php foreach($races as $race){ ?>
                                        <li <?php if($race == $races[0]){echo ' class="active"';} ?>><a data-toggle="tab" href=<?php echo '"#tab_' . $race . '"'; ?>>Race <?php echo $race ?></a></li>
                                    <?php } ?>
                                </ul>
                                <!-- Tab Content -->
                                <form action="vote.php" method = "post">
                                    <div class="tab-content">
                                        <br>
                                        <?php if($status == "open"){ ?>
                                            <?php foreach($races as $race){ 

                                                // For each race, get candidates
                                                $res = $con->query($get_race_candidates . $race . "'");
                                                $candidates = [];
                                                while($row = $res->fetch_assoc()){
                                                    array_push($candidates, $row["candidate_name"]);
                                                }

                                                echo '<div id="tab_' . $race . '" class="tab-pane fade in'; if($race == $races[0]){echo ' active"';} else{echo '"';}?> >
                                                    <?php echo $office; ?>
                                                    <?php echo "Candidates: <hr>" ;

                                                        foreach($candidates as $candidate){
                                                            if($num_can > 1){ 
                                                                if ($status =="open"){ ?>
                                    
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="num_races" value=<?php echo '"' . $race_num . '"'; ?>>
                                                                        <input type="hidden" name="election_id" value=<?php echo $_POST["election_id"]; ?>>
                                                                        <input type="hidden" name=<?php echo '"race_id_' . array_search($race, $races)  . '"'; ?> value=<?php echo $race; ?>>
                                                                        <input type="radio" name=<?php echo '"candidates[' . $race . ']"'; ?> value= <?php echo '"' . $candidate . '"'; ?>><?php echo $candidate; ?><br>
                                                                        <?php $query = "SELECT * from candidates where candidate_name = '" . $candidate . "'";
                                                         
                                                                        $res4 = mysqli_query($con, $query);
                                                                        $row4 = $res4->fetch_assoc();
                                                                        echo '<br>';
                                                                        echo $row4["candidate_state"];
                                                                        echo '<br>';
                                                                        echo $row4["candidate_bio"];
                                                                        ?>
                                                                    </div>
                                                                    <hr>
                                                               <?php }
                                                                else{ ?>
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="num_races" value=<?php echo '"' . $race_num . '"'; ?>>
                                                                        <input type="hidden" name="election_id" value=<?php echo $_POST["election_id"]; ?>>
                                                                        <input type="radio" name=<?php echo '"candidates[' . $race . ']"'; ?> value=<?php echo '"' . $candidate . '"'; ?>><?php echo $candidate; ?><br>

                                                                    </div>
                                                               <?php }
                                                            }    
                                                        }

                                                     ?>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php if ($status =="open" && $_SESSION["permissions"] == 3 && $_SESSION["valid"] && !$has_voted){ ?>
                                            <button class="btn btn-primary" type="submit" value="Submit">Vote!</button>
                                        <?php } ?>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <br>
                            <?php if($_SESSION["permissions"] < 3){ ?>
                                <form action="delete_election.php" method="post">
                                    <input type="hidden" name="election_id" value= <?php echo $_POST["election_id"]; ?>>
                                    <button class="btn btn-danger" type="submit" value="Submit">Delete Election</button>
                                </form>
                                <?php }?>
                                <br>
                                <?php if($status == "not started" && $_SESSION["permissions"] < 3){ ?>
                                    <form action="start_election.php" method="post">
                                        <input type="hidden" name="election_id" value= <?php echo $_POST["election_id"]; ?>>
                                        <button class="btn btn-success" type="submit" value="Submit">Start Election</button>
                                    </form>
                                <?php } 
                                elseif($status == "open" && $_SESSION["permissions"] < 3){ ?>
                                    <hr>
                                    <form action="end_election.php" method="post">
                                        <input type="hidden" name="election_id" value= <?php echo $_POST["election_id"]; ?>>
                                        <button class="btn btn-warning" type="submit" value="Submit">End Election</button>
                                    </form>
                                <?php } 
                                elseif($status == "completed"){ ?>
                                    <form action="see_votes.php" method="post">
                                        <input type="hidden" name="election_id" value=<?php echo $_POST["election_id"]; ?>>
                                        <button class="btn btn-success" type="submit" value="Submit">See Results</button>
                                    </form>
                              <?php  }

                                if($_SESSION["permissions"] < 3){
                                ?>
                                    <hr>
                                    <button data-toggle="modal" href="#addPrecinct">Add Precincts</button>
                                    <br><br>
                                    <button data-toggle="modal" href="#addCandidate">Add Candidate</button>
                               <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Precinct Modal -->
            <div id="addPrecinct" class="modal fade bd-example-modal-sm" role="dialogue">
                <div class="modal-dialogue">
                    <div class="modal-content">
                        <div class="myModal">
                            <h1 class="modalTitle">Select options for precinct to add</h1>
                            <hr>
                            <form action = "add_precincts.php" method="post">
                                <input type="hidden" name="election" value=<?php echo '"' . $_POST["election_id"] . '"';?>>
                                <label for="select-race">Choose a race to add precinct!</label>
                                <select name="race" class="form-control" id="select-race">
                                    <?php foreach($races as $race){
                                        echo '<option value="' . $race . '">' . $race . '</option>'; 
                                    } ?>
                                </select>
                                <hr>
                                <?php if($level == 1){ ?>
                                    <input type="hidden" name="type" value="nat">
                                    <select name="country" class='form-control' id="select">
                                        <option value="US">US</option>
                                    </select>
                                <?php } elseif($level == 2){ ?>
                                    <input type="hidden" name="type" value="sta">
                                    <select name="state" class="form-control" id="state-select">
                                        <option value="IA">IA</option>
                                        <option value="MN">MN</option>
                                        <option value="NE">NE</option>
                                    </select>
                                <?php } elseif($level == 3){ ?>
                                    <input type="hidden" name="type" value="loc">
                                    <select name="local" class="form-control" id="local-select">
                                        <?php $get_local = "SELECT * FROM precincts";
                                        $res = $con->query($get_local);
                                        while($row= $res->fetch_assoc()){ ?>
                                            <option value=<?php echo '"' . $row["precinct_id"] . '"';?>><?php echo $row["precinct_id"] . '(' . $row["precinct_name"] . ')'; ?></option>
                                       <?php }
                                    }
                                    ?>
                                </select>
                                <hr>
                                <button class="btn btn-warning" type="submit" value="Submit">Add Precinct</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Candidate Modal -->
            <div id="addCandidate" class="modal fade bd-example-modal-sm" role="dialogue">
                <div class="modal-dialogue">
                    <div class="modal-content">
                        <div class="myModal">
                            <h1 class="modalTitle">Select options for candidate to add</h1>
                            <hr>
                            <form action = "add_candidate.php" method="post">
                                <input type="hidden" name="election" value=<?php echo '"' . $_POST["election_id"] . '"';?>>
                                <label for="select">Choose a race to add candidate!</label>
                                <select name="race" class="form-control" id="select">
                                    <?php foreach($races as $race){
                                        echo '<option value="' . $race . '">' . $race . '</option>'; 
                                    } ?>
                                </select>
   
                                <select name="candidate" class="form-control" id="candidate-select">
                                    <option value="new">New Candidate...</option>
                                    <?php $get_cans = "SELECT * FROM candidates";
                                        $res = $con->query($get_cans);
                                        while($row= $res->fetch_assoc()){ ?>
                                            <?php echo '<option value="' . $row["candidate_name"] . '">' . $row["candidate_name"] . '(' . $row["candidate_state"] . ')</option>'; ?>
                                    <?php }
                                ?>
                                </select>
                                <button class="btn btn-warning" type="submit" value="Submit">Add Candidate</button>
                            </form>
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


    </body>
</html>
