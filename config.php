<?php
define('DB_SERVER', 'rdbms.strato.de');
define('DB_USERNAME', 'U3928608');
define('DB_PASSWORD', 'Pncp123@@@');
define('DB_NAME', 'DB3928608');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>