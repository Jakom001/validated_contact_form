<?php

//define a variable and set to empty values
$name_error = $email_error = $phone_error = $url_error="";
$name = $email = $phone = $message = $url = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST['name'])){
		$name_error ="**Name is required";
	}else{
		$name = test_input($_POST['name']);
		//check if name contain only letters and whitespace
		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
			$name_error ="only letters and whitespace allowed";
		}
	}
	if(empty($_POST['email'])){
		$email_error ="**Email is required";
	}else{
		$email = test_input($_POST['email']);
		//check if email address is valid
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_error ="mmmh! Please enter a valid email";
		}
	}
	if(empty($_POST["phone"])){
		$phone_error ="**Phone no is required";
	}else{
		$phone = test_input($_POST['phone']);
		//check if the phone number is valid
		if(!preg_match("/^(\d[\s=]?)?[\(\[\s=]{0,2}?\d{3}[\)\]\s=]{0,2}?\d{3}[\s=]?\d{4}$/i",$phone)){
			$phone_error ="mmmh! Plz type a valid Phone number";
		}
	}
	if(empty($_POST['url'])){
		$name_error ="**url is required";
	}else{
		$url = test_input($_POST['url']);
		//check if url contain a valid format
		if((!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url))){
			$name_error ="mmmh! plz type a valid url";
		}
	}
	if (empty($_POST['message'])) {
    $message = "";
  } else {
    $message = test_input($_POST['message']);
  }
  if($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == ''){
  	$message_body = '';
  	unset($_POST['submit']);
  	foreach ($_POST as $key => $value) {
  		$message_body .= "$key: $value\n";
  	}
  	$to ='andrewpeter2032@gmail.com';
  	$subject = 'Contact form submit';
  	if(mail($to, $subject, $message)){
  		$success = "Mesage  succesfully sent, thanks for contacting us";
  		$name = $email = $phone =$message = $url ='';
  	}
  }

}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>