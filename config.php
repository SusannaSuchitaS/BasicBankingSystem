<?php
	
	$username = "root";
	$password = "";
	$server = "localhost";
	$db = "sparks_bank";

	$dbConn = mysqli_connect($server,$username,$password,$db);

	if(!$dbConn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>