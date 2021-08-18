<?php 

require_once '../Model/db.php';

function registerUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into teacher (t_name, t_pass, email, Gender, username, dob, ppic_abs_path, userType)
VALUES (:name, :password, :email,:gender, :username,  :dob, :ppic_abs_path, :userType)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':gender' => $data['gender'],
        	':dob' => $data['dob'],
            ':userType' => $data['userType'],
        	':ppic_abs_path' => $data['ppic_abs_path']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}