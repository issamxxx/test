<?php
function emptyInputString($name,$email,$username,$pwd){

	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd)) {
		$result= true;
	}
   else {
   $result=false;
   }
   return $result;
}

function invalidUid($username){

	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		$result= true;
	}
   else {
   $result=false;
   }
   return $result;
}
function invalidEmail($email){

	$result;
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$result= true;
	}
   else {
   $result=false;
   }
   return $result;
}
function pwdMatch($pwd,$pwdRepeat) {
  $result;
  if($pwd!==$pwdRepeat){
    $result=true;
  }else{
    $result=false;
  }
  return $result;
}

function uidexists($conn,$username,$email){
	$sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt,"ss",$username,$email);
	mysqli_stmt_execute($stmt);

	$resultdata = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultdata)) {
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}
function creatuser($conn,$name,$email,$username,$pwd){
	$sql = "INSERT INTO users (userName,userEmail,userUid,userPwd) VALUES (?,?,?,?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	$hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedPwd);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	header("location: ../signin.php?error=none");
	}

	function emptyInputStringlogin($username,$pwd){

		$result;
		if (empty($username) || empty($pwd)) {
		$result= true;
		}
   		else {
   		$result=false;
   		}
   		return $result;

	}


	function loginuser($conn,$username,$pwd){
		$uidexists = uidexists($conn,$username,$username);

		if ($uidexists === false) {
			header("location: ../signin.php?error=wronglogin");
		exit();
		}

		$pwdhashed = $uidexists["userPwd"];
		$checkpwd = password_verify($pwd, $pwdhashed);

		 if ($checkpwd === false) {
		 	header("location: ../signin.php?error=wronglogin");
		exit();
		 }
		 else if($checkpwd === true){
		 	session_start();
		 	$_SESSION['userId'] = $uidexists['userId'];
		 	$_SESSION['userUid'] = $uidexists['userUid'];
		 	header("location: ../appinterface/index.php");
		 	exit();
		 }

	}
