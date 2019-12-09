<?php
$page = 'Exercice 2';
$loop = 0;
$nbLoop = 66;
include '../header.php';
while ($loop <=20)
{
  echo $loop * $nbLoop;
  $loop++;
}
?>
<?php include '../footer.php'; ?>
