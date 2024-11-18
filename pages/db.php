<?php
require_once("login.php");
$serverName = "MySQL-8.2";
$username = "root";
$password = "";
$dbname = "users";

$connection = mysqli_connect($serverName, $username, $password, $dbname);

function getConnectionStatus() {
    global $connection;
    if (!$connection) {
        die("Connection failed" . mysqli_connect_error());
    } else {
        echo "Успех";
    }
}

// getConnectionStatus();

function getTableObject($connection, $query) {

    $strings = mysqli_query($connection, $query);
    $strings = mysqli_fetch_all($strings);

    return $strings;
}