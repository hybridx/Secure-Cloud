<?php
	session_start();


	require 'login.tmpl.php';
	require 'functions.php';

    
	#define('USERNAME','deepesh');
	#define('PASSWORD','1234');

	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
		{
			// get their values

			$username = $_POST['username'];
			$password = $_POST['password'];

			// validate that against the records


			getUser_pass($username,$password);


		}


?>
