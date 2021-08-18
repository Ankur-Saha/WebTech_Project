<?php 

require_once 'db_connect.php';




function searchUser($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student` WHERE student_email LIKE '%$email%'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function loginUser($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student` WHERE student_name LIKE '%$uname%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function register($data){
	$conn = db_conn();
    $selectQuery = "INSERT into student ( student_name, student_DOB, student_email, student_pass )
VALUES (:student_name, :student_DOB, :student_email, :student_pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':student_name' => $data['student_name'],
        	':student_DOB' => $data['student_DOB'],
        	':student_email' => $data['student_name'],
        	':student_pass' => $data['student_pass'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


