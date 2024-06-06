<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/validation.js"></script>

<style>
    * {box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Helvetica, sans-serif;;
}
h1, h2 {
  text-align: center;
  margin-top: 20px;
}
.topmenu {
  overflow: hidden;
  background-color: #0a68b0;
}
.topmenu a {
  float: left;
  display: block;
  font-size: 17px;
  color: #fff;
  padding: 17px 20px;
  text-decoration: none;
  text-align: center;
}
.topmenu .menubar {
  padding-left: 20px;
}
.topmenu a.active {
  background-color: #4e69cc;
  color: #000;
}
.topmenu a:hover {
  background-color: #4e69cc;
  color: black;
}
@media screen and (max-width: 500px) {
  .topmenu a {
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    display: block;
    float: none; 
  }
}
.err-msg{
  text-align: center;
  color:red;
}

.form-1 {
  margin: 50px auto;
  padding-bottom: 30px;
  border: 1px solid #09168d;
  border-radius: 7px;
  background: #fff;
  width: 37%;
}
.check {
  margin: 5px 0px;
  width: 6%;
  height: 20px;
  }
.user{
  float: right;
  padding: 17px 25px;
  color: #fff;
}
.welcome{
  color: #c6f606;
}
.logout{
   float: right;
}
    </style>
</head>
<body>
<div class="topmenu">
	<div class="menubar" >
		<a id = "home" href="index.php"><i class="fa fa-home"></i> Home</a>
	  	<?php if (isset($_SESSION['name'])) {  ?>
	  	<div class="logout">
	  		<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	  	</div>
	  	<?php } 
	  	else { ?>
	  		<a id = "login"  href="login.php"><i class="fa fa-sign-in"></i> Login</a>
	  	<?php } ?>
	  	<div class="user"><?php if (isset($_SESSION['name']))
	  		echo '<span class="welcome">Welcome &nbsp;&nbsp;</span>'.$_SESSION['name']; ?>
	 	</div>
	</div>
</div>