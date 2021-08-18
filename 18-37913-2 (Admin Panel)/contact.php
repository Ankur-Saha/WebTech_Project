<?php
include 'header.php';
require_once ('controller/contact_validation.php');
?>

<form method="post" action="">
    <fieldset style="width:500px">
        <legend><b>CONTACT US</b></legend>
        <table border="0">
            <tr>
                <td>Name</td>
                <td>:
                    <input type="text" name="name" id="name" onkeyup="nameCheck()" onblur="nameCheck()">
                    <span id="msg1"> </span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:
                <input type="text" name="email" id="email" onkeyup="emailCheck()" onblur="emailCheck()">
                    <span id="msg2"> </span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Your Query </td>
                <td>
                    <textarea id="subject" name="subject" placeholder=" Write your query here.." rows="4" cols="40"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <br><input type="submit" name="submit" value="Send">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
include 'footer.php';
if (isset($_POST['submit'])) {
    header('location: home.php');
}

?>