<?php

include('header.php');

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action='manager_login_check.php' method='POST' class="form-sample">
      <h2>Log In</h2>
      
      <label>Email</label>
      <input type="text" name="email" placeholder="User Email" class="form-control"><br>

      <label>Password</label>
      <input type="password" name="password" placeholder="Password" class="form-control"><br>

      <input Name='btnlogin' value='Login' type="submit" class="btn btn-success mr-2">
      
       <button class="btn btn-light"><a href='index.php?id=$id' class="text-dark">Cancel</a></button>

     </form>
</body>
</html>



</form>
<?php 
include('footer.php');
?>