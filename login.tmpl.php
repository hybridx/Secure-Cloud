
<!DOCTYPE html>
<?php setcookie('testCookie', 25); ?>
<head>
<meta charset='UTF-8'>
<link href="CSS/login.style.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
html{ 
  background: url(background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<body>
<form name="login-form" class="login-form" action="login.php" method="POST">
	
		<div class="header">
		<h1>Welcome, User</h1>
		<span>Please, enter your login details</span>
		</div>
		 <div class="content">
		<input name="username" type="text" class="input username" 
		placeholder="Username" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="Submit" class="button" value="Login">
		</div>
		<div class="footer">
		<a href="register.php" class="button">New user? Click here!</a>
		</div>
	</form>
	<center><a href="index.php">
	<h2>GO back to home page.</h2>
	</a>
	</center>
</body>
</html>