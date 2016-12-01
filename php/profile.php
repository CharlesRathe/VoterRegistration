<?php session_start(); ?>
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <!--<link rel="stylesheet" href="css/main.css"> -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
	    
	    // GET user associated with user id
			$get_user = "SELECT u.* FROM users as u
									where u.id = '" . $_SESSION["voterID"] . "'";

			$res = $con->query($get_user);
			    $user_info = [];
			
			if($res->num_rows > 0){
                //output data of each row
				$row = $res->fetch_assoc();
				echo "<table><tr><th>User Info</th></tr>";
				echo "<tr><td>". "Voter ID:" . "</td><td>" . $row["id"] . "</td></tr>";
				echo "<tr><td>". "Full Name:" . "</td><td>" . row["full_name"] . "</td></tr>";
				echo "<tr><td>". "Email:" . "</td><td>" . row["email"] . "</td></tr>";
				echo "<tr><td>". "Password:" . "</td><td>" . row["password"] . "</td></tr>";
				echo "<tr><td>". "License Number:" . "</td><td>" . row["license_nmbr"] . "</td></tr>";
				echo "<tr><td>". "Address:" . "</td><td>" . row["address"] . "</td></tr>";
				echo "<tr><td>". "Zip Code:" . "</td><td>" . row["zipcode"] . "</td></tr>";
				echo "<tr><td>". "State:" . "</td><td>" . row["state"] . "</td></tr>";
				echo "<tr><td>". "Date of Birth:" . "</td><td>" . row["dob"] . "</td></tr>";
				echo "<tr><td>". "Gender:" . "</td><td>" . row["gender"] . "</td></tr>";
				echo "<tr><td>". "Party Affiliation:" . "</td><td>" . row["party_aff"] . "</td></tr>";
				echo "<tr><td>". "SSN:" . "</td><td>" . row["ssn"] . "</td></tr>";
				echo "<tr><td>". "Passport Number:" . "</td><td>" . row["passport_nmbr"] . "</td></tr>";
				
				echo "</table>";
			}
			else {
			    echo "no results";
			}
			
			$con->close();
	    
	    
        
        <!-- Add your site or application content here -->
        <!-- <p>Hello world! This is HTML5 Boilerplate.</p> -->

    </body>
</html>