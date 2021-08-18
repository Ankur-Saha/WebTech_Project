<?php
    session_start();
    require_once '../model/model.php';
 
    $data['did'] = $_GET['id'];
    if ($data['did'] == $_SESSION['id']) {
        echo ("You cannot delete your own profile.");
    }
    else{
        if ( deleteProfile($_GET['id']) == true){
            header('location: ../all.php');
        }else{
            echo ("Deleting profile was not successfull");
        }
    }
?>