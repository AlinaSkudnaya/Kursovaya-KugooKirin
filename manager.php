
<?php session_start();?>
<?php echo "Менеджерская панель";?>
<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
   <h2> Выбкрите что хотите отредактировать:</h3>
   <a  href="crud/FAQ.php">Работа с FAQ</a><br>
   <a  href="crud/Team.php">Работа с командой</a><br>
   <a  href="crud/Hits.php">Работа с хитами продаж</a><br>
   <a  href="crud/Budjet.php">Работа с бюджетными моделями</a><br>
   <a  href="crud/Top.php">Работа с топовыми моделями</a><br>
   <a  href="crud/Nov.php">Работа с новинками</a><br>
   <a  href="crud/More.php">Работа с другими моделями</a><br>
   <a  href="crud/Photos.php">Обновление фото</a><br>
   <a  href="crud/Photos.php">Работа с заказами</a><br>
   <a  href="crud/Photos.php">Работа с менеджерами</a><br>


   <a  href="zayavki/Application.php">Работа с заявками</a><br>
   <a  href="zayavki/Rassrochka.php">Работа с самокатами в рассрочку</a><br>
</body>
</html>