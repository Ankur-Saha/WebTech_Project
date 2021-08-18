<?php
session_start();
if (isset($_SESSION['flag'])) {

?>

    <?php
    include('header.php');
    ?>
    <tr>
    <td>
    <b>
        <h2> &nbsp;&nbsp;Account</h2>
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
    <td colspan="2" rowspan="2"><b>
            <h1 style="text-align: center">Welcome <?php echo $_SESSION['uname'] ?></h1>
        </b></td>
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