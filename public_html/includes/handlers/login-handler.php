<?php

if(isset($_POST['loginButton'])) {

	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];


	$result = $account->login($username, $password);

	if($result == true){
		//header("Location: index.php");
		$_SESSION['userLoggedIn'] = $username;
		echo "login worked";
	}
	
}

?>
