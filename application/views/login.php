<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  background-image: url(assets/img/dep2.jpg);
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
  font-family: 'Open Sans', sans-serif;
}

.bg{
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 1;
	float: left;
	left: 0;
}

.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #00008B;
}

.login-header {
  background: #00008B;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background-image: ;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #00008B;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
	</style>
</head>
<body>
	<div class="login" style="text-align: center;">
	<p><img  src="<?php echo base_url();?>assets/img/d21.png"/></p>
	</div>
	<div class="login">
  		<div class="login-triangle"></div>
  		<h2 class="login-header">Log in</h2>
		<form class="login-container" method="POST" action="<?php echo base_url();?>Auth/login/">
		    <p><input type="text" name="username" placeholder="Email" required="true"></p>
		    <p><input type="password" name="password" placeholder="Password" required="true"></p>
		    <p><input type="submit" value="Log in"></p>
		 </form>
	</div>
</body>
</html>