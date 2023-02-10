<?php require_once'connect.php';?>
<?php require_once'scripts.php';?>
<?php  require_once'./config/connect.php';
class login
{

}
?>

<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Электросамокаты KugooKirin с доставкой по всей РБ</title>
    <meta name="description" content="Курсовая работа" />
    
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
  

    <link rel="icon" href="/img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/popup_style.css" />


  </head>
    <body>
        <!-- HTML модального окна  -->

                <div class="modal-header">
                <h3 class="modal-title">Для входа введите данные</h3>
                </div>
                <div class="modal-body">    
                    <form class="form_phone" method="post" action="/authorization/vhod.php">
                        <h4 class="title_form1">Введите логин:</h4>
                        <input  type="text" name="login"class="input_text" />

                        <h4 class="title_form">Введите пароль</h4>
                        <input  type="password"   name="password" class="input_text" />
                    

                        <button  class="button" type="submit" name="submit_btn" value="Войти">Войти</button>
                    </form>
                    <a  href="./registration.php">Регистарация</a><br>
        
                </div>
            </div>


    </body>
</html>