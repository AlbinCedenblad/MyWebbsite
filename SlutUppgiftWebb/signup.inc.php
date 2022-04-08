<?php
if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'Functions.inc.php';

    

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../SlutUppgiftWebb/CreateAccount.php?error=emptyInput");
        exit();
 
    }

    /*

    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invalidUid");
        exit();
 
    }
    */

    if (invalidEmail($email) !== false){
        header("location: ../SlutUppgiftWebb/CreateAccount.php?error=invalidEmail");
        exit();
 
    }
   
    if (pwdMatch($pwd, $pwdRepeat) !== false){
    header("location: ../SlutUppgiftWebb/CreateAccount.php?error=passwordsdontmatch");
    exit();
    }
 
    if (uidExists($conn, $username, $username) !== false){
        header("location: ../SlutUppgiftWebb/CreateAccount.php?error=usernameOrEmailExists");
        exit();

    }
    
 
     createUser($conn, $email, $name, $username, $pwd, $pwdRepeat);
 

   
   
}
else{
    header("location: ../SlutUppgiftWebb/CreateAccount.php?error=none");
    exit();

}
?>