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

            $search = $_POST["search"];

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

            $search_profiles = "SELECT * FROM users where CAST(id as CHAR) LIKE '%" . $search . "%'";
            $res = $con->query($search_profiles);


        ?>

        <div class="container" style="width: 100%">
            <?php include 'navbar-admin.php';?>

            <div class="jumbotron">
                <h1>Search Results by Catagory</h1>
            </div>

            <ul class="nav nav-tabs">
                    <li class="active" style="width:50%"><a data-toggle="tab" href="#users">Current Elections</a></li>
                    <li style="width:50%"><a data-toggle="tab" href="#elections">Future Elections</a></li>
            </ul>
            <div class="tab-content">
                <div id="users" class="tab-pane fade in active">
                    <div class="list-group">
                        <!-- For each election: -->
                        <?php

                            if($res->num_rows > 0){

                                while($row = $res->fetch_assoc()){
                                    echo '<button type="button" class="list-group-item">' . $row['id'] . "    -    " . $row['full_name'] . '</button>';
                                    
                                }
                            }
                        ?>
                    </div>

                </div>
                <div id="elections"  class="tab-pane fade">
                    <div class="list-group">
                        <!-- For each election: -->
                        <button type="button" class="list-group-item">Cras justo odio</button>
                    </div>
                </div>

            </div>
        </div>
    </body>

</html>