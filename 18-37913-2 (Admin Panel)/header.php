<?php
if (empty($_SESSION['flag'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Student- Alumni Hub</title>
        <style>
            .error {
                color: #FF0000;
            }
        </style>
        <link rel="stylesheet" href="styles.css">
        <script src="js/regcheck.js"></script>
    </head>

    <body>
        <table border="0" width="100%">
            <tr>
                <td><img src="file/logo1.png" alt=""></td>
                <td width="285px"> </td>
                <td align="right"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
            </tr>
            <tr>
                <td colspan="3" height="600px" align="center">

                <?php
            } else {
                ?>

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Student- Alumni Hub</title>
                        <style>
                            .error {
                                color: #FF0000;
                            }
                        </style>
                        <script src="js/regcheck.js"></script>


                        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->

                        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                        


                        <link rel="stylesheet" href="styles.css">





                    </head>

                    <body>
                        <table border="1" width="100%">
                            <tr>
                                <td><img src="file/logo1.png" alt=""></td>
                                <td width="600px"> </td>
                                <td align="center">Logged in as <b><?php echo $_SESSION['uname'] ?></b> | <a href="logout.php">Logout</a></td>
                            </tr>
                            <!-- <tr>
                                <td> -->
                                <?php
                            }
                                ?>