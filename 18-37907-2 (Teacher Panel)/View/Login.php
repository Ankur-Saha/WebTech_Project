<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="../Asset/JS/login.js"></script>
	<link rel="stylesheet" href="../Css/login.css">
	<style>
	#footer{
  background-color: lightblue;
  text-align:center;
}
        #checkbox{
            column-gap: 10px;
        }
        
</style>
</head>
<body>
	
	
	<?php
    include 'header.php';
    
    ?>
    
    <div class= "bgcolor">
	<form action="../Controller/LogCheck.php" method="post">
		<fieldset class="login">
			<legend id="signin_text">SignIn</legend>

			<div id="Signin">
			<table align='center'>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" value="<?php if (isset($_COOKIE["username"])) {
                                                                echo $_COOKIE["username"];
                                                            } ?>" onkeyup="userRemover()" onblur="userEmpty() "></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="userMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                echo $_COOKIE["password"];
                                                            } ?>" onkeyup="pRemover()" onblur="passwordEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="passMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr id="checkbox">
                   <td ><input type="checkbox" id="rmbm" name="remember" ></td>
                    <td>Remember Me</td>
				    
                    
				</tr>
				<br><br>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td><a href="forgotPassword.php"> <span>Forgot Password?</span> </a></td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					<td></td>
					<td>Don't have an account?</td>
					<td id="signup_btn"><a href="Registration.php">Register</a></td>
				</tr>
				
			</table>
			</div>
		</fieldset>
	</form>
	</div>
	
</body>
<div id="footer">
<?php include 'footer.php';?>
</div>
</html>