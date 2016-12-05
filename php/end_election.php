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

$start = "UPDATE `election` SET`active`=0,`completed`=1 WHERE election_id =" . $_POST["election_id"];

echo $start;

$con->query($start);

header("location: homepage.php");

?>