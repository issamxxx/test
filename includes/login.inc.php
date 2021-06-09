<?php

if (isset($_POST["login-submit"])) {
	
	$username = $_POST["mailuid"];
	$pwd = $_POST["pwd"];

	require_once "dbh.inc.php";
	require_once "functions.inc.php";

	if (emptyInputStringlogin($username,$pwd) !== false) {
		header("location: ../signin.php?error=emptyinput");
		exit();
	}


	loginuser($conn,$username,$pwd);
}
else{
	header("location: ../signin.php");
	exit;
}