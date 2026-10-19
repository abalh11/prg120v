<?php
/* Tilkobling til MySQL-databasen */

$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$db = mysqli_connect($host, $username, $password, $database);

if (!$db) {
    die("Kunne ikke koble til databasen");
}
?>