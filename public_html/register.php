<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");
$account = new Account($con);
//echo "got con";

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getValue($value){
	if(isset($_POST[$value])){
		echo $_POST[$value];
	}
}
?>

<html>
<head>
	<title>Welcom to notSpotify</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>
	<div id="background">

		<div id="loginContainer">
			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$userNotFound);?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="Enter Username" required>

					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password">
					</p>
					
					<button type="submit" name="loginButton">Log in</button>
				</form>

				<form id="registerForm" action="register.php" method="POST">
					<h2>Create your free account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameLn);
						echo $account->getError(Constants::$usernameExists); ?>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="Username" value="<?php getValue('username');?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$firstNameLn); ?>
						<label for="firstName">First Name</label>
						<input id="firstName" name="firstName" type="text" placeholder="First Name" value="<?php getValue('firstName');?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$surnameLn); ?>
						<label for="surname">Surname</label>
						<input id="surname" name="surname" type="text" placeholder="Surname" value="<?php getValue('surname');?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailMatch);
						echo $account->getError(Constants::$emailInvalid);
						echo $account->getError(Constants::$emailExists);?>
						<label for="email">Email Address</label>
						<input id-"email" name="email" type="email" placeholder="Email" value="<?php getValue('email');?>" required>
					</p>

					<p>
						<label for="email2">Confirm Email</label>
						<input id-"email2" name="email2" type="email" placeholder="Confirm Email" value="<?php getValue('email2');?>" required>
					</p>
					<p>

						<?php echo $account->getError(Constants::$passwordMatch); 
						echo $account->getError(Constants::$passwordInvalid);?>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Password" required>
						<p>

							<p>

								<label for+"password2">Confirm Password</label>
								<input id="password2" name="password2" type="password" placeholder="Confirm Password" required>
							</p>


							<button type="submit" name="registerButton">Sign Up</button>
						</form>

					</div>
				</div>
			</div>	

		</body>
		</html>


