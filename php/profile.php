<?php session_start() ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Profile!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/modal.css">
        <link rel="stylesheet" href="../css/election.css">
        <?php include("../html/bootstrap.html"); ?>
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

            if(!isset($_POST["submit"])){
                $get_user_info = "SELECT * FROM users WHERE id = '" . $_SESSION["voterID"] . "'";
                $res = $con->query($get_user_info);
            }
            else{
                $get_user_info = "SELECT * FROM users WHERE id = '" . $_POST["submit"] . "'";
                $res = $con->query($get_user_info);
            }


            $row = $res->fetch_assoc();
            include("navbar-admin.php");
        ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-md.png" alt="" class="img-rounded img-responsive" />
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4>
                                    <?php echo $row["full_name"]; ?></h4>
                                <?php if(isset($_POST["submit"])){ ?>
                                    <small><cite title="Voter ID">Voter ID: &nbsp &nbsp <?php echo $_POST["submit"]; ?>  &nbsp &nbsp <i class="glyphicon glyphicon-tag">
                                <?php } else{ ?>
                                    <small><cite title="Voter ID">Voter ID: &nbsp &nbsp <?php echo $_SESSION["voterID"]; ?>  &nbsp &nbsp <i class="glyphicon glyphicon-tag">
                                <?php } ?>

                                </hr></i></cite></small>
                                <p>
                                    <i class="glyphicon glyphicon-envelope"></i><?php echo $row["email"]; ?>
                                    <br />
                                    <i class="glyphicon glyphicon-map-marker"></i><?php echo $row["address"] . ", " . $row["zipcode"] . " (" . $row["state"] . ")"; ?>
                                    <br />
                                    <i class="glyphicon glyphicon-gift"></i><?php echo $row["dob"]; ?></p>
                                    <?php if($_SESSION["voterID"] == $row["id"]){echo '<i class="glyphicon glyphicon-th"></i>Precinct: ' . $_SESSION["precinct_name"];} ?>
                            </div>
                        </div>
                    </div>
                    <?php if($_SESSION["permissions"] == 1 && $row["permissions"] == 3 ){ ?>
                        <form action="promote.php" method = "post">
                            <input type="hidden" name="id" value= <?php echo '"' . $row["id"] . '"'; ?>>
                            <button class="btn btn-secondary" type="submit" value="Submit">Promote this User!</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>