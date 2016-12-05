<?php 
session_start();

// 
$num_races = $_POST["num_races"];

for($i = 1; $i<=$num_races; $i++){
	echo $_POST ["race_id_" . ($i-1)];
}

$vote = "INSERT into uservote VALUES"




?>