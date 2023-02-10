<?php
$sql2=$pdo->prepare("Select * From FAQ");
$sql2->execute();
$quest=$sql2->fetchAll(PDO::FETCH_OBJ);
?>

<?php
$sql3=$pdo->prepare("Select * From team");
$sql3->execute();
$team_people=$sql3->fetchAll(PDO::FETCH_OBJ);
?>

<?php
$sql4=$pdo->prepare("Select * From hits");
$sql4->execute();
$hit=$sql4->fetchAll(PDO::FETCH_OBJ);

?>





<?php
$sql5=$pdo->prepare("Select * From budjet");
$sql5->execute();
$bud=$sql5->fetchAll(PDO::FETCH_OBJ);
?>

<?php
$sql6=$pdo->prepare("Select * From top");
$sql6->execute();
$top=$sql6->fetchAll(PDO::FETCH_OBJ);
?>

<?php
$sql7=$pdo->prepare("Select * From nov");
$sql7->execute();
$nov=$sql7->fetchAll(PDO::FETCH_OBJ);
?>


<?php
$sql8=$pdo->prepare("Select * From more");
$sql8->execute();
$more=$sql8->fetchAll(PDO::FETCH_OBJ);
?>


<?php
$sql9=$pdo->prepare("Select * From photos");
$sql9->execute();
$photo=$sql9->fetchAll(PDO::FETCH_OBJ);

class scripts
{

}
?>