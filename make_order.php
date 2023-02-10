 
 <?php
 class make_order
 {

 }
/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */
require_once './config/connect.php';
$name_samokat = $_GET['name_samokat'];

/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */



/*
 * Делаем выборку строки с полученным ID выше
 */

$hit = mysqli_query($connect, "SELECT * FROM `hits` WHERE `name_samokat` = '$name_samokat'");





?>

 
     <!-- HTML модального окна -->
     <div id="opensam" class="modal">
     <div class="modal-dialog">
     <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Для оформления заказа на самокат <?php echo $name_samokat?>, пожалуйста,<br>
                заполните поля ниже:</h3>
            
            </div>
            
            <div class="modal-body">    
                <form class="form_phone" method="POST" action="/main_action/order.php">
                    <h4 class="title_form1">Введите Ваше имя:</h4>
                    <input  type="text" name="name" placeholder="Например: Алина" class="input_text" />

                    <h4 class="title_form">Введите Ваш номер телефона</h4>
                    <input  type="text"  id="phone" name="phone" placeholder="+375(99)999-99-99" class="input_text" />
                    
                    <h4 class="title_form">Введите Вашу почту:</h4>
                    <input  type="text" name="mail" placeholder="anonim@mail.ru" class="input_text" />

                    <h4 class="title_form">Введите тип заказа:</h4>
                    <select name="type">
                        <option value="Аренда">Аренда</option>
                        <option value="Покупка">Покупка</option>
        
                    </select>
                    
                    <input type="hidden" name="name_samokat" value="<?= $name_samokat ?>"></p>
                    <input  class="button" type="submit" name="submit_btn" value="Купить">
                    
                  
                </form>
    
                 </div>
               
            </div>
        </div>
    </div>