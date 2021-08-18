<?php
session_start();
if (isset($_SESSION['flag'])) {
?>

<?php
include('header.php');
?>

<b>
    <h2>&nbsp;&nbsp;Account</h2>
</b>
<hr>
<ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="profile.php">View Profile</a></li>
    <li><a href="editProfile.php">Edit Profile</a></li>
    <li><a href="pictureChange.php">Change Profile Picture</a></li>
    <li><a href="changePass.php">Change Password</a></li>
    
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php
if (!isset($showSearchResult)) {
    ?>
<form method="post" action="controller/findStudent.php">
    <h1>SEARCH FOR USERS</h1>
    <input type="text" name="email" />
    <input type="submit" name="findStudent" value="Search"/>
</form>
<?php
} else {
    ?>
<form method="post" action="../profile.php">
    <h1>Refresh to search users again</h1>
    <input type="submit" name="refreshSearch" value="Refresh"/>
</form>
<?php
}
    ?>
<?php
if (!isset($showSearchResult)) {
    ?>
<td colspan="2" rowspan="2">
    <fieldset>
        <legend><b>
                <h2>PROFILE</h2>
            </b></legend>
        <table border="0" width="100%">
            <tr>
                <td>
                    Name : <?php echo $_SESSION['name']; ?>
                </td>
                <td rowspan=8 align="center">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" height="200px" weidth="200px" alt=""><br>
                    <a href="pictureChange.php">change picture</a>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Email : <?php echo $_SESSION['email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Gender : <?php echo $_SESSION['gender']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth : <?php
                                    echo $_SESSION['date'] . " ";
                                   
                                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="editProfile.php">Edit Profile</a>
                </td>

            </tr>
        </table>
    </fieldset>
</td>
<?php
} else if(isset($showSearchResult) && sizeof($searchResult) > 0) {
?>
<td colspan="2" rowspan="2">
    <fieldset>
        <legend><b>
                <h2>PROFILE</h2>
            </b></legend>
        <table border="0" width="100%">
            <tr>
                <td>
                    Name : <?php echo $searchResult['student_name']; ?>
                </td>
                <td rowspan=8 align="center">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" height="200px" weidth="200px" alt=""><br>
                    <a href="pictureChange.php">change picture</a>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Email : <?php echo $searchResult['student_email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <!-- Gender : <?php echo $_SESSION['gender']; ?> -->
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <!-- <td>
                    Date of Birth : <?php
                                    echo $_SESSION['date'] . "/";
                                    echo $_SESSION['month'] . "/";
                                    echo $_SESSION['year'];
                                    ?>
                </td> -->
                <td>
                    <?php echo $searchResult['student_DOB']; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <!-- <td>
                    <a href="editProfile.php">Edit Profile</a>
                </td> -->

            </tr>
        </table>
    </fieldset>
</td>
<?php
} else {
?>
<h2>No result find<h2>
<?php
}
?>
<tr>
    <td height="390px">
        <?php
        include('footer.php');
        ?>
         <?php
    } else {
        header('location: login.php');
    }
        ?>