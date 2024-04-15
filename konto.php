<?PHP
include 'kontoclass.php';
$Muster = new Konto('0815','Max Mustermann');
$Muster -> einzahlen(500);
$Muster -> info();
?>