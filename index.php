<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOL</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="registration">
        <a class="SwitchUserStatus">Войти в существующий аккаунт</a>
        <form class="form" action="pages/register.php" method="post">
            <input type="text" class="input firstname" placeholder="Логин" name="login">
            <input type="email" class="input email" placeholder="Email" name="email">
            <input type="password" class="input password" placeholder="Пароль" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password">
            <input type="password" class="input password" placeholder="Повторите пароль" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="passwordRepeat">
            <button type="submit" class="submit">Зарегистрироваться</button>
        </form>
    </div>

    <script src="js/index.js"></script>
</body>

</html>