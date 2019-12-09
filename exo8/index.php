<?php
$page = 'Exercice 8';
$message ='';
$loop = 10;
include '../header.php';
for ($loop=200; $loop >= 0 ; $loop=$loop-12)
{
 $message ='Enfin !!!!';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
