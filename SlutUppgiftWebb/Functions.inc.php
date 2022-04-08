<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true; 

    }

    else {
        $result = false; 
    }
    return $result;
}



function invalidUid($username){
    
    if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
        $result = true; 

    }
    else {
        $result = false; 
    }
    return $result; 
}



function invalidEmail($email) {
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true; 

    }
    else {
        $result = false; 
    }
    return $result; 
}

function pwdMatch($pwd, $pwdRepeat){
    
    if ($pwd !== $pwdRepeat) {
        $result = true; 
    }
    else {
        $result = false; 
    }
    return $result; 
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../SlutUppgiftWebb/Loggain.php?error=stmtfaild");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;

    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function  createUser($conn, $email, $name, $username, $pwd, $pwdRepeat){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../CreateAccount.php?error=stmtfaild");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../SlutUppgiftWebb/CreateAccount.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
   
    if ( empty($username) || empty($pwd)){
        $result = true; 

    }

    else {
        $result = false; 
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false) {
        header("location: ../SlutUppgiftWebb/Loggain.php?error=wronglogin");
        exit(); 
    }

    $pwdHashed = $uidExists["userspwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../SlutUppgiftWebb/Loggain.php?error=wrongloin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersuid"];
        header("location: ../SlutUppgiftWebb/index.html");
        exit();
    }
}


?>
