<?php
	$login = $_POST['login'];

	 // connect to db
    $con = mysqli_connect("localhost", "just_user", "1234", "moviesdb");
	if ($con == FALSE) {
		 die("cannot connect to DB");
	}
 	
 	// check if login exist
    $result = mysqli_query($con, "SELECT userid FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['userid'])) {
    	echo "exist";
    }
    else {
    	echo "available";
    }
?>