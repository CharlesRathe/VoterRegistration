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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("navbar-admin.php");?>

        <div class="container">
            <div class="col-lg-10 col-lg-offset-1" style="text-align:center">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Add Election/Race Details</h2>
                    </div>
                    <div class="panel-body">
                        <form action="create_sql.php" method="post">
                            <div class="form-group">
                                <label for="start">Election Start Date: </label>
                                <input class="form-control" type="date" name="start" id="start">    
                            </div>
                            <div class="form-group">
                                <label for= "level">Election Level: </label>
                                <select class ="form-control" name="level" id="level">
                                    <option value="sta">State</option>
                                    <option value="nat">National</option> 
                                    <option value="loc">Local</option>
                                </select>   
                            </div>
                
                            <div class="myModal">
                                <ul class="nav nav-tabs">
                                    <?php for($x = 0; $x<$_POST["num_races"]; $x++){ ?>
                                        <li <?php if($x == 0){echo ' class="active"';} ?>><a data-toggle="tab" href=<?php echo '"#tab_' . ($x+1) . '"'; ?>>Race <?php echo ($x+1) ?></a></li>
                                    <?php } ?>
                                </ul>
                                <div class="tab-content">
                                    <br>
                                    <?php for($y = 0; $y<$_POST["num_races"]; $y++){ ?>
                                        <?php echo '<div id="tab_' . ($y+1) . '" class="tab-pane fade in'; if($y ==0){echo ' active"';} else{echo '"';}?> >
                                            <div class="form-group">
                                                <div class="office">
                                                    <label for= <?php echo '"office_' . ($y+1) . '"' ?> > Office Title: </label>
                                                    <input class ="form-control" type="text" name=<?php echo '"office_' . ($y+1) . '"' ?>> 
                                                </div>
                                                <br>
                                                <div class="office">
                                                    <span><label for= <?php echo '"office_term_' . ($y+1) . '"' ?>> Office Term Length (0 for unlimited): </label></span>
                                                    <span><input class ="form-control" type="number" name=<?php echo '"office_term_' . ($y+1) . '"' ?>> </span>
                                                </div>
                                                <br>
                                                <div class="office">
                                                    <label for= <?php echo '"office_length_' . ($y+1) . '"' ?>> Office Max Terms (0 for unlimited): </label>
                                                    <input class ="form-control" type="number" name=<?php echo '"office_length_' . ($y+1) . '"' ?>> 
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for= <?php echo '"race_description_' . ($y+1) . '"' ?> >Race Description: </label>
                                                <input class ="form-control" type="text" name=<?php echo '"race_description_' . ($y+1) . '"' ?>>    
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for= <?php echo '"num_can_' . ($y+1) . '"' ?> >Number of Candidates: </label>
                                                <input class ="form-control" type="number" name=<?php echo '"num_can_' . ($y+1) . '"' ?>> 
                                            </div>
                                            <input type="hidden" name="num_races" value=<?php echo '"' . $_POST["num_races"] . '"'; ?>>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" value="Submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>