<?PHP

include 'punkt2dclass.php';

$P1 = new Punkt2D(1,1);
$P2 = new Punkt2D(3,3);

echo 'Punkt1 [X], [Y] ----> ['.$P1->getX().'], ['.$P1->getY().']<br>';
echo 'Punkt2 [X], [Y] ----> ['.$P2->getX().'], ['.$P2->getY().']<br>';

echo 'P1 und P2 haben einen Abstand von: '.$P1->getDistance($P2).'<br>';

?>