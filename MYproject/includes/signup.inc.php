<?php

if(isset($_POST["signup-submit"])){

	$name = $_POST["name"];
	$email = $_POST["mail"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat=$_POST["pwdrepeat"];

	include_once "dbh.inc.php";
	require_once "functions.inc.php";

	if (emptyInputString($name,$email,$username,$pwd) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invalidUid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidEmail");
		exit();
	}
	if(pwdMatch($pwd,$pwdRepeat) !== false){
	    header("location: ../signup.php?error=passworddontmatch");
	    exit();
	}
    if (uidexists($conn,$username,$email) !== false) {
		header("location: ../signup.php?error=usernameTaken");
		exit();
	}

	creatuser($conn,$name,$email,$username,$pwd);

}
