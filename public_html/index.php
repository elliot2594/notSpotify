<?php
include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])){
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}


?>

<html>
<head>
	<title>Not Spotify!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>


	<body>
		
		<div id="nowPlayingBarContainer"> 
			<div id="nowPlayingBar"> </div>


		</div>



	</body>

	</html>