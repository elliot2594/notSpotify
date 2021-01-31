<?php 


//method to strip HTML tags and spaces from a string 
function cleanText($inputText) {
	
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function cleanPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}


if(isset($_POST['registerButton'])){

	//setting user input
	$username = cleanText($_POST['username']);
	$firstName = cleanText($_POST['firstName']);
	$surname = cleanText($_POST['surname']);
	$email = cleanText($_POST['email']);
	$email2 = cleanText($_POST['email2']);
	$password = cleanPassword($_POST['password']);
	$password2 = cleanPassword($_POST['password2']);         
	$firstname = ucfirst(strtolower($firstName));
	$surname = ucfirst(strtolower($surname));

	$wasSuccessful = $account->register($username, $firstName, $surname, $email, $email2, $password, $password2);
	if($wasSuccessful) {
		//header("Location: index.php");
		echo "Was succesfull";
	}
}

?>
