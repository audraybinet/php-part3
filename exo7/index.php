<?php
$page = 'Exercice 7';
$message ='';
$loop = 5;
include '../header.php';
for ($loop=1; $loop <= 100 ; $loop=$loop+15)
{
 $message ='On tient le bon bout';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
