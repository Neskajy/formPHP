<?php

require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

function receiveData() {
    global $login, $password, $conn;

    if (!empty($login) && !(empty($password))) {
        $sql =
        "SELECT * from `users` 
            WHERE login = '$login' AND password = '$password'";
        $result = $conn -> query($sql);

        if ($result -> num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Добро пожаловать, " . $row['login'];
            }
        } else {
            echo "Неверный логин или пароль";
        }
    } else {
        echo "Заполните все поля";
    }
}

receiveData();

