<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" href="custom.css">
<script type="text/javascript" src="custom.js"></script>
</head>
<body>
	<form action="CheckLogin.php" method="post">
	  <h2><span class="entypo-login"></span> Login</h2>
	  <button class="submit"><span class="entypo-lock"></span></button>
	  <span class="entypo-user inputUserIcon"></span>
	  <input type="text" name="email" class="user" placeholder="ursername" required="" value="<?php if(isset($_COOKIE["user_name"])) { echo $_COOKIE["user_name"]; } ?>" />
	  <span class="entypo-key inputPassIcon"></span>
	  <input type="password" name="password" class="pass" placeholder="password" required="" value="<?php if(isset($_COOKIE["user_pass"])) { echo $_COOKIE["user_pass"]; } ?>"/>
	  <input type="checkbox" name="remember" value="true" class="remember"> <span class="remember_span">Remember me</span>
	</form>
</body>
</html>