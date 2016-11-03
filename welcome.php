<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'bootstrap.html'; ?>
    	<link rel="stylesheet" type="text/css" href="css/welcome.css" />
        <meta charset="utf-8">
    </head>
    <body>
    	<title>Login to Voter Registration</title>
    	<!-- Login Form -->
    	<?php 

    		if($_SESSION["Exists"] = "true"){
    			header("Location: homepage.php");
    		}
    	?>

    	<!-- Form -->
	    <div>
	    	<div class="panel panel-primary centered">
	    		<div class="panel-heading">
	    			<h1><font color="orange">Voter Registration System -- Login</font></h1>
	    		</div>
	    		<div class="panel-body">
		    		<form>
			    		<div class="login-input">
			    			ID
			    		</div>
			    		<div class="login-input">
			    			Password
			    		</div>
			    	</form>
		    	</div>
		    	<div class="panel-footer">
		    		<div class="login-input">
		    			Forget Password
		    		</div>
		    	</div>
	    	</div>
	    </div>
    </body>
</html>