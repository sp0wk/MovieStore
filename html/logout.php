<?php	
	if (isset($_GET['action']) AND $_GET['action'] == "logout") {
		session_start();
		if (isset($_SESSION['username'])) {
			session_unset();
            session_destroy();
		}
	}

	header("Location: /site");
  	exit;
?>