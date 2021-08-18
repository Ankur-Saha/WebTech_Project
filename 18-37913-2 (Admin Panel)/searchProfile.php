<?php
session_start();
require_once('controller/search_validation.php');
include('header.php');
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
    <tr>
    <td colspan="3" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>SEARCHED PROFILE</h2>
                </b></legend>
            <table border="0" width="100%">
                <tr>
                    <td>
                        Name : <?php echo $_SESSION['sname']; ?>
                    </td>
                    <td rowspan=8 align="center">
                        <img src="uploads/<?php echo $_SESSION['sphoto'] ?>" height="200px" weidth="200px" alt=""><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email : <?php echo $_SESSION['semail']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender : <?php echo $_SESSION['sgender']; ?>
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
                                        echo $_SESSION['sdate'] . "/";
                                        echo $_SESSION['smonth'] . "/";
                                        echo $_SESSION['syear'];
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
                        Department : <?php echo $_SESSION['sdept']; ?>
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
            Position : <?php echo $_SESSION['sposition']; ?>
        </td>
    </tr>
    <tr>
        <td><br></td>

        <tr>
        <td>
            <center><a href="editSearchedProfile.php">Edit Profile</a></center>
        </td>
        <td>
        <center><a href="controller/delete_searched_profile.php?id=<?php echo $_SESSION['sid']?>" onclick="return confirm('Are you sure want to delete this ?')">Delete Profile</a></center>
        </td>

    </tr>
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