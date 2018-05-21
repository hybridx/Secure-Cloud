<?php
	function email_valid($email)
		{
			return filter_var($email,FILTER_VALIDATE_EMAIL);
		}




	function subscribe($email)
		{
			require 'config.php';
			
			try {
				$connect = new PDO('pgsql:host=localhost;dbname=SeCloud',$config['DB_USERNAME'],$config['DB_PASSWORD']);
				$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


				$connect->query("INSERT INTO newsLetter(email) VALUES('$email')");
			} 
			catch (PDOException $e) {
				echo "ERROR:" .	 $e->getMessage();
			}
		}



		function checkmail($email)
		{
		  	if (email_valid($email)) 
		  		{
		  			echo "Thank-You for subscribing";
		  			subscribe($email);
		  		}
		  	else
		  		{
		  			echo "The Email provided is faulty :( Please try again...";
		  		}

		 }


		
		 function reg_new_user($name,$email,$contact,$pass)
		{
			require 'config.php';
			try {
				$connect = new PDO('pgsql:host=localhost;dbname=SeCloud',$config['DB_USERNAME'],$config['DB_PASSWORD']);
				$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


				$connect->query("INSERT INTO users(name,email,contact,pass) VALUES('$name',
								 '$email','$contact','$pass')");



			} 
			catch (PDOException $e) {
				echo "ERROR:" .	 $e->getMessage();
			}
		}



		function getUser_pass($username,$password)
		{

			require 'config.php';
			try {
				$connect = new PDO('pgsql:host=localhost;dbname=SeCloud',$config['DB_USERNAME'],$config['DB_PASSWORD']);
				$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


				$result = $connect->query("SELECT email,pass FROM users WHERE email='$username' AND pass='$password'");
				
				if ( $result->rowCount() == 1) 
					{
					// credentials are correct
					// login + set session
					
						$_SESSION['username'] = $username;
						$_SESSION['password'] = $password;
						header("Location: profile.php");
					}
				else 
					{
						echo "<SCRIPT>alert('Error Invalid UserName or Password')</SCRIPT>";
					}
			
			} 
			catch (PDOException $e) {
				echo "ERROR:" .	 $e->getMessage();
			}
				
		}




		function check_user_exists($email)
		{

			require 'config.php';
			try {
				$connect = new PDO('pgsql:host=localhost;dbname=SeCloud',$config['DB_USERNAME'],$config['DB_PASSWORD']);
				$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


				$result = $connect->query("SELECT email FROM users WHERE email='$email'");
				
				if ( $result->rowCount() > 0) 
					{
						return true;
					}
				else 
					{
						return false;
					}
			
			} 
			catch (PDOException $e) {
				echo "ERROR:" .	 $e->getMessage();
			}
				
		}

		

		function display_files($userUploadDir) 
		{
		    echo "<b><center>These are your files...:)</b>\n<ul><table>
					  <tr>
					    <td>Download Files</td>
					    <td>Delete Files</td>
					  </tr>
					</table>";
		    $handle = opendir($userUploadDir);
		    if(!$handle) 
			{
				echo "Couldnt open directory : ".$userUploadDir;
			    	die();
			}
		    while(($file=readdir($handle))!==false)
		    	{
		    	  	if($file == "." || $file == "..")
				      continue;
				if(is_dir($userUploadDir."/".$file)) {
					 display_files($userUploadDir."/".$file);
					 echo "\n</ul>";
		        }

		    else 
			{
				  $encFile = urlencode("$userUploadDir$file");
				  $deleteHTML = <<<DEL
					<html>
					<body>
					<form action='delete.php' method='POST'>
					<input type='submit' value=$encFile name='getFileName'>
					</html>
DEL;

				 $test = "$userUploadDir$file";
						 
				#echo $test;
				 $table = <<<TAB
					<style>
					table {
					    display: table;
					    border-collapse: separate;
					    border-spacing: 22px;
					    border-color: deepesh;
					}
					</style>
					<center>
					<table>
					  <tr>
					    <td><a href='$test' download><font color='darkred'>$file</a></td>
					    <td>$deleteHTML</td>
					  </tr>
					</table>
					</center>
TAB;

				 #echo pathinfo($file, PATHINFO_EXTENSION);
				 echo $table;
			         #echo "\n<li><a href='$userUploadDir$file' download><font color='grey'>$file</a> $deleteHTML</li>";
				   continue;
			 }
		    }
		    closedir($handle);
		}


		




		
?>
