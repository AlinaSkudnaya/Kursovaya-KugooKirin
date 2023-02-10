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