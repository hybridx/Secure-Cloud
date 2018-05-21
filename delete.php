<?php
session_start();

#$file = urldecode($_GET['file']);

$deleteFile = urldecode($_POST['getFileName']);

echo $deleteFile;

#unlink($files);

unlink($deleteFile);


header('location:profile.php');


?>
