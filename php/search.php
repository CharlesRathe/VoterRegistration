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

            $search_elections = "SELECT * FROM election WHERE CAST(election_id as CHAR) LIKE '%" . $search . "%'";
            $res2 = $con->query($search_elections);

        ?>

        <div class="container" style="width: 100%">
            <?php include 'navbar-admin.php';?>

            <div class="jumbotron">
                <h1>Search Results by Catagory</h1>
            </div>

            <ul class="nav nav-tabs">
                    <li class="active" style="width:50%"><a data-toggle="tab" href="#users">Matching Voter IDs</a></li>
                    <li style="width:50%"><a data-toggle="tab" href="#elections">Matching Election IDs</a></li>
            </ul>
            <div class="tab-content">
                <div id="users" class="tab-pane fade in active">
                    <div class="list-group">
                        <form action="profile.php" method="post">
                        <!-- For each election: -->
                        <?php

                            if($res->num_rows > 0){

                                while($row = $res->fetch_assoc()){ ?>
                                    <div class="form-group"> <?php
                                    echo '<button type="submit" name="submit" value=' . $row["id"] .' class="list-group-item">Voter ID: ' . $row['id'] . "    -    Name: " . $row['full_name'] . '</button>'; ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </form>
                    </div>

                </div>
                <div id="elections"  class="tab-pane fade">
                    <div class="list-group">
                        <!-- For each election: -->
                        <form action="election.php" method="post">
                            <?php if($res2->num_rows > 0){
                                while($row2 = $res2->fetch_assoc()){ 
                                    echo '<button type="submit" value="' . $row2["election_id"] .'" name="election_id" class="list-group-item">Election ID: ' . $row2['election_id'] . "    -    Date: " . $row2['date'] . '</button>';
                                }
                            } ?>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </body>

</html>