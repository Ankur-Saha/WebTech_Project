<?php

	$host 	= "localhost";
	$dbuser = "root";
	$dbpass	= "";
	$dbname	= "Teacher";

	function dbConnection(){

		global $host;
		global $dbuser;
		global $dbpass;
		global $dbname;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

?>