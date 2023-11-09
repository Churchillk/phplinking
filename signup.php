<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="signup.css">
    <title></title>
  </head>
<body>
<div id="id01" class="modal">
  <form class="modal-content" action="process_login.php" method="post">
        <div class="container">
        <center><h1>Sign Up</h1></center>
        <hr>
        <label for="name"><b>FullName</b></label>
        <input type="text" placeholder="Enter full name" name="name" required>
        <label for="uid"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uid" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
        
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <a href="index.php"><button type="button" class="cancelbtn">Login</button></a>
            <button type="submit" class="signupbtn" name="checkuser">Submit</button>
        </div>
        </div>
  </form>
</div>
</body>
<script src="b.js"></script>
</html>
