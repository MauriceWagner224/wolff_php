<?PHP
//include 'kontoclass.php';
include 'Giroclass.php';
$Muster = new Giro('0815','1000','Mustermann','Max','-1000');
$Muster -> einzahlen(500);
$Muster -> auszahlen(500);
$Muster->info();
?>