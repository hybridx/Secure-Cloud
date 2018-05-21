	<!DOCTYPE html>
<head>
<title>Main page</title>
<link href="CSS/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
	<body>
		<div class="container">
		<div id="templatemo_container">
	  	<div id="templatemo_left_column">
	    <div id="templatemo_title">Secure Cloud System</div>
	    <div id="templatemo_header">
	      <div id="templatemo_header_slogan">Work like the DEVIL 3:) play like the GOD O:)</div>
	    </div>
	    <div id="templatemo_left_content">
	      <h1>
	   	  Secure Cloud System
	   	  </h1>
	      <p>
	      
	      In the 21st Century with 4G services comming into picture we need storage.
	      And thats just what our company would help you do, not just any
	      storage but a SECURE ONE!

	      </p>
	      <div class="templatemo_service">ABOUT OUR SERVICES</div>
	      <form action="" method="POST">
	      HERE subscribe to our newsLetter!!!<br>
	      <?php 

	      //newsLetter

	      require 'functions.php';


	      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	      	$email = htmlspecialchars($_POST['email']);
	      }

	      //check if the email is empty!

	      if (empty($email)) 
	      		{
	      			echo "Enter your email address!";
	      		}
	      else
  				{
  					checkmail($email);					   	//validate email add email to database
  				}

	      ?>
	      <br>
	      <input type="text" name="email">
	      <input type="submit" value="Subscribe!:)">

	      </form>
	      <p>We provide FREE accounts (PAID accounts are a soon to part of this project)</p>
	      <div class="templatemo_aboutus">WHO WE ARE</div>
	      <p>We are students of TYBCS </p>
	    </div>
	  	</div>
	  	<div id="templatemo_right_column">
	    <div class="templatemo_domain">
	    </div>
	    <!-- <a href="http://www.cybzilla.com" target="_blank">
	    Visit CybZilla   -->
	    <div id="templatemo_menucolumn">
	      <div class="templatemo_menu_list">
	        <ul>
	          <li><a href="login.php">Login page.</a></li>
	          <li><a href="contactUs.html">Contact Us.</a></li>
		  <li><a href="register.php">Sign Up!</a></li>
	        </ul>
	      </div>
	      
	    </div>
	    <div id="templatemo_right_content">   
	    </div>
	      
	    <div id="templatemo_contact">
	        <strong>QUICK CONTACT</strong>
	        <img src="images/templatemo_contact.png" alt="templatemo.com" width="46" height="73" /><br />
	      Tel: +91 9923069194<br />
	      Tel: +91 7709324816<br />
	      Email: deepesh@cybzilla.com<br />
	      Email: kashyap@cybzilla.com<br />
	   	</div>
	 	</div>
	  	<div id="templatemo_footer">Created by Kashyap Ekbote and Deepesh Nair AMC-TYBCS</div>
		</div>
		</div>
	</body>
</html>
