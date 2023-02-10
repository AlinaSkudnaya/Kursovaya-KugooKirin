<?php require_once'connect.php';?>
<?php require_once'scripts.php';?>
<?php  require_once'./config/connect.php';
class index
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
    <!-- Подключение jQuery плагина Masked Input -->
    <script src="jquery.maskedinput.min.js"></script>
    <script src="main.js"></script>

  </head>
  <body>
 
    <div class="header">

        <div class="logo">
            <img class ="logo_image" src="/images/logo.svg" height="45px" width="60px">
            <h5 class="logo_text">
               Электросамокаты бренда KugooKirin
               с официального завода Jilong
               с доставкой по всей РБ
            </h5>
        </div>

        
        <div class="time_work">
                <h5 class="work_time_text">
                    <b>Режим работы:</b> <br>10.00-20.00 без выходных
                </h5>
        </div>

        <div class="phone_number">
            <a href="tel:+375333812136"> +375 (33) 381-21-36</a>
        </div>

      
            <a class="btn_consul" href="#openconcul">Заказать консультацию</a>
        

    </div>



    <!-- HTML модального окна  -->
    <div id="openconcul" class="modal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Наш специалист свяжется с Вами<br>
                для бесплатной консультации. <br>
                Заполните, пожалуйста, поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="post" action="/main_action/zayavki.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="phone"  data-validate-field="email" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />

                    <button  class="button" type="submit" name="submit_btn" value="Получить консультацию">
                </form>
    
            </div>
        </div>
        </div>
    </div>

    <div class="menu">
        <li><a class="menu_text" href="#main">Главная</a></li>
        <li><a class="menu_text1" href="#kugoo">Подбор самоката</a></li>
        <li><a class="menu_text1" href="#kugoo">KUGOO</a></li>
        <li><a class="menu_text1" href="">
        <div class="dropdown">
            <a class="dropbtn">Каталог</a>
            <div class="dropdown-content">
                <a href="#hit">Хиты продаж</a>
                <a href="#top">Топовые модели</a>
                <a href="#bud">Бюджетные модели</a>
                <a href="#nov">Новинки лета</a>
                <a href="#more">Больше моделей</a>
            </div>
        </div>
        </a></li>
        <li><a class="menu_text1" href="#advantages">Преимущества</a></li>
        <li><a class="menu_text1" href="#photos">Фото</a></li>
        <li><a class="menu_text1" href="#otzyv">Отзывы</a></li>
        <li><a class="menu_text1" href="#contacts">Конатакты</a></li>
    </div>


    <div id="main" class="main">
        <span class="main_text">Откажитесь от душного общественного транспорта</span>
        <h2 class="description"> Оригинальные электросамокаты KUGOO от 670 BYN 
            с доставкой по всей Беларуси</h2>
        <div class="buttons">
            <a class="btn_podbor" href="#">
                Подобрать самокат
            </a>

            <a class="btn_skidka" href="#openskidka">
                Скидка до 100 BYN
            </a>
        </div>
    </div>


    <!-- HTML модального окна -->
    <div id="openskidka" class="modal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для бронирования скидки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/skidka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <input  class="button" type="submit" name="submit_btn" value="Получить консультацию">
                </form>
    
            </div>
        </div>
        </div>
    </div>

    <div id="kugoo" class="kugoo">
        <div class="kugoo_utp">
        <h1 class="kugoo_text">KUGOO - </h1>
        <h2 class="kugoo_description">  лучшая покупка для лета 2022</h2>
        </div>
        <div class="kugoo_utp">
        <h3 class="utp_desc1">Нажмите на </h3>
        <h4 class="utp_desc2">и узнайте подробнее</h4>
        </div>

        <div class="tooltip">
            <h2 class="prohod_text">Высокая проходимость</h2>
            <div class="circle1"></div>
            <span class="tooltiptext">Высокая проходимость: самокатам KUGOO не страшны песок, грязь и неровности. </span>
        </div>

        <div class="tooltip">
            <h2 class="prohod_text2">Безопасность</h2>
            <div class="circle2"></div>
            <span class="tooltiptext2">Безопасность: усиленная конструкция и отсутсвие травмоопасных деталей.</span>

        </div>

        <div class="tooltip">
            <h2 class="prohod_text3">Экономичность</h2>
            <div class="circle3"></div>
            <span class="tooltiptext3">Экономичность: заряда хватает надолго - более 40 км.</span>

        </div>

        
        <div class="tooltip">
            <h2 class="prohod_text4">Технологичность</h2>
            <div class="circle4"></div>
            <span class="tooltiptext4">Технологичность: несколько скоростных режимов, приборня панель, легкое управление.</span>

        </div>

        
        <div class="tooltip">
            <h2 class="prohod_text5">Выгодная рассрчока</h2>
            <div class="circle5"></div>
            <span class="tooltiptext5">Выгодная рассрочка: рассрочка по картам “Халва”, “Черепаха”, “Fun”, “Карта покупок”, “БПС-Сбербанк BONUS”. </span>

        </div>

        <div class="tooltip">
            <h2 class="prohod_text6">Доставка по всей РБ</h2>
            <div class="circle6"></div>
            <span class="tooltiptext6">Доставка по всей РБ; бесплатная доставка по Минску в день заказа, доставка по всей РБ от 20 BYN.</span>

        </div>

    </div>




    <div class=utp_samokaty>
        <div class="utp_samokaty_text">
            <h2 class="text_utp_samokaty">Хиты продаж этого лета</h2>
            <h2 class="text_utp_samokaty_1">Скидки <br>до 100 BYN</h2>
            <h2 class="text_utp_samokaty_2">Сумка <br>в подарок</h2>
        </div>
    </div>
    <div id="hit" class="hit">
        <div class="samokaty">
        <?php foreach($hit as $hits):?>
            <div class="samokat">
                <h3 class="price_hit"><?php echo $hits->price?></h3>
                <img class="hit_image" src="/images/<?php echo $hits->image?>" width="300px" hight="260px" alt="">
                <div class="about_hit">
                        <h2 class="name_hit"><?php echo $hits->name?></h2>
                        <img class="hit_stars" src="/images/stars.svg" width="118px" hight="16px" alt="">
                </div>
                <div class="about_hit">
                        <h2 class="har_hit">Аккумулятор:</h2>
                        <h2 class="har_hit"><?php echo $hits->battery?></h2>
                </div>
                <div class="about_hit">
                        <h2 class="har_hit">Мощность:</h2>
                        <h2 class="har_hit"><?php echo $hits->power?></h2>
                </div>
                <div class="about_hit">
                        <h2 class="har_hit">Max скорость:</h2>
                        <h2 class="har_hit"><?php echo $hits->speed?></h2>
                </div>
                <div class="about_hit">
                        <h2 class="har_hit">Пробег на 1 заряде:</h2>
                        <h2 class="har_hit"><?php echo $hits->run?></h2>
                </div>
                <a class="btn_zakaz" href="make_order.php?name_samokat=<?= $hits->name ?> ">Заказать</a>
               
            </div>
        <?php endforeach ?>
        </div>  
    </div>
    <div class=rassrochka>
            <h2 class="text_rassrochka">Рассрочка до 4 месяцев: Халва, Черепаха, Карта Fun, Карта Покупок, BONUS.</h2>
            <a href="#openrassrochka">
            <img href="#openrassrochka" class="image_rassrochka" src="/images/rassrochka.svg" width="217px" hight="50px" alt="">
        </a>
    </div>

   
     <!-- HTML модального окна -->
    <div id="openrassrochka" class="modal">
     <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления рассрочки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/rassrochka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <select name="samokat">
                        <option value="Kugoo M4 Pro 18 Ah">Kugoo M4 Pro 18 Ah</option>
                        <option value="Kugoo S3">Kugoo S3</option>
                        <option value="Kugoo M5">Kugoo M5</option>
        
                    </select>
                    <input  class="button" type="submit" name="submit_btn" value="Поулчить самокат в рассрочку">
                    
                  
                </form>
    
                 </div>
            </div>
        </div>
    </div>

    
     <!-- HTML модального окна -->
     <div id="open_samokat_1" class="modal">
    <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления рассрочки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/rassrochka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text"  id="phone" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <h4 class="title_form">Выберите способо доставки:</h4>
                    <select name="sposob">
                        <option value="Kugoo G2 Pro">Самовывоз</option>
                        <option value="Kugoo G-Booster">Доставка</option>
       

                    </select>
                    <input  class="button" type="submit" name="submit_btn" value="Поулчить самокат в рассрочку">
                    
                  
                </form>
    
            </div>
    </div>
    </div>
    </div>







    <hr class="line_samokaty" size="2" width="100%" color="#000000">
    <div class=utp_samokaty>
        <div class="utp_samokaty_text">
            <h2 class="text_utp_samokaty_3">Топовые модели с сидениями</h2>
            <h2 class="text_utp_samokaty_4">Скидки <br>до 100 BYN</h2>
            <h2 class="text_utp_samokaty_5">Сумка <br>в подарок</h2>
        </div>
    </div>
    <?php foreach($top as $tops):?>
    <div id="top"  class="top">
            
                <div class="samokaty_top">
                
                    <div class="samokat_top">
                    
                        <div class="image_top">
                            <img class="top_image" src="/images/<?php echo $tops->image?>" width="475px" hight="360px" alt="">
                        </div>
                        <div class="info_top">
                            <div class="about_top">
                                    <h2 class="top_name"><?php echo $tops->name?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Аккумулятор:</h2>
                                    <h2 class="har_top"><?php echo $tops->battery?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Мощность:</h2>
                                    <h2 class="har_top"><?php echo $tops->power?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Max скорость:</h2>
                                    <h2 class="har_top"><?php echo $tops->speed?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Пробег на 1 заряде:</h2>
                                    <h2 class="har_top"><?php echo $tops->run?></h2>
                            </div>
                            <img class="top_stars" src="/images/stars.svg" width="102px" hight="14px" alt="">

                            <h3 class="price_top"><?php echo $tops->price?></h3>

                            <a class="btn_zakaz" href="make_order.php?name_samokat=<?= $tops->name ?> ">Заказать</a>


                            <h3 class="fraze_top"><?php echo $tops->fraze?></h3>

                        </div>
                       
                    </div>
                    
                 </div>
    </div>
    <?php endforeach ?>
    <div class=rassrochka>
            <h2 class="text_rassrochka">Рассрочка до 4 месяцев: Халва, Черепаха, Карта Fun, Карта Покупок, BONUS.</h2>
            <a href="#openrassrochka_1">
            <img href="#openrassrochka" class="image_rassrochka" src="/images/rassrochka.svg" width="217px" hight="50px" alt="">
        </a>
    </div>


     <!-- HTML модального окна -->
    <div id="openrassrochka_1" class="modal">
    <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления рассрочки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/rassrochka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <select name="samokat">
                        <option value="Kugoo M2">Kugoo M2</option>
                        <option value="Kugoo C1">Kugoo C1</option>
                        <option value="Kugoo M4 Pro 13,5 Ah">Kugoo M4 Pro 13,5 Ah</option>
                        <option value="Kugoo Max Speed">Kugoo Max Speed</option>

                    </select>
                    <input  class="button" type="submit" name="submit_btn" value="Поулчить самокат в рассрочку">
                    
                  
                </form>
    
            </div>
    </div>
    </div>
    </div>




    <div id="advantages"class="advantages">
        <h1 class="adv_text">Самокаты KUGOO — способ весело провести время и быстро доехать до нужного места</h1>

        
        <div class="combo1">

            <div class="adv1">
                <div class="tooltip">
                            <div class="uslugi">
                                <img src="/images/support 1.svg" width="46px" height="46px" alt="">
                                <h3 class="usl_text">Дополнительные услуги</h3>
                                <img src="/images/Polygon.svg" alt="">
                                <span class="tooltiptext11">При необходимости мы сделаем для Вашего самоката гидроизоляцию и настройку. </span>
                            </div>
                </div>
                <hr class="line1" width="330px" color="#91FE23" size="3px">
            </div>


            <div class="adv1">
                <div class="tooltip">
                            <div class="uslugi">
                                <img src="/images/kick-scooter 1.svg" width="46px" height="46px" alt="">
                                <h3 class="usl_text">Тест-драйв</h3>
                                <img src="/images/Polygon.svg" alt="">
                                <span class="tooltiptext11">Бесплатно опробовав разные модели, Вы сможете безошибочно определиться с выбором для себя.</span>
                            </div>
                </div>
                <hr class="line1" width="330px" color="#91FE23" size="3px">
            </div>

            <div class="adv1">
                <div class="tooltip">
                            <div class="uslugi">
                                <img src="/images/shipped 1.svg" width="46px" height="46px" alt="">
                                <h3 class="usl_text">Доставка по всей РБ</h3>
                                <img src="/images/Polygon.svg" alt="">
                                <span class="tooltiptext11">По Минску доставим самокат в день заказа в течение 3-4 часов (при условии, что нет дополнительных услуг - гидроизоляция, настройка), по Беларуси доставка займет от 1 дня (в зависимости от дальности).</span>
                            </div>
                </div>
                <hr class="line1" width="330px" color="#91FE23" size="3px">
            </div>

            
        </div>
            
        <div class="combo1">

            <div class="adv1">
                <div class="tooltip">
                            <div class="uslugi">
                                <img src="/images/accountable 1.svg" width="46px" height="46px" alt="">
                                <h3 class="usl_text">Индивидуальный подбор</h3>
                                <img src="/images/Polygon.svg" alt="">
                                <span class="tooltiptext11">Поможем с выбором самоката, который подходит именно под Ваши запросы.</span>
                            </div>
                </div>
                <hr class="line1" width="330px" color="#91FE23" size="3px">
            </div>


            <div class="adv1">
                <div class="tooltip">
                            <div class="uslugi">
                                <img src="/images/calendar 1.svg" width="46px" height="46px" alt="">
                                <h3 class="usl_text">Выгодная рассрочка</h3>
                                <img src="/images/Polygon.svg" alt="">
                                <span class="tooltiptext11">Рассрочка до 4 месяцев: Халва, Черепаха, Карта Fun, Карта Покупок, BONUS. </span>
                            </div>
                </div>
                <hr class="line1" width="330px" color="#91FE23" size="3px">
            </div>

            <div class="adv1">
                <div class="tooltip">
                            <div class="uslugi">
                                <img src="/images/guarantee-certificate 1.svg" width="46px" height="46px" alt="">
                                <h3 class="usl_text">Гарантия</h3>
                                <img src="/images/Polygon.svg" alt="">
                                <span class="tooltiptext11">Даем официальную гарантию на 12 месяцев.</span>
                            </div>
                </div>
                <hr class="line1" width="330px" color="#91FE23" size="3px">
            </div>

            
        </div>
          
    
       
    </div>


    <div class="team">
        <h1 class="team_text">Наша дружная команда</h1>

        
        <div class="combo1">

        <?php foreach($team_people as $peoples):?>
                <div class="people">
                    <img src="/images/<?php echo $peoples->image?> " width="216px" height="216px" alt="">
                    <h3 class="usl_text1"><?php echo $peoples->name?></h3>
                    <h3 class="usl_text2"><?php echo $peoples->profession?></h3>
                    <h3 class="usl_text3"><?php echo $peoples->description?></h3>
                </div>      
        <?php endforeach ?>
  
        </div>
            
       
    </div>



    <div class=utp_samokaty>
        <div class="utp_samokaty_text">
            <h2 class="text_utp_samokaty_3">Бюжетные модели самокатов</h2>
            <h2 class="text_utp_samokaty_4">Скидки <br>до 100 BYN</h2>
            <h2 class="text_utp_samokaty_5">Сумка <br>в подарок</h2>
        </div>
    </div>
    <div id="bud" class="hit">
        <div class="samokaty">
        <?php foreach($bud as $buds):?>
            <div class="samokat_bud">
                <h3 class="price_bud"><?php echo $buds->price?></h3>
                <img class="bud_image" src="/images/<?php echo $buds->image?>" width="220px" hight="210px" alt="">
                <div class="about_bud">
                        <h2 class="name_bud"><?php echo $buds->name?></h2>
                        <img class="bud_stars" src="/images/stars.svg" width="102px" hight="14px" alt="">
                </div>
                <div class="about_bud">
                        <h2 class="har_bud">Аккумулятор:</h2>
                        <h2 class="har_bud"><?php echo $buds->battery?></h2>
                </div>
                <div class="about_bud">
                        <h2 class="har_bud">Мощность:</h2>
                        <h2 class="har_bud"><?php echo $buds->power?></h2>
                </div>
                <div class="about_bud">
                        <h2 class="har_bud">Max скорость:</h2>
                        <h2 class="har_bud"><?php echo $buds->speed?></h2>
                </div>
                <div class="about_bud">
                        <h2 class="har_bud">Пробег на 1 заряде:</h2>
                        <h2 class="har_bud"><?php echo $buds->run?></h2>
                </div>
                <a class="btn_zakaz_bud" href="make_order.php?name_samokat=<?= $buds->name ?> ">Заказать</a>
               
            </div>
        <?php endforeach ?>

           
        </div>  
    </div>
    <div class=rassrochka>
            <h2 class="text_rassrochka">Рассрочка до 4 месяцев: Халва, Черепаха, Карта Fun, Карта Покупок, BONUS.</h2>
            <a href="#openrassrochka_2">
            <img href="#openrassrochka" class="image_rassrochka" src="/images/rassrochka.svg" width="217px" hight="50px" alt="">
        </a>
    </div>


     <!-- HTML модального окна -->
    <div id="openrassrochka_2" class="modal">
    <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления рассрочки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/rassrochka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <select name="samokat">
                        <option value="Kugoo First">Kugoo First</option>
                        <option value="Kugoo S1">Kugoo S1</option>
                        <option value="Kugoo S3">Kugoo S3</option>
                        <option value="Kugoo S1 Pro">Kugoo S1 Pro</option>

                    </select>
                    <input  class="button" type="submit" name="submit_btn" value="Поулчить самокат в рассрочку">
                    
                  
                </form>
    
            </div>
    </div>
    </div>
    </div>


    <div class="FAQ">
        <h1 class="FAQ_utp"> Мы постарались ответить на часто задаваемые вопросы, чтобы Вам не пришлось искать ответы в интернете</h1>
    
        <hr size="1" width="92%">
        <?php foreach($quest as $questi):?>

            <details>
                <summary> <?php echo $questi->question?> </summary>
                <p> <?php echo $questi->answer?> </p>
            </details>
            <hr size="1" width="92%">

        <?php endforeach ?>


    </div>



   <hr class="line_samokaty" size="2" width="100%" color="#000000">
    <div class=utp_samokaty>
        <div class="utp_samokaty_text">
            <h2 class="text_utp_samokaty_3">Новинки лета 2022</h2>
            <h2 class="text_utp_samokaty_4">Скидки <br>до 100 BYN</h2>
            <h2 class="text_utp_samokaty_5">Сумка <br>в подарок</h2>
        </div>
    </div>
    <?php foreach($nov as $novs):?>
    <div id="nov"  class="top">
            
                <div class="samokaty_top">
                
                    <div class="samokat_top">
                    
                        <div class="image_top">
                            <img class="top_image" src="/images/<?php echo $novs->image?>" width="475px" hight="360px" alt="">
                        </div>
                        <div class="info_top">
                            <div class="about_top">
                                    <h2 class="top_name"><?php echo $novs->name?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Аккумулятор:</h2>
                                    <h2 class="har_top"><?php echo $novs->battery?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Мощность:</h2>
                                    <h2 class="har_top"><?php echo $novs->power?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Max скорость:</h2>
                                    <h2 class="har_top"><?php echo $novs->speed?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Пробег на 1 заряде:</h2>
                                    <h2 class="har_top"><?php echo $novs->run?></h2>
                            </div>
                            <img class="top_stars" src="/images/stars.svg" width="102px" hight="14px" alt="">

                            <h3 class="price_top"><?php echo $novs->price?></h3>

                            <a class="btn_zakaz" href="make_order.php?name_samokat=<?= $novs->name ?> ">Заказать</a>

                            <h3 class="fraze_top"><?php echo $novs->fraze?></h3>

                        </div>
                       
                    </div>
                    
                 </div>
            
          
    </div>
    <?php endforeach ?>
    <div class=rassrochka>
            <h2 class="text_rassrochka">Рассрочка до 4 месяцев: Халва, Черепаха, Карта Fun, Карта Покупок, BONUS.</h2>
            <a href="#openrassrochka_3">
            <img href="#openrassrochka" class="image_rassrochka" src="/images/rassrochka.svg" width="217px" hight="50px" alt="">
        </a>
    </div>


     <!-- HTML модального окна -->
    <div id="openrassrochka_3" class="modal">
    <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления рассрочки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/rassrochka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text" name="phone"  id="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <select name="samokat">
                        <option value="Kugoo HX Pro">Kugoo HX Pro</option>
                        <option value="Kugoo M4">Kugoo M4</option>
                        <option value="Kugoo G1">Kugoo G1</option>
                        <option value="Kugoo ES3">Kugoo ES3</option>

                    </select>
                    <input  class="button" type="submit" name="submit_btn" value="Поулчить самокат в рассрочку">
                    
                  
                </form>
    
            </div>
    </div>
    </div>
    </div>
    


    <div id="photos"class="photos">
    <?php foreach($photo as $photos):?>
        <label for="pic-1" class="lightbox"><img src="/images/<?php echo $photos->image?>"/></label>
        <?php endforeach ?>
    </div>
   


    <hr class="line_samokaty" size="2" width="100%" color="#000000">
    <div class=utp_samokaty>
        <div class="utp_samokaty_text">
            <h2 class="text_utp_samokaty_3">Больше моделей Kugoo</h2>
            <h2 class="text_utp_samokaty_4">Скидки <br>до 100 BYN</h2>
            <h2 class="text_utp_samokaty_5">Сумка <br>в подарок</h2>
        </div>
    </div>
    <?php foreach($more as $mores):?>
    <div id="more"  class="top">
                <div class="samokaty_top">
                
                    <div class="samokat_top">
                    
                        <div class="image_top">
                            <img class="top_image" src="/images/<?php echo $mores->image?>" width="475px" hight="360px" alt="">
                        </div>
                        <div class="info_top">
                            <div class="about_top">
                                    <h2 class="top_name"><?php echo $mores->name?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Аккумулятор:</h2>
                                    <h2 class="har_top"><?php echo $mores->battery?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Мощность:</h2>
                                    <h2 class="har_top"><?php echo $mores->power?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Max скорость:</h2>
                                    <h2 class="har_top"><?php echo $mores->speed?></h2>
                            </div>
                            <div class="about_top">
                                    <h2 class="har_top">Пробег на 1 заряде:</h2>
                                    <h2 class="har_top"><?php echo $mores->run?></h2>
                            </div>
                            <img class="top_stars" src="/images/stars.svg" width="102px" hight="14px" alt="">

                            <h3 class="price_top"><?php echo $mores->price?></h3>

                            <a class="btn_zakaz" href="make_order.php?name_samokat=<?= $mores->name ?> ">Заказать</a>


                            <h3 class="fraze_top"><?php echo $mores->fraze?></h3>

                        </div>
                       
                    </div>
                    
                 </div>
            
          
    </div>
    <?php endforeach ?>
    <div class=rassrochka>
            <h2 class="text_rassrochka">Рассрочка до 4 месяцев: Халва, Черепаха, Карта Fun, Карта Покупок, BONUS.</h2>
            <a href="#openrassrochka_4">
            <img href="#openrassrochka" class="image_rassrochka" src="/images/rassrochka.svg" width="217px" hight="50px" alt="">
        </a>
    </div>



     <!-- HTML модального окна -->
    <div id="openrassrochka_4" class="modal">
    <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления рассрочки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/rassrochka.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />
                    
                    <select name="samokat">
                        <option value="Kugoo G2 Pro">Kugoo G2 Pro</option>
                        <option value="Kugoo G-Booster">Kugoo G-Booster</option>
                        <option value="Kugoo HX">Kugoo HX</option>
                        <option value="Kugoo C1 Pro">Kugoo C1 Pro</option>

                    </select>
                    <input  class="button" type="submit" name="submit_btn" value="Поулчить самокат в рассрочку">
                    
                  
                </form>
    
            </div>
    </div>
    </div>
    </div>




    <div id="otzyv"class="otzyv">

        <div class="otzyv_text">
            <h1 class="otzyv_text1">Мы продаем не самокаты,<br> а эмоции и свободу движения</h1>
            <h2 class="otzyv_text2">Посмотрите наши отзывы из Whats'app и Яндекса:</h2>
        </div>

        <div class="container_slider_css">
        <img class="photo_slider_css" src="/images/otzyv1.png" alt="">
        <img class="photo_slider_css" src="/images/otzyv2.png" alt="">
        <img class="photo_slider_css" src="/images/otzyv3.png" alt="">
        <img class="photo_slider_css" src="/images/otzyv4.png" alt="">
        <img class="photo_slider_css" src="/images/otzyv5.png" alt="">
        </div>
    </div>


    <div class="main">
        <span class="main_text">Откажитесь от душного общественного транспорта</span>
        <h2 class="description"> Оригинальные электросамокаты KUGOO от 670 BYN 
            с доставкой по всей Беларуси</h2>
        <div class="buttons">
            <a class="btn_podbor" href="#">
                Подобрать самокат
            </a>

            <a class="btn_skidka" href="#openskidka2">
                Скидка до 100 BYN
            </a>
        </div>
    </div>
 <!-- HTML модального окна -->
 <div id="openskidka2" class="modal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для бронирования скидки, пожалуйста,<br>
                заполните поля ниже:</h3>
            <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/spasibo/spasibo1.html">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <input  class="button" type="submit" name="submit_btn" value="Получить консультацию">
                </form>
    
            </div>
        </div>
        </div>
    </div>

    <div id="contacts" class="contacts">

            <div class="map_text">
                <h1 class="contacts_text">С нами легко связаться</h1>
            </div>

            <div class="form_text">
                <h2 class="form_text1">Контакты</h2>
                <h2 class="form_text2">Номер телефона:</h2>
                <h2 class="form_text3">+375333812136</h2>

                <h2 class="form_text2">Режим работы:</h2>
                <h2 class="form_text3">С 10.00 до 20.00 без выходных</h2>

                <h2 class="form_text2">Адрес:</h2>
                <h2 class="form_text3">г. Минск, ул. Якуба Коласа 59/1</h2>

            </div>

            <div class="form">
                <img src="/images/contact_form.svg" alt="">
            </div>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7333b1e686ec8c7dadcf78b8ff62f552017ad86152d8e370dcd7c6098f08b852&amp;width=100%25&amp;height=440&amp;lang=ru_RU&amp;scroll=true"></script>    </div>
    </div>

   
    <div class="header">

        <div class="logo">
            <img class ="logo_image" src="/images/logo.svg" height="45px" width="60px">
            <h5 class="logo_text">
               Электросамокаты бренда KugooKirin
               с официального завода Jilong
               с доставкой по всей РБ
            </h5>
        </div>

        <div class="time_work">
                <h5 class="work_time_text">
                    <b>Режим работы:</b> <br>10.00-20.00 без выходных
                </h5>
        </div>

        <div class="phone_number">
            <a href="tel:+375333812136"> +375 (33) 381-21-36</a>
        </div>
        <a class="btn_consul" href="#openconcul2">Заказать консультацию</a>

    </div>

        <!-- HTML модального окна  -->
        <div id="openconcul2" class="modal">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title">Наш специалист свяжется с Вами<br>
                    для бесплатной консультации. <br>
                    Заполните, пожалуйста, поля ниже:</h3>
                <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">    
                    <form class="form_phone" method="POST">
                        <h4 class="title_form1">Введите Ваше имя:</h4>
                        <input  type="text" placeholder="Например: Алина" class="input_text" />

                        <h4 class="title_form">Введите Ваш номер телефона</h4>
                        <input  type="text"  id="phone" placeholder="+375(99)999-99-99" class="input_text" />
                        
                        <input  class="button" type="submit" name="submit_btn" value="Получить консультацию">
                    </form>
        
                </div>
            </div>
        </div>
    </div>
  </body>
</html>