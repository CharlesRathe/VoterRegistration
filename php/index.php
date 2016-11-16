<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'bootstrap.html'; ?>
        <title>Login to Voter Registration</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <!-- If $_SESSION is set, redirect -->
        <!-- If $_COOKIE is set, fill in forms dynamically -->
        <?php 

            if(isset($_SESSION["email"])){
                header("Location: homepage.php");
            }

            if(isset($_COOKIE["email"])){
                $email_fill = $_COOKIE["email"];
                $pwd_fill = $_COOKIE["pwd"];
            }

            else {
                $email_fill = "example@test.com";
                $pwd_fill =  "*********";
            }


        ?>

        <!-- Log in box -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">  <!-- NOTE: This is how bootstrap does layouts -->

                    <!-- Using bootstrap panels -->
                    <div class="panel panel-primary">
                        <!-- Panel Heading -->
                        <div class="panel-heading">
                            <h2>Log in and Vote!</h2>
                        </div>

                        <!-- Panel Body -->
                        <div class="panel-body">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" placeholder=<?php echo $email_fill; ?> class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" placeholder=<?php echo $pwd_fill; ?> class="form-control" id="pwd" name="pwd">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        <!-- Panel Footer -->
                        <div class="panel-footer">
                            <a data-toggle="modal" href="#signup-modal">Sign up!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Signup modal -->
            <div id="signup-modal" class="modal fade bd-example-modal-sm" role="dialogue">
                <div class="modal-dialogue">
                    <div class="modal-content">
                        <div class="myModal">
                            <h1 class="modalTitle">Sign-up!</h1>
                            <br><hr><br>
                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="fn">First Name:</label>
                                    <input type="text" class="form-control" id="fn" name="fn">
                                </div>
                                 <div class="form-group">
                                    <label for="ln">Last Name:</label>
                                    <input type="text" class="form-control" id="ln" name="ln">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" name="pwd">
                                </div>
                                  <div class="form-group">
                                    <label for="ver-pwd">Verify Password:</label>
                                    <input type="password" class="form-control" id="ver-pwd" name="ver-pwd">
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>