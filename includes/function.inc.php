
<?php
// empty input fields 
function emptyInputLogin($uname, $password){
	$result;
	
	if(empty($uname) || empty($password)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}






function uidExits($con, $uname){
	$sql = "select * from loginform where username= ?; ";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: login.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $uname);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);

}



///////////
function loginUser($con, $uname, $password){
	$uidExits = uidExits($con, $uname);
	
	if($uidExits === false){
		header("location: login.php?error=wronglogin");
		exit();
	}
	
	
	$pwdHashed = $uidExits['password'];
	$checkpwd = password_verify($password, $pwdHashed);
	
	
	if ($checkpwd === false){
		header("location: login.php?error=wronglogin");
		exit();
	}
	else if ($checkpwd === true){
		session_start();
		$_SESSION["userid"] = $uidExits["Login_id"];
		$_SESSION["useruid"] = $uidExits["username"];
		header("location: cases.php");
		exit();
	}
}


?>