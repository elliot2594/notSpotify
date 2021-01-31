<?php
	ob_start();
	session_start();
	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("134.209.24.83", "elliot", "B9^&qzHd4@54", "notSpotify");

	if(mysqli_connect_errno()){
		echo "Faied to connect: " . mysqli_connect_errno();
	}
?>
