<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ID329156_cryptozen.db.webhosting.be');
define('DB_USERNAME', 'ID329156_cryptozen');
define('DB_PASSWORD', 'Thomasmore2021');
define('DB_NAME', 'ID329156_cryptozen');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);




function GetQuery($sql)
{
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $result = $link->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $link->close();
    return $rows;
}


// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
