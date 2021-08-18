<?php
session_start();
require_once('model/model.php');
if (isset($_SESSION['flag'])) {

?>


    <?php
    include('header.php');
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
                    <h2>ALL PROFILES</h2>
                </b></legend>
            <table border="1px" width ="100%">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Postition</th>
                <th>Department</th>
                <th>ID</th>
                <th>Picuture</th>
              </tr>
              <?php
                        $result = showAllUsers();

                        foreach ($result as $key1 => $value1) {
                        ?>
              <tr>
                <td><?php echo $result[$key1]['Name']; ?></td>
                <td><?php echo $result[$key1]['Email']; ?></td>
                <td><?php echo $result[$key1]['Gender']; ?></td>
                <td><?php echo $result[$key1]['Birth_date'] . "/";
                                                echo $result[$key1]['Birth_month'] . "/";
                                                echo $result[$key1]['Birth_year']; ?></td>
                <td><?php echo $result[$key1]['User_type']; ?></td>
                <td><?php echo $result[$key1]['Dept']; ?></td>
                <td><?php echo $result[$key1]['ID']; ?></td>
                <td><img src="uploads/<?php echo $result[$key1]['Photo'] ?>" height="200px" weidth="200px" alt=""></td>
              </tr>
              <?php
                        } ?>
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