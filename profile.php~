<?php
	session_start();

	require 'functions.php';


	if ( !isset($_SESSION['username']) ) 
		{
			header('Location: login.php');
			die();
		}
		
	if (!isset($_SESSION['password'])) 
		{
			header('Location: login.php');
			die();		
		}
		
/*
	echo $_SESSION['username'];
	echo "<br>";
	echo $_SESSION['password'];
	echo "<br>";

	echo "<h1>This is your profile!!!!!!!!!!!!!</h1>";


*/




	
	$dirName = $_SESSION['username'];
	
	echo "<h1><font color='white'>Here are your uploaded files...</h1>";

	$encDirName = md5($dirName);

	$userUploadDir ="UserUpload/$encDirName/";



	$uploadScriptHTML = <<<HTML

				<!DOCTYPE html>
				<html>

				<a href="logout.php"><font color = 'red'>Logout!</font></a>
				<font color = 'white'>
				<body background='338225-background-image.jpg'>
				<center>

				<form action="up.php" method="POST"
				enctype="multipart/form-data">
				<label for="upfile">Filename:</label>
				<input type="file" name="upfile" id="upfile"><br>
				<input type="submit" name="submit" value="Submit">

				</form>
				</center>
				</font>
				</body>
				</html>
HTML;

	

	
	$reroute = "<?php header('location:../../profile.php'); ?>";
	
	$index = $userUploadDir.'index.php';

	$writeAccess = <<<EDO
				<Files *.php>
				deny from all
				</Files>

EDO;

	$testHtaccess ='.htaccess';

	if(is_dir($userUploadDir))
	{	
		echo "<h3>NOTICE:Make sure that you dont upload php files as they wont download or work anyway</h3>";
		#file_put_contents($index,$reroute);
		file_put_contents("$userUploadDir$testHtaccess",$writeAccess);
		echo $uploadScriptHTML;
		display_files($userUploadDir);	
	}
	else
	{
		mkdir($userUploadDir,0777);
		#file_put_contents($index,$reroute);
		file_put_contents("$userUploadDir$testHtaccess",$writeAccess);
		echo $uploadScriptHTML;
		display_files($userUploadDir);
	}

		


	


?>



