<?php
session_start();
include('header.php');
require_once('controller/change_pass_validation.php');
if (isset($_SESSION['flag'])) {
?>


<tr>
    <td colspan="3" rowspan="1">
    <b>
        <h2> &nbsp;&nbsp;Account</h2>
    </b>

 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editProfile.php">Edit Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="changePass.php">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all.php">View All Profiles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search User</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="queries.php">View Queries</a>
      </li> 
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
      </li>    
    </ul>
    
  </div>  
</nav>
    </td>
    </tr>
    <!-- <b>
        <h2>&nbsp;&nbsp;Account</h2>
    </b>
    <hr>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="editProfile.php">Edit Profile</a></li>
        <li><a href="changePass.php">Change Password</a></li>
        <li><a href="all.php">View All Profiles</a></li>
        <li><a href="search.php">Search an User</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </td> -->
    <tr>
    <td colspan="3" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>CHANGE PASSWORD</h2>
                </b></legend>
            <form action="" method="post">
                <table width=40%>
                    <tr>
                        <td>Current Password</td>
                        <td>: <input type="text" name="cpass"> </td>
                        <span class="error"><?php echo $cpassErr; ?></span>
                        <span id="msg14"> </span>
                    </tr>
                    <tr>
                        <td><label for="" style="color: green;">New Password</label></td>
                        <td>: <input type="text" name="npass" id="pass" onkeyup="passCheck()" onblur="passCheck()"></td>
                        <span class="error"><?php echo $npassErr; ?></span>
                        <span id="msg4"> </span>
                    </tr>
                    <tr>
                        <td><label for="" style="color: red;">Retype New Password</label></td>
                        <td>: <input type="text" name="rpass" id="cPass" onkeyup="cPassCheck()" onblur="cPassCheck()"></td>
                        <span class="error"><?php echo $rpassErr; ?></span>
                        <br><span id="msg5"> </span>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit">
                        </td>
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