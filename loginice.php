<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transparent Login Form</title>
	<link rel="stylesheet" type="text/css" href="beautylogin.css">
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
 <a href="topnav.php" class="active" align="left">Home</a>
  <div class="a">
    <a href="driverreg.php">Join Us    </a>
    <a href="login.php">Login    </a>
    <a href="loginice.php">Driver's Here    </a>
    <a href="clientsignup.php">Sign Up   </a>
  
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<form action="verifyd.php" method="post">

	<div class="login-box">
		<h1>Login</h1>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Phone" name="phone" value="" required autocomplete="off">
			
		</div>


		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="Password" name="password" value="" required autocomplete="off">
			
		</div>

		<input class="btn" type="submit" name="" value="Sign in">
		
	</div>
</form>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>
</body>
</html>