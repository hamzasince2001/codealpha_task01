<?php include'header.php'?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form action="process_login.php" method="post">
    <div class="input-group">
  <label for="loginid"></label>
  <input type="text" id="loginid" name="loginid" required placeholder="Enter Login ID">
</div>
<div class="input-group">
  <label for="password"></label>
  <input type="password" id="password" name="password" required placeholder="Enter Password">
</div>      
<button type="submit" class="login-btn">Login</button>
    </form>
    <div class="signup-link">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
  </div>
</body>
</html>
<?php  include 'footer.php';