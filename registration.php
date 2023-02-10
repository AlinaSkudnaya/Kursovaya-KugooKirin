
<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */
class registration
{

}
require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>

<body>


    <h3>Зарегистрироваться</h3>
    <form action="add_user.php" method="post">
        <p>Логин:</p>
        <input type="text" name="login">
        <p>Пароль:</p>
        <input type="password" name="password">

        <button type="submit">Зарегистрироваться
    </form>
</body>
</html>