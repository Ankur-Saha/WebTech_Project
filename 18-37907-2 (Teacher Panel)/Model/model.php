<?php

	require_once('db.php');
	

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from Teacher where t_id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getByName($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from Teacher where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getByEmailStudent($email){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from Student where email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
    
    function getByEmail($email){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from Teacher where email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select t_id, t_name, email, Gender  from Teacher";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from Teacher where username='{$user['username']}' and t_pass='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	


	function addNotice($notice){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into notice (n_body, t_id) VALUES ( '{$notice['description']}','{$notice['user_id']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function addFile($file){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into material (title, file) VALUES ( '{$file['title']}','{$file['pname']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
function addPicture($file){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update Teacher set ppic_abs_path = {$file['target']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


function editNotice($notice){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update notice set n_body='{$notice['description']}' where n_id='{$notice['id']}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function getNoticeById($n_id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from notice where n_id='{$n_id}'";
		$result = mysqli_query($conn, $sql);
		$complain = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($complain, $row);
		}

		return $complain;
	}


	function updateProfile($register){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update Teacher set t_name='{$register['name']}',  t_pass='{$register['password']}', email='{$register['email']}' where t_id='{$register['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "delete from  users where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

function searchUser($user_name){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from Student  where username LIKE '%$user_name%'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
    


	


	




?>