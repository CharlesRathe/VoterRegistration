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

    // Get next election id
    $get_max_election = "SELECT max(election_id) as max FROM election";

    $res = $con->query($get_max_election);
    $row = $res->fetch_assoc();
    $max_e_id = $row["max"] + 1;

    // Insert election

    $insert_election = "INSERT INTO `election`(`election_id`, `date`, `active`, `completed`,`election_level`) VALUES (" . $max_e_id . ",'" . $_POST["start"] . "',0,0, '" . $_POST["level"] ."')";
    if($res = $con->query($insert_election)){

        for($i = 1; $i <= $_POST["num_races"]; $i++){

            // Insert Office
            $get_max_office = "SELECT max(office_id) as max FROM offices";

            $res = $con->query($get_max_office);
            $row = $res->fetch_assoc();
            $max_o_id = $row["max"] + 1;

            $insert_offices = "INSERT INTO `offices`(`office_id`, `title`, `term_length`, `max_terms`) VALUES (" . $max_o_id . ",'" . $_POST[("office_" . $i)] . "'," . $_POST[("office_term_" . $i)] . "," . $_POST[("office_length_" . $i)] . ")";
            echo $insert_offices;
            if($res = $con->query($insert_offices)){
                // Insert Races
                $get_max_race = "SELECT max(race_id) as max FROM races";

                $res = $con->query($get_max_race);
                $row = $res->fetch_assoc();
                $max_r_id = $row["max"] + 1;

                $insert_races = "INSERT INTO `races`(`race_id`, `num_candidates`, `election_id`, `office_id`, `race_description`) VALUES (
                        " . $max_r_id . "," . $_POST["num_can_" . $i] . "," . $max_e_id . "," . $max_o_id . ",'" . $_POST["race_description_" . $i] . "')";
                
                if($res = $con->query($insert_races)){
                    $_SESSION["election_id"] = $max_e_id;
                    header("location: election.php");
                }

                else{
                    echo "RACE INSERT FAILED";
                    printf("Error message: %s", $con->error);
                }
            }

            else{
                echo "OFFICE INSERT FAILED";
                printf("Error message: %s", $con->error);
            }
        }
    }

    else{
        printf("Error message: %s", $con->error);
        echo "ELECTION INSERT FAILED";
    }
?>