<?php
ini_set('display_errors',1);
	require 'functions.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$contact = htmlspecialchars($_POST['contact']);
		$password = htmlspecialchars($_POST['password']);
		$cpassword = htmlspecialchars($_POST['cpassword']);


		if (empty($name)) 
		{
			$name_status = "Blank name? Thats weird...";
		}
		else
		{
				
			$nameCheck = 1;
		}

		if (empty($email)) 
		{
			$mail_status = "Email cannot be empty...Remember Its also your username...";
		}
		else
		{
			if(check_user_exists($email))
				{
					$mail_status = "This username is already been used...Please choose another..";
				}
			else
				{
					$mailCheck = 1;
				}
			
		}

		if (empty($contact)) 
		{
			$contact_status = "Your phone number is important...You might get OFFERS...:)";
		}
		else
		{
			$contactCheck = 1;
		}


		if (empty($password)) 
		{
			$pass_status = "Password/s field/s is/are empty";
		}
		else
		{
			$passCheck = 1;
		}

		if (!($password == $cpassword)) 
		{
			$confirm_password = "The passwords do not match";
		}
		else
		{
			$confirmCheck = 1;
			$pass = $cpassword;
		}


		if ($nameCheck && $mailCheck && $contactCheck && $passCheck && $confirmCheck) 
		{	
			echo "<h1>True";
			reg_new_user($name,$email,$contact,$pass);
			header('Location: login.php');
			die();
		}




	}

	require 'newUser.php';

	

?>
