<?php
session_start();
require_once './model/model.php';
$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {

    // $inp = file_get_contents('user.json');
    // $temp = json_decode($inp, true);

    $temp = loginUser($_POST['uname']);

    if (empty($_POST['uname']) || empty($_POST['pass'])) {
        // echo "PLEASE ENTER YOUR NAME & PASSWORD";
        // alert("PLEASE ENTER YOUR NAME & PASSWORD");
        echo '<script>alert("PLEASE ENTER YOUR NAME & PASSWORD")</script>';
    } else {
        $f = 0;
        foreach ($temp as $key1 => $value1) {
            if ($temp[$key1]["student_name"] == $_POST['uname'] and $temp[$key1]["student_pass"] == $_POST['pass']) {
                $f = 1;
                $_SESSION['uname'] = $temp[$key1]['student_name'];
                $_SESSION['name'] = $temp[$key1]['student_name'];
                $_SESSION['email'] = $temp[$key1]["student_email"];
                $_SESSION['gender'] = $temp[$key1]["gender"];
                $_SESSION['date'] = $temp[$key1]["student_DOB"];
                $_SESSION['pass'] = $temp[$key1]["student_pass"];
            }
        }
        if ($f == 1) {
            $_SESSION['flag'] = true;
            $uname = $_POST['uname'];
            $_SESSION['uname'] = $uname;
            if (!empty($_POST['remember'])) {
                setcookie("user", $_POST['uname'], time() + 20);
                setcookie("pass", $_POST['pass'], time() + 20);
            }
            echo ($_SESSION['name']);
            header('location: dashboard.php');
        } else {
            // alert("INVALID USER");
            echo '<script>alert("INVALID USER")</script>';
        }
    }
}


?>

<?php
include('header.php');
?>

<form method="post" action="">
    <fieldset style="width:400px">
        <legend><b>LOG IN</b></legend>
        <table>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="uname" value="<?php if (isset($_COOKIE["user"])) {
                                                                echo $_COOKIE["user"];
                                                            } ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" value="<?php if (isset($_COOKIE["pass"])) {
                                                                echo $_COOKIE["pass"];
                                                            } ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember" id="">Remember me
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="submit" name="submit" value="Log In">
                    <a href="forgotpass.php"> Forgot Password?</a>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
include('footer.php');
?>