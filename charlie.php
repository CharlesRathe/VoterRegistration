<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'bootstrap.html'; ?>
    	<title>Login to Voter Registration</title>
    	<link rel="stylesheet" href="index.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            .container{
                float: left;
                width: 50%;
                margin-left: 25%;
                margin-right: 25%;
                margin-top: 150px;
            }
            .col-lg-4 col-lg-offset-4{
                float: left;
                width: 100%;
            }
            
            .row margin-row {
                float: left;
                width: 100%;
                margin-left:25%;
                margin-right: 25%;
                margin-top: 500px;
            }

            
        </style>
    </head>

    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-lg-offset-3">
    				<div class="panel panel-primary">
    					<div class="panel-heading">
    						<h1>Log in and Vote!</h1>
    					</div>
    					<div class="panel-body">
    						<form action="login.php" method="post">
    							<div class="form-group">
    								<label for="email">Email address:</label>
    								<input type="email" class="form-control" id="email" name="email">
  								</div>
  								<div class="form-group">
								    <label for="pwd">Password:</label>
								    <input type="password" class="form-control" id="pwd" name="pwd">
  								</div>
								<div class="checkbox">
								    <label><input type="checkbox" name="remember"> Remember me</label>
								</div>
  								<button type="submit" class="btn btn-default">Submit</button>
    						</form>
    					</div>
    					<div class="panel-footer">
    						<a data-toggle="modal" href="#signup-modal">Sign up!</a>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- Signup modal -->
    		<div id="signup-modal" class="modal fade bd-example-modal-sm" role="dialogue">
    			<div class="modal-dialogue">
		    		<div class="row">
						<div class="col-lg-6 col-lg-offset-3">
    						<div class="modal-content">
    							<div class="row margin-row">
    								<div class="col-lg-10 col-lg-offset-1">
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
    			</div>
    		</div>
    	</div>
    </body>
</html>