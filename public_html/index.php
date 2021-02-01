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
	<div id="mainContainer">
		<div id="topContainer">

			<div id="navBarContainer">
				<nav  class="navBar">
					<a href="index.php" class="logo">
						<img src="assets/images/logo.png">
					</a>

				</nav>
				

			</div>
			

		</div>



		<div id="nowPlayingBarContainer"> 
			<div id="nowPlayingBar"> 
				<div id="nowPlayingLeft" >
					<div class="content">
						<span class="albumLink">
							<img src="assets/images/album-covers/dsotm.jpg" class="albumArtwork">
						</span>
						<div class="trackInfo">
							<span class="trackName">
								<span>Test Track Name</span>
							</span>
							<span class="artistName">
								<span>Test Artist Name</span>
							</span>
						</div>
					</div>
				</div>

				<div id="nowplayingMiddle">

					<div class="content playerControls">

						<div class="buttons">
							<button class="controlButton shuffle" title="Shuffle button">		
								<img src="assets/images/icons/shuffle.png" alt="Shuffle">


							</button>

							<button class="controlButton previous" title="previous button">		
								<img src="assets/images/icons/previous.png" alt="Previous">
							</button>

							<button class="controlButton play" title="Play button">		
								<img src="assets/images/icons/play.png" alt="Play">
							</button>

							<button class="controlButton pause" title="Pause button" style="display: none;">		
								<img src="assets/images/icons/pause.png" alt="Pause" >
							</button>

							<button class="controlButton next" title="Next button">		
								<img src="assets/images/icons/next.png" alt="Next">
							</button>

							<button class="controlButton repeat" title="Repeat button">		
								<img src="assets/images/icons/repeat.png" alt="Repeat">							
							</button>

							<button class="controlButton playlist" title="Playlist button">		
								<img src="assets/images/icons/shuffle.png" alt="Playlist">
							</button>
						</div>

						<div class="playBackBar"> 

							<span class="progressTime current">0.00</span>
							<div class="progressBar">
								<div class="progressBarBg">
									<div class="prgress"></div>
								</div>


							</div>
							<span class="progressTime remaining">0.00</span>

						</div>

					</div>

				</div>

				<div id="nowPlayingRight">

					<div class="volumeBar"> 
						<button class="controlButton volume" title="Volume button"> <img src="assets/images/icons/volume.png" alt="Volume"></button>

						<div class="progressBar">
							<div class="progressBarBg">
								<div class="prgress"></div>
							</div>


						</div>

					</div>

				</div>
			</div>
		</div>
		<div>
		</body>
		</html>