
<?php
	require_once('../Controller/session_header.php');
	require_once('../Model/model.php');
	

	$username=$_SESSION['username'];
	
	$userinfo = getByName($username);
	$my_id= $userinfo['t_id'];
?>
<?php
include 'Header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
   <form action="../Controller/userController.php" method="post" enctype="multipart/form-data" >
   <label>Title</label>
   <input type="text" name= "title">
   <label>File Upload</label>
   <input type="file" name="file">
   <input type="submit" name="fileSubmit" value="Submit">
   </form>
    
</body>
</html>
<?php
include 'Footer.php';
?>