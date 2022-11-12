<?php

// email : shahanur@email.com
// password: 1234' OR '1=1
// Starting URL : http://localhost/dashboard/CSD/Shahanur/index.php?error=
 
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
