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

    $type = $_POST["type"];
    $election = $_POST["election"];
    $race = $_POST["race"];

    if($type == "nat"){

        $all_pr = "SELECT * from precincts";
        $res_all = mysqli_query($con, $all_pr);
        while($row = $res_all->fetch_assoc()){

                $get_max_ballot = "SELECT max(ballot_id) as max FROM ballot";
                $res2 = $con->query($get_max_ballot);

                $row2 = $res2->fetch_assoc();

                $max_ballot = $row2["max"] + 1;

            $sql = "INSERT INTO `ballot`(`ballot_id`, `precinct_id`) VALUES (" . $max_ballot . "," . $row["precinct_id"] . ")";
            if($res = $con->query($sql)){

                $get_max_rb = "SELECT max(race_ballot_id) as max FROM raceballot";
                $res = $con->query($get_max_rb);
                $row3 = $res->fetch_assoc();
                $max_ballot_rb = $row3["max"] + 1;

                $insert_rb = "INSERT into raceballot (`race_id`, `race_ballot_id`, `ballot_id`) VALUES (" . $race . ", " . $max_ballot_rb . ", " . $max_ballot .")";

                if($res = $con->query($insert_rb)){
                    $_SESSION["msg"] = "Successfully added all precincts";
                    $_SESSION["election_id"] = $election;
                    header("Location: election.php");
                }
                else{
                    $_SESSION["election_id"] = $election;
                    $_SESSION["error"] = $con->error;
                    header("Location: election.php");
                }

            }

            else{
                $_SESSION["election_id"] = $election;
                $_SESSION["error"] = $con->error;
                header("Location: election.php");
            }
        }
    }

    elseif($type == "sta"){
        $select_state = "SELECT * from precincts where state='" . $_POST["state"] . "'";
        $res_state = mysqli_query($con, $select_state);
        while($new_row = $res_state->fetch_assoc()){

            $get_max_ballot = "SELECT max(ballot_id) as max FROM ballot";
            $res2 = $con->query($get_max_ballot);

            $row2 = $res2->fetch_assoc();

            $max_ballot = $row2["max"] + 1;

            $sql = "INSERT INTO `ballot`(`ballot_id`, `precinct_id`) VALUES (" . $max_ballot . "," . $new_row["precinct_id"] . ")";

            if($con->query($sql)){

                $get_max_rb = "SELECT max(race_ballot_id) as max FROM raceballot";
                $res3 = $con->query($get_max_rb);
                $row3 = $res3->fetch_assoc();
                $max_ballot_rb = $row3["max"] + 1;

                $insert_rb = "INSERT into raceballot (`race_id`, `race_ballot_id`, `ballot_id`) VALUES (" . $race . ", " . $max_ballot_rb . ", " . $max_ballot .")";
                if($res = $con->query($insert_rb)){
                    $_SESSION["msg"] = "Successfully added all precincts";
                    $_SESSION["election_id"] = $election;
                    header("Location: election.php");
                }
                else{
                    $_SESSION["error"] = $con->error;
                    $_SESSION["election_id"] = $election;
                    header("Location: election.php");
                }
            }  

            else{
                $_SESSION["election_id"] = $election;
                $_SESSION["error"] = $con->error;
                header("Location: election.php");
            } 

        }
    
    }

    elseif($type == "loc"){
            $get_max_ballot = "SELECT max(ballot_id) as max FROM ballot";
            $res = mysqli_query($con, $get_max_ballot);

            $row = $res->fetch_assoc();

            $max_ballot = $row["max"] + 1;

            $sql = "INSERT INTO `ballot`(`ballot_id`, `precinct_id`) VALUES (" . $max_ballot . "," . $_POST["local"] . ")";
            if($con->query($sql)){


                $get_max_rb = "SELECT max(race_ballot_id) as max FROM raceballot";
                $res = $con->query($get_max_rb);
                $row3 = $res->fetch_assoc();
                $max_ballot_rb = $row3["max"] + 1;

                $insert_rb = "INSERT into raceballot (`race_id`, `race_ballot_id`, `ballot_id`) VALUES (" . $race . ", " . $max_ballot_rb . ", " . $max_ballot .")";
                if($res = $con->query($insert_rb)){
                    $_SESSION["msg"] = "Successfully added all precincts";
                    $_SESSION["election_id"] = $election;
                    header("Location: election.php");
                }
                else{
                    $_SESSION["error"] = $res->error;
                    $_SESSION["election_id"] = $election;
                    header("Location: election.php");
                }
            }  

            else{
                $_SESSION["election_id"] = $election;
                $_SESSION["error"] = $res->error;
                header("Location: election.php");
            } 
    }




?>