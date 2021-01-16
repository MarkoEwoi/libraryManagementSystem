<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql304.epizy.com');
/* hussein the server name remain the localhost but you have to change the user name if it is not root */
define('DB_USERNAME', 'epiz_27142540');
define('DB_PASSWORD', '9WZOSWOoSaj5F');/*this is you sql password*/
define('DB_NAME', 'epiz_27142540_demo');/*Create this database as i stated in mysql file i shared together with the php file*/
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

