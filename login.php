<!DOCTYPE html>
<html>
<head>
<title>
Login page
</title>
<style>

.error {color: #FF0000;}
span {color: #FF0000;}
th {
  text-align: left;
}
</head>
</style>
<?php
// define variables and set to empty values
$passwordErr = $emailErr = "";

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<body>
<center>
<h2>Login</h2>

<table>
<tr>
<th><label for="email">Email Id:</label></th>
<td><input type="email" id="email" name="email"></td>
<td><span class="error"> <?php echo $emailErr;?></span></td>
</tr>
<tr>
<th><label for="password">Password:</label></th>
<td><input type="password" id="password" name="password"></td>
<td><span class="error"> <?php echo $passwordErr;?></span></td>
</tr>
<tr><td></td><td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<a href ="/User-login/register.php">Register now<a></td></tr>
</table>

</center>
</form>
</body>
</html>