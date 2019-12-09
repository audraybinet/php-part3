<?php
$page = 'Exercice 6';
$message ='';
$loop = 10;
include '../header.php';
for ($loop=20; $loop >= 0 ; $loop--)
{
 $message ='C est presque bon';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
