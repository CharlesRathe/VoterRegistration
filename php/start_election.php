<?php session_start();

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

$start = "UPDATE `election` SET `active` = 1 where `election_id` = " . $_POST["election_id"];
echo $start;

if($con->query($start)){

    $_SESSION["election_id"] = $_POST["election_id"];
    header("location: election.php");
}


else{
    echo $con->errno;
    echo $con->error;
}
?>