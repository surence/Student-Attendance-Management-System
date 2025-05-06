<?php
	// session_start();
	// session_unset('admin_id');
	// header('location:index.php');

	session_start();
	unset($_SESSION['admin_id']); // Unset only the 'admin_id' session variable
	session_destroy(); // Optionally, destroy the session as well
	header("Location: index.php"); // Redirect to login page or another page
	exit();