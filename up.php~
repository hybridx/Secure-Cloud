<?php
session_start();

$uName = $_SESSION['username'];

$dirName = md5($uName);

#echo $dirName . "<br>";

$test = $dirName.'/';

echo "<br>";
var_dump($_FILES);
echo "<br>";

if(isset($_FILES["upfile"]))
    {
	if ($_FILES["upfile"]["error"] > 0)
    		{
    			echo "Return Code: " . $_FILES["upfile"]["error"] . "<br>";
			echo "<script>alert('invalid file'); window.location='profile.php';</script>";
    		}
  	else
    		{
		    	echo "Upload: " . $_FILES["upfile"]["name"] . "<br>";
		    	echo "Type: " . $_FILES["upfile"]["type"] . "<br>";
		    	echo "Size: " . ($_FILES["upfile"]["size"] / 1024) . " kB<br>";
		    	echo "Temp file: " . $_FILES["upfile"]["tmp_name"] . "<br>";

    				if (file_exists("UserUpload/$test" . $_FILES["upfile"]["name"]))
      					{
      						echo $_FILES["upfile"]["name"] . " already exists. ";
						echo "<a href='profile.php'> Go Back!</a>";
      					}
    				else
   				        {
 				                $v = move_uploaded_file($_FILES["upfile"]["tmp_name"],"UserUpload/$test".$_FILES["upfile"]["name"]);
      						echo "<br>";
						echo "Stored in: ". $_FILES["upfile"]["name"];
						echo "<br>";
      						var_dump($v);
						header('location:profile.php');
     	 				}
    		}
    }
?>
