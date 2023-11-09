<?php
//sign up part
if (isset($_POST['checkuser'])) 
{
    echo "working";
    $name = $_POST["name"];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat']; 

    require_once "database.php";
    require_once "functions.php";

    if(emptyInputSignup($name, $email, $username, $psw, $psw_repeat) !== false)
    {
        header("location: signup.php?error=emptyinput");
        //echo "<script>alert('".emptyInputSignup()."');</script>";
        exit();
    }
    
    if(invalidUid($username) !== false)
    {
        header("location: signup.php?error=invalidUserName");
        //echo "<script>alert('".emptyInputSignup()."');</script>";
        exit();
    }
    if(invalidEmail($email) !== false)
    {
        header("location: signup.php?error=InvalidEmail");
        //echo "<script>alert('".emptyInputSignup()."');</script>";
        exit();
    }
    if(pwdMatch($psw, $psw_repeat) !== false)
    {
        header("location: signup.php?error=Passworddontmatch");
        //echo "<script>alert('".emptyInputSignup()."');</script>";
        exit();
    }
    if(uidExists($conn, $username, $email) !== false)
    {
        header("location: signup.php?error=usernameTaken");
        //echo "<script>alert('".emptyInputSignup()."');</script>";
        exit();
    }
    createUser($conn, $name, $email, $username, $psw);
    
}
else //this will prevent the user from directly accessing this file unless he/she uses the correct way
{
    header("location: index.php");
}

//login part
if (isset($_POST["loginuser"]))
{
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    echo "Username: ".htmlspecialchars($uname)."<br>";
    echo "Password: ".htmlspecialchars($psw);
}