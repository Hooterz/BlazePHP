<?php

  $errors = array();
	$messages = array();

	if(empty($_POST["registrationBean_username"]))
		$errors["registration_username"] = "<br/>Please enter a username!";
	elseif(strlen($_POST["registrationBean_username"]) > 25 || !$this->validName($_POST["registrationBean_username"]))
		$errors["registration_username"] = "<br/>Please enter a valid username!";
	elseif($this->database->num_rows("SELECT null FROM `users` WHERE `username` = ? LIMIT 1", [$_POST["registrationBean_username"]]) != 0)
		$errors["registration_username"] = "That username is already taken!";

	if(empty($_POST["registrationBean_email"]))
		$errors["registration_email"] = "<br/>Please enter an email address!";
	elseif(!preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $_POST["registrationBean_email"]))
		$errors["registration_email"] = "<br/>Please enter a valid email address!";
	elseif($this->database->num_rows("SELECT null FROM `users` WHERE `mail` = ? LIMIT 1", [$_POST["registrationBean_email"]]) != 0)
		$errors["registration_email"] = "<br/>That email address is taken!";

	if(empty($_POST['registrationBean_password']))
		$errors["registration_password"] = "<br/>Please enter a password!";
	elseif(strlen($_POST['registrationBean_password']) < 6)
		$errors["registration_password"] = "<br/>Please enter a password with more than 6 characters!";

	if(empty($_POST['registrationBean_password_confirm']))
		$errors["registration_password_confirm"] = "<br/>Please enter your password again!";
	elseif(!($_POST['registrationBean_password'] == $_POST['registrationBean_password_confirm']))
		$errors["registration_password_confirm"] = "<br/>These passwords do not match!";

	if(!isset($_POST['registrationBean_termsOfServiceSelection']) || $_POST['registrationBean_termsOfServiceSelection'] != "true")
		$errors["registration_termsofservice"] = "Please accept the terms of service.";
	if(count($errors) !== 0){
		$errors['empty_field_error_message'] = 'Hey, you forgot to fill me!';
	}

	$return = array(
		"registrationErrors" => $errors,
		"registrationMessages" => $messages);

	if(count($errors) == 0) {

		$this->addUser($_POST["registrationBean_username"],$this->hash($_POST['registrationBean_password']),$_POST["registrationBean_email"],$this->config->motto,$this->config->credits,$this->config->pixels,1, $this->config->figure, "M");
		$this->Login($_POST["registrationBean_username"], $_POST['registrationBean_password']);
		$return['registrationCompletionRedirectUrl'] = $this->config->url."/me";
	}

	header('Content-type: application/json');
	echo json_encode($return);
	exit;
?>
