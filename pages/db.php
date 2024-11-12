<?php
$servername = "MySQL-8.2";
$username = "root";
$password = "";
$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

function getConnectionStatus() {
    global $conn;
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } else {
        echo "Успех";
    }
}
