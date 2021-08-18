<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>
<?php
include 'Header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title align="center" >Registration</title>
	<link rel="stylesheet" href="../Css/registration.css">
	<style>
	#footer{
  background-color: #f19494;
  text-align:center;
}
</style>
</head>
<body>

<script type="text/javascript" src="../Asset/JS/register.js"></script>
<div class= 'bgcolor'>
	<form id="form" action="../php/regCheck.php" onsubmit="validation()" method="post">
		<fieldset>
			<legend align="center" style="font-size:40px">SignUp</legend>
			<table align="center" height="500" weight="560" id="table">
			    <tr>
					<td>Name</td>
					<td><input type="text" id="name" name="name" size="40" onkeyup="nameRemover()" onblur="nameEmpty()" ></td>
				</tr>
				<tr>
				<td></td>
					<td><i id="nameMsg" style="color:red; font-size: 20px;"></i></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email"  id = "email" name="email" size="40" onkeyup="emailRemover()" onblur="emailEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="emailMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				
				
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username"  size="40" onkeyup="unameRemover()" onblur="unameEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="usernameMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr>
				<td>Gender</td>
				<td>
				 <input type="radio" name="gender" id="Male" value="Male" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">male
				 <input type="radio" name="gender" id="Female" value="Female" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">female
				 <input type="radio" name="gender" id="Other" value="Other" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">Other			    
				</td>
				</tr>
				<tr>
				<td></td>
				<td><i id="genderMsg" style="color:red;font-size: 10px; white-space: pre;"></i></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="date" id="dob" name="dob" size="1%" onkeyup="dobRemover()" onblur="dobEmpty()" onclick="dobRemover()"></td>
				</tr>
				<td></td>
				<tr>
				<td><i id="dobMsg" style="color:red;font-size: 10px; white-space: pre;"></i></td>
				</tr>
				<tr>
				
				<tr>
				<td></td>
				<td><i id="addMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<td>User Type</td>
				
				<td>
				<select name="user_type" id="user_type" onkeyup="uTRemover()" onblur="usertypeEmpty()" onclick="uTRemover()">
				<option name="user_type" value="">Select</option>
				<option name="user_type" value="Teacher">Teacher</option>
				<option name="user_type" value="Student">Student</option>
				<option name="user_type" value="Alumni">Alumni</option>
				<option name="user_type" value="Admin">Admin</option>
				</select >
				</td>
				
				<tr>
				<td></td>
				<td><i id="utMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"  size="40" onkeyup="pRemover()" onblur="PEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="passMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" id="confirm_password" name="confirm_password"  size="40" onkeyup="pconRemover()" onblur="PconEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="cpassMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" ></td>
				</tr>
			</table>
		</fieldset>
	</form>
	</div>
</body>
<div id="footer">
<?php include 'Footer.php';?>
</div>
</html>