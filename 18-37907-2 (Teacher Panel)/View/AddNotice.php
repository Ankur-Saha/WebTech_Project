
<?php
	require_once('../Controller/session_header.php');
	require_once('../Model/model.php');
	

	$username=$_SESSION['username'];
	
	$userinfo = getByName($username);
	$my_id= $userinfo['t_id'];
?>

<?php include 'Header.php';?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/navbar_customerhome.css">
<link rel="stylesheet" href="complain.css">
	<title>Notice</title>
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
	
	<form action="../Controller/userController.php" method="post">
	<h2 align="center">Notice</h2>
	<div class="wrapper">
          
			<table >
				<tr>
					<td>
						<h2>Write your notice here....</h2>
                    </td>
                </tr>
				
				<tr>
					<td><textarea type="textarea" id="cmp_des" name="description" width="500x" height="500x"></textarea></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="user_id" value="<?=$userinfo['t_id']?>">
						<input type="submit" name="addNotice" value="Submit"> 
						<a href="Profile.php">Back</a>
					</td>
				</tr>
			</table>
		

		
	
</div>
	</form>
</body>
<div id="footer">
<?php include 'Footer.php';?>
</div>
</html>