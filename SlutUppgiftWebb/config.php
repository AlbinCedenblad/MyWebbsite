<?php

	
	$dbhost = 'locahost:3307';
	$dbname = 'slutuppgiftwebb';
	$dbuser = 'root';
	$dbpass = '';


	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch( PDOException $e ){
		echo $e->getMessage();
	}
	


?>