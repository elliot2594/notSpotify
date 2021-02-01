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
			<div id="nowPlayingBar"> 
				<div id="nowPlayingLeft" >
					
				</div>

				<div id="nowplayingMiddle">

					<div class="content playerControls">
						
						<div class="buttons">
							<button class="controlButton shuffle" title="Shuffle button">		
							<img src="assets/images/icons/shuffle.png" alt="Shuffle">

						
							</button>
						</div>

					</div>
					
				</div>

				<div id="nowPlayingRight">
					
				</div>
			</div>
		</div>
	</body>
</html>