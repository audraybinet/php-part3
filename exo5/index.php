<?php
$page = 'Exercice 5';
$message ='';
$loop = 5;
include '../header.php';
for ($loop=1; $loop <= 15 ; $loop++)
{
 $message ='On y arrive presque';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
