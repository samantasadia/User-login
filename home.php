<?php
session_start();
if(empty($_SESSION))
{
	header('Location: http://localhost/file-handling/login.php');
			exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>
home page
</title>
<style>

.error {color: #FF0000;}
span {color: #FF0000;}
th {
  text-align: left;
}
</head>
</style>
<body>
<center>
<h1>Welcome to home page</h1><br>
<h2><?php echo $_SESSION["email"]; ?> </h2>
<h3><a href="/User-login/login.php">Logout<a></h3>
</center>
</body>
</html>
