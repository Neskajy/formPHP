<?php

require_once('db.php');

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

function sendData() {
    global $login, $email, $password, $passwordRepeat, $conn;
    $sql = 
    "INSERT INTO `users` 
        (login, email, password)
    VALUES ('$login', '$email', '$password')";
        
    $conn -> query($sql);
}

if (empty($login) || empty($email) || empty($password) || empty($passwordRepeat)) {
    echo "Заполните все поля";
} else {
    if ($password != $passwordRepeat) {
        echo "Введенные пароли не совпадают";
    } else {
        sendData();
        getConnectionStatus();
    }
}
