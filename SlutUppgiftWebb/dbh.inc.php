<?php 
       
       $serverName = "localhost:3307";
       $dBUsername = "root";
       $dBPassword = "";
       $dBName = "slutuppgiftwebb";
       //Conn är en conection som används när jag vill in i databasen och de ovanstånde variablerna innerhåller den relevanta informationen som behövs för att komma in i databasen
       $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);



