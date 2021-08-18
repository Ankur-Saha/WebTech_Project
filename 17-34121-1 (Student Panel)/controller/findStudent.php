<?php

require_once '../model/model.php';

if (isset($_POST['findStudent'])) {
	
		echo $_POST['email'];

    try {
    	
    	$searchResult = searchUser($_POST['email'])[0];
		print_r($searchResult);
    	$showSearchResult = true;
		require_once '../profile.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

if (isset($_POST['refreshSearch'])) {
	header("Refresh:0");
}

