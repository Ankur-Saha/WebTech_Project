
<?php
	require_once('../Controller/session_header.php');
	require_once('../Model/model.php');
	$username=$_SESSION['username'];
	$userinfo = getByName($username);
?>
<?php include 'Header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
	<link rel="stylesheet" href="../../css/navbar_customerhome.css">
	<style>
		fieldset{
			background-color:#CCD1D1;
		}	
        #footer{
        background-color: #f19494;
        text-align:center;}
	</style>
</head>

<body>
<div id="navbar">
<p id="logo"><b>Student- Teacher- Alumni Hub</b></p> 
  
</div>



	<form action="../Controller/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table align='center'>
				<tr>
				
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$userinfo['t_name']?>"></td>
				</tr>
				<tr>
				
					<td>Email</td>
					<td><input type="text" name="email" value="<?=$userinfo['email']?>"></td>
				</tr>

				
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$userinfo['t_pass']?>"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm_password" value="<?=$userinfo['t_pass']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$userinfo['t_id']?>">
						<input type="submit" name="edit" value="Update"> 
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
<div id="footer">
<?php include 'Footer.php';?>
</div>
</html>