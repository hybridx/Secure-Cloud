<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body >

<link rel="stylesheet" type="text/css" href="CSS/newUser.style.css">
<style>
        ul,li{margin: 0; padding: 0;}
        li{ list-style: none;}
        .notice{color: red; font-style: italic;}
    </style>

        <div class="form-style-10">
   <center> <h1>Sign Up Now!<span>Sign up and start uploading!</span></h1>
    <form action="" method="POST">

        <div class="section"><span>1</span>First Name &amp; Address</div>
        <div class="inner-wrap">
            <p class="notice">
            <?php if(!empty($name_status)){echo "$name_status";}?>
            </p>
            <label>Your Full Name <input type="text" name="name"/></label>
            <lable><h3>After successful registration you will automatically redirected to the login page</h3></lable>
        </div>

        <div class="section"><span>2</span>Email &amp; Phone</div>
        <div class="inner-wrap">
        	<label>NOTE: This email address will be your username. :)</label>
            <p class="notice">
            <?php if(!empty($mail_status)){echo "$mail_status";}?>
            </p>
            <label>Email Address <input type="email" name="email" /></label>
            <p class="notice">
            <?php if(!empty($contact_status)){echo "$contact_status";}?>
            </p>
            <label>Phone Number <input type="text" name="contact" /></label>
        </div>

        <div class="section"><span>3</span>Passwords</div>
            <div class="inner-wrap">
            <p class="notice">
            <?php if(!empty($pass_status)){echo "$pass_status";}?>
            </p>
            <label>Password <input type="password" name="password" /></label>
            <label>Confirm Password <input type="password" name="cpassword" /></label>
            <p class="notice">
            <?php if(!empty($confirm_password)){echo "$confirm_password";}?>
            </p>
        </div>
        <div class="button-section">
         <input type="submit" name="Sign Up!"/>
        </div>
    </form>
    </center>
    </div>

</body>
</html>


