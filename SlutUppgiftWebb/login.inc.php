<?php 

if(isset($_POST["submit"])) {

$username = $_POST["uid"];
$pwd = $_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'Functions.inc.php';

if (emptyInputLogin($username, $pwd) !== false){
    header("location: ../SlutUppgiftWebb/Loggain.php?error=emptyInput");
    exit();

}

else{
    header("location: ../SlutUppgiftWebb/Loggain.php?error=none");
    exit();
}

}
?>