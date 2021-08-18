<?php
session_start();
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
    

<!-- <li><ahref="queries.php">View Queries</a></li> -->


    <!-- <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="editProfile.php">Edit Profile</a></li>
        <li><a href="changePass.php">Change Password</a></li>
        <li><a href="all.php">View All Profiles</a></li>
        <li><a href="search.php">Search an User</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul> -->
    <!-- </td> -->

<tr>
    <td colspan="3" rowspan="2"><b>
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