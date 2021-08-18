
<?php
	require_once('../Controller/session_header.php');
	require_once('../Model/model.php');
	$userinfo = getByName($_SESSION['username']);
?>
<?php include 'Header.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="../../css/home.css">
	<style>
	#footer{
  background-color: #f19494;
  text-align:center;
}
</style>
</head>
<body>

<div id="navbar">

<p id="logo"><b>Student- Teacher- Alumni Hub</b></p> 

</div>


<fieldset>
    <legend>My profile Info</legend>
<form action="..Controller/userController.php?>" method="post" enctype="multipart/form-data">


	<table cellpadding="0" cellspacing="0" align='center'>
    <tr>
        <td > <img width="300" src="../Uploads/user.png"></td>
	</tr>
    <tr>
		<td><input type="file" name="file"></td>
	</tr>
	<tr>
		<td><input type="submit" name="updatePic" value="Update"></td>
	</tr>
	</table>
           
</form>

    
    <table cellpadding="0" cellspacing="0" align='center'>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?=$userinfo['t_name']?></td>
				
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?=$userinfo['t_pass']?></td>
				
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?=$userinfo['username']?></td>
				
			</tr>	
				
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?=$userinfo['email']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?=$userinfo['gender']?></td>
				
			</tr>
			<tr><td colspan="3"><hr/></td></tr>	
             
			
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?=$userinfo['dob']?></td>
			</tr>
			<tr><td>.<td></tr>
      <tr>
				<td></td>
				<td></td>
			</tr>
		</table>
		
		</fieldset>





</body>
<div id="footer">
<?php include 'Footer.php';?>
</div>
</html>