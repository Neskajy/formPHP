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
        <form class="form" action="pages/register.php" method="post">
            <input type="text" class="input firstname" placeholder="Логин" name="login">
            <input type="password" class="input password" placeholder="Пароль" name="password">
            <!-- minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
            <input type="password" class="input password" placeholder="Повторите пароль" name="passwordRepeat">
            <button type="submit" class="submit">Зарегистрироваться</button>
        </form>
        <button class="SwitchUserStatus">
            <span>У вас уже есть аккаунт?</span>
        </button>
    </div>

    <script src="js/index.js"></script>
</body>

</html>