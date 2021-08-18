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
    <tr>
    <td colspan="3" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>QUERIES</h2>
                </b></legend>
            <table border="1px" width="100%">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Queries</th>
            </tr>    
                        <?php
                        $inp = file_get_contents('contact.json');
                        if ($inp == ""){
                            echo "Nothing to show";
                        }
                        else{
                            $temp = json_decode($inp, true);
 
                        foreach ($temp as $key1 => $value1) {
                        ?>
                            <td><?php echo $temp[$key1]['name']; ?></td>
                            <td><?php echo $temp[$key1]['email']; ?></td> 
                            <td><?php echo $temp[$key1]['subject']; ?></td>
                            <?php
                            }
                        }?>
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