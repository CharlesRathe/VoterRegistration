<?php

	session_destroy();
	$_SESSION["msg"] = "Successfully logged out";
	header("Location: ../index.php");

?>