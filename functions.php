<?php
function emptyInputSignup($name, $email, $username, $psw, $psw_repeat)
{
    $result = false;
    if(empty($name) || empty($email) || empty($username) || empty($psw) || empty($psw_repeat)) 
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function pwdMatch($psw, $psw_repeat)
{
    $result = false;
    if ($psw !== $psw_repeat) 
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    //handling sql-injection
    $sql = "SELECT * FROM users WHERE userUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: signup.php?error=nicetry");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultDAta = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if($row = mysqli_fetch_assoc($resultDAta))
    {
        return $row;
    }
    else
    {
        $result = false;
        return $result;
    }
    //mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $psw)
{
    //handling sql-injection
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: signup.php?error=nicetry");
        exit();
    }
    //hashing password
    $hashedpwd = password_hash($psw, PASSWORD_DEFAULT);
    //done hashing
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: signup.php?error=none");
}