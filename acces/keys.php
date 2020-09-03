<?php

define('SERVER','localhost');
define('DATABASE','hicoo158_si');
define('USER','hicoo158_dbadmin');
define('PASS','Gooroo2b2020');

$mysqli = new mysqli(SERVER,USER,PASS,DATABASE);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";




//$mysqli = new mysqli("127.0.0.1", "admin", "password", "admin", 3306);
//if ($mysqli->connect_errno) {
//  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

//echo $mysqli->host_info . "\n";



