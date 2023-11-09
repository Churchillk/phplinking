<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<div id="id01" class="modal">
  <form class="modal-content animate" action="process_login.php" method="post">
      <div class="imgcontainer">
        <img src="img_avatar2.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit" name="loginuser">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <a href="signup.php"><button type="button" class="cancelbtn">Sign up</button></a>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
  </form>
</div>
<script src="b.js"></script>
</body>
</html>
