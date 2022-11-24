
<?php
if(isset($_POST['signin'])){
	$uname = $_POST['username'];
	$password = $_POST['password'];
	
	require_once 'dbh.inc.php';
	require_once 'function.inc.php';
	
	    
	if (emptyInputLogin($uname, $password) !== false){
		header("location: ../login.php?error=emptyinput");
		exit();
	}

	
	loginUser($con, $uname, $password);
	
}
else{
	header("location: ../login.php");
	exit();
}
?>