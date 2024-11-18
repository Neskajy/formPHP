<?php

require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

function checkFormDataStatus()
{
    global $login, $password, $connection;
    if (empty($login) && (empty($password))) {
        echo "Заполните все поля";
    }
}

checkFormDataStatus();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login/table.css">
</head>

<body>
    <pre>
        <?php
        $passwordDB = getTableObject($connection, "SELECT * FROM `users`");    
        $getStringFromLogin = getTableObject($connection, "SELECT password FROM `users` WHERE login = '$login'");
        $getLogin = getTableObject($connection, "SELECT login FROM `users` WHERE login = '$login'");
        print_r($getStringFromLogin);
        print_r($getLogin);
        function isLoginExist() {
            global $getLogin;
            if (count($getLogin) > 0) {
                return True;
            } elseif (count($getLogin) > 1) {
                var_dump('В одной таблице не может быть два уникальных ключа');
            }
        }
        function isPasswordsEqual() {
            global $getStringFromLogin, $password;

            if (password_verify($password, $getStringFromLogin[0][0])) {
                return True;
            }
        }
        ?>
    </pre>
</body>

</html>

