<?php 

if(isset($_POST["submit"]))

$username = $_POST["uid"];
$pwd = $_POST["pwd"];

require 'dbh.inc.php';
require 'functions.inc.php';
?>