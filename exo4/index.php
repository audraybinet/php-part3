<?php
$page = 'Exercice 4';
$loop = 1;
include '../header.php';
while ($loop <= 10)
{
 echo $loop;
 $loop = $loop+$loop/2;
}
?>
<?php include '../footer.php'; ?>
