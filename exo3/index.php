<?php
$page = 'Exercice 3';
$loop = 100;
$nbLoop = 45;
include '../header.php';
while($loop <=10)
{
  echo $loop * $nbLoop;
  $loop--;
}
?>
<?php include '../footer.php'; ?>
