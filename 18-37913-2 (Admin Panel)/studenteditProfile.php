<?php
session_start();
include('header.php');
require_once('controller/edit_profile_validation.php');
if (isset($_SESSION['flag'])) {
?>

<tr>
    <td>
    <b>
        <h2>&nbsp;&nbsp;Account</h2>
    </b>
    <hr>
    <ul>
        <li><a href="studentDashboard.php">Dashboard</a></li>
        <li><a href="studentprofile.php">View Profile</a></li>
        <li><a href="studenteditProfile.php">Edit Profile</a></li>
        <li><a href="studentchangePass.php">Change Password</a></li>
        <li><a href="studentall.php">View All Profiles</a></li>
        <!-- <li><a href="search.php">Search an User</a></li> -->
        <li><a href="studentlogout.php">Logout</a></li>
    </ul>
    </td>
    <td colspan="2" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>EDIT PROFILE</h2>
                </b></legend>
                <form method="post" action="" enctype="multipart/form-data" onsubmit="validate()">
                <table border="0" width="100%">
                    <tr>
                        <td>Name</td>

                        <td>:
                             <input value="<?php echo $_SESSION['name']; ?>" type="text" id="name" name="ename" onkeyup="nameCheck()" onblur="nameCheck()">
                             <span id="msg1"> </span>
                            <span class="error">* <?php echo $nameErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <input type="email" name="eemail" id="email" value="<?php echo $_SESSION['email']; ?>" onkeyup="emailCheck()" onblur="emailCheck()">
                        <span id="msg2"> </span>

                            <span class="error">* <?php echo $emailErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>:
                            <?php
                            if (!empty($_SESSION['gender'])) {
                                if ($_SESSION['gender'] == "Male") { ?>
                                    <input type="radio" name="egender" value="Male" id="" checked>Male
                                    <input type="radio" name="egender" value="Female" id="">Female
                                    <input type="radio" name="egender" value="Other" id="">Other
                                <?php
                                } else if ($_SESSION['gender'] == "Female") { ?>
                                    <input type="radio" name="egender" value="Male" id="">Male
                                    <input type="radio" name="egender" value="Female" id="" checked>Female
                                    <input type="radio" name="egender" value="Other" id="">Other
                                <?php
                                } else { ?>
                                    <input type="radio" name="egender" value="Male" id="">Male
                                    <input type="radio" name="egender" value="Female" id="">Female
                                    <input type="radio" name="egender" value="Other" id="" checked>Other
                            <?php }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth
                        </td>
                        <td>
                            <input type="tel" name="edate" id="date"  value="<?php echo $_SESSION['date']; ?>" size="1" onkeyup="dateCheck()" onblur="dateCheck()"> /
                            <input type="tel" name="emonth" id="month"  value="<?php echo $_SESSION['month']; ?>" size="1" onkeyup="monthCheck()" onblur="monthCheck()"> /
                            <input type="tel" name="eyear" id="year"  value="<?php echo $_SESSION['year']; ?>" size="1" onkeyup="yearCheck()" onblur="yearCheck()"><i> (dd/mm/yy)</i>

                            <span class="error">* <?php echo $ddErr; ?></span>
                            <span class="error">* <?php echo $mmErr; ?></span>
                            <span class="error">* <?php echo $yyyyErr; ?></span>

                           <br><span id="msg7"> </span>
                            <br><span id="msg8"> </span>
                            <br><span id="msg9"> </span>


                            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td>:
                            <?php
                            if (!empty($_SESSION['dept'])) {
                                if ($_SESSION['dept'] == "CSE") { ?>
                                    <input type="radio" name="edept" value="CSE" id="" checked>CSE
                                    <input type="radio" name="edept" value="EEE" id="">EEE
                                    <input type="radio" name="edept" value="BBA" id="">BBA
                                <?php
                                } else if ($_SESSION['dept'] == "EEE") { ?>
                                    <input type="radio" name="edept" value="CSE" id="">CSE
                                    <input type="radio" name="edept" value="EEE" id="" checked>EEE
                                    <input type="radio" name="edept" value="BBA" id="">BBA
                                <?php
                                } else { ?>
                                    <input type="radio" name="edept" value="CSE" id="">CSE
                                    <input type="radio" name="edept" value="EEE" id="">EEE
                                    <input type="radio" name="edept" value="BBA" id="" checked>BBA
                            <?php }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                   
                
                    <tr>
                        <td>Profile Picture</td>
                        <td> <img src="uploads/<?php echo $_SESSION['photo'] ?>" height="200px" weidth="200px" alt=""></td>
    </td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
    <tr>
        <td>Upload new picture</td>
        <td><input type="file" name="photo"></td>
        </td>
    </tr>
    <tr>
        <Td><br></Td>
    </tr>
    <tr>
        <td><input type="submit" name="change" value="Submit"></td>
    </tr>
    </table>
    </form>
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