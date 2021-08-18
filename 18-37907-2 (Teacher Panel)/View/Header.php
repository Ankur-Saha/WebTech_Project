<?php
if(!isset($_SESSION['username'])){
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home --Welcome--</title>
        <style>
            .error {
                color: #FF0000;
            }
            .nav{
                font-size: 100px;
            }
        </style>
    </head>

    <body>
        <table border="0" width="100%">
            <tr>
                <td><img src="../Logo/logo1.png" alt=""></td>
                <td width="300px"> </td>
                <div class="nav">
                <td id="nav" align="right"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
                </div>
            </tr>
            <tr>
                <td colspan="3" height="1px" align="center">

                <?php
            } else {
                ?>

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Home --Welcome--</title>
                        <style>
                            .error {
                                color: #FF0000;
                            }
                        </style>
                    </head>

                    <body>
                        <table border="2" width="100%">
                            <tr>
                                <td><img src="../Logo/logo1.png" alt=""></td>
                                <td width="600px"> </td>
                                <td align="center">Logged in as <a href="Profile.php"><?php echo $_SESSION['username'] ?></a> | <a href="Logout.php">Logout</a></td>
                            </tr>
                            <tr>
                <td colspan="3" height="1px" align="center">
                                </td>
                            </tr>
                            
                                <?php
                            }
                                ?>