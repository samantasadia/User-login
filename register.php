<!DOCTYPE html>
<html>
<head>
<title>
Registration
</title>
<style>

.error {color: #FF0000;}

th {
  text-align: left;
}
</style>

<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $genderErr = $remailErr = $passwordErr = $unameErr = "";

$fname = $lname= $email = $gender = $remail = $uname = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["uname"])) {
    $unameErr = "Username is required";
  } else {
    $uname = test_input($_POST["uname"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  
  if (empty($_POST["remail"])) {
    $remailErr = "Recovery email is required";
  } else {
    $remail = test_input($_POST["remail"]);
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>

</head>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<body>
<fieldset>
<legend>Basic Information</legend>
<center>
<table>
<tr>
<th><label for="fname">First Name:</label></th>
<td><input type="text" id="fname" name="fname"></td>
<td><span class="error"> <?php echo $fnameErr;?></span></td>
</tr>
<tr>
<th><label for="lname">Last Name:</label></th>
<td><input type="text" id="lname" name="lname"></td>
<td><span class="error"> <?php echo $lnameErr;?></span></td>
</tr>
<tr>
<th><label for="gender">Gender:</label></th>
<td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female"
<label for="female">Female</label>
</td>
<td><span class="error"> <?php echo $genderErr;?></span></td>
</tr>
<tr>
<th><label for="email">Email:</label></th>
<td><input type="email" id="email" name="email"></td>
<td><span class="error"> <?php echo $emailErr;?></span></td>
</tr>
<tr>
</table>
</fieldset>
<fieldset>
<legend>User Account Information</legend>
<center>
<table>
<tr>
<th><label for="uname">Username:</label></th>
<td><input type="text" id="fname" name="uname"></td>
<td><span class="error"> <?php echo $unameErr;?></span></td>
</tr>
<tr>
<th><label for="password">Password:</label></th>
<td><input type="password" id="password" name="password"></td>
<td><span class="error"> <?php echo $passwordErr;?></span></td>
</tr>

<tr>
<th><label for="remail">Recovery Email:</label></th>
<td><input type="remail" id="remail" name="remail"></td>
<td><span class="error"> <?php echo $remailErr;?></span></td>
</tr>
<tr>
</table>
</fieldset>
</center>
<center>
<br>
<input type="submit" name="submit" value="Submit">
&nbsp;&nbsp;&nbsp;&nbsp;<a href ="/User-login/login.php">Back<a>
</center>
</body>
</html>

<?php

$myfile = fopen("data.txt","a") 
	or die ("Unable to open the file");
$array = array($fname,$lname,$gender,$email);
$val = "";
if(in_array($val,$array)){
		echo "";
}
else{
	fputs($myfile,$email."\n".$password."\n---Basic Information--- \nFirst Name: ".$fname."\n"."Last Name: ".$lname."\n"."Gender: ".$gender."\n".
					"---User Account Info--- \nUsername: ".$uname."\n"."Password: ".$password."\n"."Recovery email: ".$remail."\n");
}
fclose($myfile);

?>