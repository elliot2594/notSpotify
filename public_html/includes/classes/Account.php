<?php
class Account {
	
	private $con;	
	private $errorArray;

	public function __construct($con) {
		$this->con = $con;
		$this->errorArray = array();
		//echo " Construct called ";
	}
	
	public function login($un, $pw) {
		$pw = md5($pw);
		$query = mysqli_query($this->con, "SELECT * FROM users WHERE username = '$un' AND password = '$pw'");

		if(mysqli_num_rows($query) == 1){
			return true;
		}

		else {
			array_push($this->errorArray, Constants::$userNotFound);
			return;
		}

	}	
	public function register($un, $fn, $sn, $em, $em2, $pw, $pw2){
	//echo " register called ";
		$this->validateUsername($un);
		$this->validateFirstName($fn);
		$this->validateSurname($sn);
		$this->validateEmails($em, $em2);
		$this->validatePasswords($pw, $pw2);

		if(empty($this->errorArray)) {
			//echo " calling insert details $un, $fn, $sn, $pw, $em";
			return $this->insertUserDetails($un, $fn, $sn, $em, $pw);
		}
		else {
			return false;
		}
	}

	public function getError($error) {
		if(!in_array($error, $this->errorArray)) {
			$error= "";
		}
		return "<span class='errorMessage'>$error</span>";
	}

	private function insertUserDetails($un, $fn, $sn, $em, $pw) {
		
		//echo "insert userdetails() ";
		$encryptedPw = md5($pw);
		//$profilePic = "assets/images/profile-pics/default.png";
		$profilePic = 'default Pic';
		$date = date("Y-m-d");
		

		//echo " attempting query";
		$result = mysqli_query($this->con, "INSERT INTO users (username, firstName, surname, email, password, signUpDate, profilePic) VALUES  ('$un', '$fn', '$sn', '$em', '$encryptedPw', '$date', '$profilePic')");
		//echo "$result";

		return $result;
	}
	
	private function validateUsername($un){

		echo "validating username";
		if(strlen($un) > 25 || strlen($un) < 5) {
			array_push($this->errorArray, Constants::$usernameLn);

			return;
		}
		//TODO: check if username exists
		echo "checking username";
		$checkUsername = mysqli_query($this->con, "SELECT username FROM users WHERE username = '$un'");
		//echo "$checkUsername $un";
		if(mysqli_num_rows($checkUsername) != 0){
			array_push($this->errorArray, Constants::$usernameExists);
			return;
		}
		//echo "Username validated"; 
	}


	private function validateFirstName($fn){
		if(strlen($fn) > 25 || strlen($fn) < 2) {
			array_push($this->errorArray, Constants::$firstNameLn);
			return;
		}
		//echo "firstname validated"; 
	}

	private function validateSurname($sn){
		if(strlen($sn) > 25 || strlen($sn) < 2) {
			array_push($this->errorArray, Constants::$surnameLn);
			return;
		}

			//echo "surname validated"; 
	}

	private function validateEmails($em, $em2){
		if($em != $em2){
			array_push($this->errorArray, Constants::$emailMatch);
			return;
		}

		if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
			array_push($this->errorArray, Constants::$emailInvalid);
			return;

		}
				//echo "email validated"; 
			//TODO check if email exists

		$checkEmail = mysqli_query($this->con, "SELECT email From users where email = '$em'");
		if(mysqli_num_rows($checkEmail) != 0){
			array_push($this->errorArray, Constants::$emailExists);
			return;
		}

	}


	private function validatePasswords($pw, $pw2){
			//echo " validate Password() called ";
		if($pw != $pw2){
			array_push($this->errorArray, Constants::$passwordMatch);
			return;
		}
		//TODO Change this to only except strong passwords and hash passwords
		if(preg_match('/[^A-Za-z0-9]/', $pw)){
			array_push($this->errorArray, Constants::$passwordInvalid);
			return;
		}

		if(strlen($pw) < 2 || strlen($pw) > 35){
			array_push($this->errorArray, Constants::$passwordLn);
			return;
		}
		//echo "password validated"; 
	}


}

?>

