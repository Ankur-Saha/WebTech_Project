<?php
include '../Controller/session_header.php'
?>
<!DOCTYPE html>
<html>
 <script type="text/javascript" src="../Asset/JS/script.js"> </script>
  <body>
<?php 
    include "Header.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="../Controller/findUser.php">
      <h1>SEARCH FOR Student</h1>
      <input type="text" name="user_name" onkeyup="ajax()"/>
      <input type="submit" name="findUser" value="Search"/>
    </form>
    
    



  </body>
</html>
<?php 
    include "Footer.php";

?>