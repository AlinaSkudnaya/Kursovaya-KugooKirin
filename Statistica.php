<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once './config/connect.php';
class Statistica
{

}

$statistic = mysqli_query($connect, "SELECT COUNT(*) FROM `order`");

$array_stat = mysqli_fetch_array($statistic);


$statistic_hits = mysqli_query($connect, "SELECT COUNT(*) FROM `hits`");

$array_stat_hit = mysqli_fetch_array($statistic_hits);


$statistic_more = mysqli_query($connect, "SELECT COUNT(*) FROM `more`");

$array_stat_more = mysqli_fetch_array($statistic_more);


$statistic_nov = mysqli_query($connect, "SELECT COUNT(*) FROM `nov`");

$array_stat_nov = mysqli_fetch_array($statistic_nov);


$statistic_top = mysqli_query($connect, "SELECT COUNT(*) FROM `top`");

$array_stat_top = mysqli_fetch_array($statistic_top);


$statistic_budjet = mysqli_query($connect, "SELECT COUNT(*) FROM `budjet`");

$array_stat_budjet = mysqli_fetch_array($statistic_budjet);

echo $array_stat[0];

echo $array_stat_hit[0];

echo $array_stat_more[0];

echo $array_stat_budjet[0];
echo $array_stat_nov[0];

echo $array_stat_top[0];

echo $summ=$array_stat_budjet[0] + $array_stat_top[0] + $array_stat_nov[0] +$array_stat_more[0]+$array_stat_hit[0];

?>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
        data: {
            labels: [
        'Количество заказов',
        'Количество самокатов',
    ],
      datasets: [{
        label: '<?= $array_stat_budjet[0]?>',
        data: [
            <?= $array_stat[0]?>,
        <?= $summ?>,
            ],
        borderWidth: 1
      }]
    },
    hoverOffset: 4,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });




  
</script>


<div>
  <canvas id="myChart1"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart1');

new Chart(ctx, {
  type: 'pie',
      data: {
          labels: [
      'Количество хитов',
      'Количество бюджтных',
      'Количество новинок',
      'Количество топовых',
      'Количество дополнительных',
  ],
    datasets: [{
      label: '<?= $array_stat_budjet[0]?>',
      data: [
          <?= $array_stat_budjet[0]?>,
          <?= $array_stat_hit[0]?>,
          <?= $array_stat_more[0]?>,
          <?= $array_stat_nov[0]?>,
          <?= $array_stat_top[0]?>,
          ],
      borderWidth: 1
    }]
  },
  hoverOffset: 4,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>



