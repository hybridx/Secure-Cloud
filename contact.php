<?php

$message = $_GET['message'];
$name = $_GET['name'];


file_put_contents('contactReview.txt',"$name $message \n \n \n",FILE_APPEND);




header('location:index.php');



?>
