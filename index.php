<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'html/bootstrap.html'; ?>
        <title>Login to Voter Registration</title>
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <!-- If $_SESSION is set, redirect -->
        <?php 

            // if(isset($_SESSION["email"])){
            //     header("Location: homepage.php");
            // }

            $email_fill = "example@test.com";
            $pwd_fill =  "*********";


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
                            <form action="php/login.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" required="required" placeholder=<?php echo $email_fill; ?> class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" required="requried" placeholder=<?php echo $pwd_fill; ?> class="form-control" id="pwd" name="pwd">
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
                            <hr>
                            <form action="php/signup.php" method="post">
                                <div class="form-group required">
                                    <label for="fn">First Name</label>
                                    <input type="text" class="form-control" id="fn" name="fn">
                                </div>
                                 <div class="form-group required">
                                    <label for="ln">Last Name</label>
                                    <input type="text" class="form-control" id="ln" name="ln">
                                </div>
                                <div class="form-group required">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group required">
                                    <label for="pwd">Password</label>
                                    <input type="password" class="form-control" id="pwd" name="pwd">
                                </div>
                                  <div class="form-group required">
                                    <label for="ver-pwd">Verify Password</label>
                                    <input type="password" class="form-control" id="ver-pwd" name="ver-pwd">
                                </div>
                                <div class="form-group required">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob">
                                </div>
                                <div class="form-group required">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group required">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" name="state">
                                </div>
                                <div class="form-group required">
                                    <label for="zip">Zipcode</label>
                                    <input type="text" class="form-control" id="zip" name="zip">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="idt">Identification Type</label>
                                    <select class="form-control" id="idt" name="idt">
                                        <option value="ssn">SSN</option>
                                        <option value="ppt">Passport</option>
                                        <option value="lic">Driver's License #</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="idn">ID #</label>
                                    <input type="text" class="form-control" id="idn" name="idn">
                                </div>
                                <hr>
                                <div class="form-group short">
                                    <label for="gen">Gender</label>
                                    <select class="form-control" id="gen" name="gen">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                        <option value="O">Prefer not to answer/Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="aff">Party Affiliation (if any)</label>
                                    <select class="form-control" id="aff" name="aff">
                                        <option value="dem">Democrat</option>
                                        <option value="rep">Republican</option>
                                        <option value="grn">Green Party</option>
                                        <option value="lmn">Legalize Marijuana Now</option>
                                        <option value="lib">Libertarian</option>
                                        <option value="non">None</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <hr>
                                <div style="color:red"> * - required field </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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