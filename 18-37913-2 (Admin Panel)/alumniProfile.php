<?php
session_start();
include('header.php');
if (isset($_SESSION['flag'])) {
?>
<tr>
    <td>

    <b>
        <h2>&nbsp;&nbsp;Account</h2>
    </b>
    <hr>
    <ul>
        <li><a href="alumniDashboard.php">Dashboard</a></li>
        <li><a href="alumniProfile.php">View Profile</a></li>
        <li><a href="alumnieditProfile.php">Edit Profile</a></li>
        <li><a href="alumnichangePass.php">Change Password</a></li>
        <li><a href="alumniall.php">View All Profiles</a></li>
        <!--<li><a href="search.php">Search an User</a></li>-->
        <li><a href="alumnilogout.php">Logout</a></li>
    </ul>
    </td>
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
                        <img src="uploads/<?php echo $_SESSION['photo'] ?>" height="200px" weidth="200px" alt=""><br>
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
                                        echo $_SESSION['date'] . "/";
                                        echo $_SESSION['month'] . "/";
                                        echo $_SESSION['year'];
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
                        Department : <?php echo $_SESSION['dept']; ?>
                <tr>
                    <td><br></td>
                </tr>
    </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>
            Position : <?php echo $_SESSION['position']; ?>
        </td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>
            <center><a href="alumnieditProfile.php">Edit Profile</a></center>
        </td>

    </tr>
    </table>
    </fieldset>
    </td>
    </tr>
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