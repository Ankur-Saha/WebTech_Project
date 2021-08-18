<?php 
	
	require_once('session_header.php');
	require_once('../Model/model.php');


	


	if(isset($_POST['edit'])){

		$name = $_POST['name'];
        $email = $_POST['email'];
		$password 	= $_POST['password'];
		$confirm_password= $_POST['confirm_password'];
		$id = $_POST['id'];

		if(empty($name) || empty($email) || empty($password) || empty($confirm_password)){
			header('location: ../View/updateProfile.php?empty');
		}
		elseif($password!=$confirm_password)
		{
            header('location: ../View/updateProfile.php?password & confirm password should be same');
		}

		elseif(is_numeric($name))
		{
            header('location: ../View/updateProfile.php?Name cannot be number');
		}
		else{

			$register = [
				'name'=> $name,
				'email'=> $email,
				'password'=> $password,
				'confirm_password'=> $confirm_password,
				'id'=> $id
			];

			$status = updateProfile($register);

			if($status){
				header('location: ../View/profile.php?success=done');
			}else{
				header('location: ../View/updateProfile.php?id={$id}');
			}
		}
	}

	
	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../View/updateProfile.php?id={$id}');
		}else{

			$register = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($register);
            
            //NEED TO BE DONE

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}

    if (isset($_POST['findUser'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
    	require_once '../showSearchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


    if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../View/updateProfile.php?id={$id}');
		}else{

			$register = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($register);
            
            //NEED TO BE DONE

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}


	if(isset($_POST['addNotice'])){

		
		$description 	= $_POST['description'];
		$user_id 		= $_POST['user_id'];
		

		if(empty($description ) || empty($user_id )){
			header('location: ../View/addNotice.php?error=Null submission');
		}else{

			$notice = [
				
				'description'=> $description,
				'user_id' => $user_id
			];

			$status = addNotice($notice);

			if($status){
				header('location: ../View/Profile.php?success=done');
			}else{
				header('location: ../View/addNotice.php?id={$id}');
			}
		}
	}

    if(isset($_POST["fileSubmit"])){
 // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $target_dir = "../Files/";
        $title= $_POST["title"];
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 900000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "docx") {
  echo "Sorry, only JPG, JPEG, PNG, pdf, docx & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $file = [
				
				'title'=> $title,
				'pname' => $target_file
			];

			$status = addFile($file);

			if($status){
				header('location: ../View/Profile.php?success=done');
			}else{
				header('location: ../View/addFiles.php?id={$id}');
			}
}

    
    }


if(isset($_POST["updatePic"])){
 // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $target_dir = "../Uploads/";
       
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 900000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $file = [
				
				
				'target' => $target_file
			];

			$status = addPicture($file);

			if($status){
				header('location: ../View/Profile.php?success=done');
			}else{
				header('location: ../View/addFiles.php?id={$id}');
			}
}

    
    }


?>