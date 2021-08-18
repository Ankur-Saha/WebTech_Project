<?php
include 'db.php';
   function searchUser($user_name){
    $conn = dbConnection();
    $selectQuery = "SELECT * FROM Student WHERE username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>
