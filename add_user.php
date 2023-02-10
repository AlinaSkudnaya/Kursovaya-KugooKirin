<?php

//Добавление нового продукта
class add_user
{

}

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';


/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
$login = $_POST['login'];
$password = $_POST['password'];



/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES (NULL, '$login', '$password', 'user')");

/*
 * Переадресация на главную страницу
 */

header('Location: login.php');