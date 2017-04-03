<?php
	require 'db.php';

	if(isset($_SESSION['logged_user']))
		unset($_SESSION['logged_user']);
	else if(isset($_SESSION['logged_admin']))
		unset($_SESSION['logged_admin']);
	header("Location: admin_login.php");
?>
