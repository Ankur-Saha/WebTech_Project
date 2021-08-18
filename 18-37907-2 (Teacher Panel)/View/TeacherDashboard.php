
<?php
	require_once('../Controller/session_header.php');
	require_once('../Model/model.php');
    
  
	$userinfo = getByName($_SESSION['username']);
?>
<?php
include 'Header.php';
?>


<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="../Css/Dashboard.css">

<title> Teacher Dashboard</title>
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
<div id="dashboard" >
<ul >

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="profile.php">My Profile</a>
      <a href="updateProfile.php">Update Profile</a>
      
      
      
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Notice</a>
    <div class="dropdown-content">
      <a href="AddNotice.php">Add Notice</a>
      
      
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Files</a>
    <div class="dropdown-content">
      <a href="addFiles.php">Add Files</a>
      
      
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search Profile</a>
    <div class="dropdown-content">
      <a href="searchStudent.php">Search Student</a>
      <a href="searchAlumni.php">Search Alumni</a>
    </div>
  </li>
</ul>

  
  </div>
</body>
<div id="footer">
<?php include 'Footer.php';?>
</div>
</html>

