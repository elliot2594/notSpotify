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

							<button class="controlButton previous" title="Shuffle button">		
							<img src="assets/images/icons/previous.png" alt="Shuffle">
							</button>

							<button class="controlButton play" title="Shuffle button">		
							<img src="assets/images/icons/play.png" alt="Shuffle">

						
							</button>

							<button class="controlButton next" title="Shuffle button">		
							<img src="assets/images/icons/next.png" alt="Shuffle">

						
							</button>

							<button class="controlButton repeat" title="Shuffle button">		
							<img src="assets/images/icons/repeat.png" alt="Shuffle">

						
							</button>

							<button class="controlButton playlist" title="Shuffle button">		
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