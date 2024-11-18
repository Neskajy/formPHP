<?php

require_once('db.php');

$login = $_POST['login'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$passwordRepeat = password_hash($_POST['passwordRepeat'], PASSWORD_DEFAULT);
$current_time = time();
$created_at = date('Y-m-d H:i:s', $current_time);
$updated_at;

function sendData() {
    global $login, $password, $connection, $created_at, $updated_at;
    $sql = 
    "INSERT INTO `users` 
        (login, password, isEmailVerified, created_at, updated_at)
    VALUES ('$login', '$password', '0', '$created_at', NOW())";
    
    $connection -> query($sql);
}

if (empty($login) || empty($password) || empty($passwordRepeat)) {
    echo "Заполните все поля";
} else {
    if (password_verify($password, $passwordRepeat)) {
        echo "Введенные пароли не совпадают";
    } else {
        sendData();
        getConnectionStatus();
    }
}
