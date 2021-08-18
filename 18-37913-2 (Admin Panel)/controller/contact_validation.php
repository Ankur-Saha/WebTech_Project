<?php
 
$nameErr = $emailErr = $subjectErr = "";
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($name)) {
            $nameErr = "Name is required";
        }
        else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                $name = "";
            } else {
                if (str_word_count($name) < 2) {
                    $nameErr = "Name must contain atleast 2 words";
                }
            }
        }
 
        if (empty($email)) {
            $emailErr = "Email is required";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Not a valid email. e.g anything@email.com";
                $email = "";
            }
        }
 
        if (empty($subject)) {
            $subjectErr = "Email is required";
        }
 
        if ($nameErr == "" && $emailErr == "" && $subjectErr == "") {
            $contact = ['name' => $name, 'email' => $email, 'subject' => $subject];
 
            if (filesize('contact.json') == 0) {
                $json = json_encode($contact);
                $myfile = fopen('contact.json', 'w');
                fwrite($myfile, '[' . $json . ']');
            } else {
                $inp = file_get_contents('contact.json');
                $tempArray = json_decode($inp);
                array_push($tempArray, $contact);
                $jsonData = json_encode($tempArray);
                file_put_contents('contact.json', $jsonData);
            }
        }
    }
}