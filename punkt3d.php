<?PHP

include 'punkt3dclass.php';

$P1 = new Punkt3D(1,1,1);
$P2 = new Punkt3D(3,3,3);

echo 'Punkt1 [X], [Y], [Z] ----> ['.$P1->getX().'], ['.$P1->getY().'], '.'['.$P1->getZ().']<br>';
echo 'Punkt2 [X], [Y], [Z] ----> ['.$P2->getX().'], ['.$P2->getY().'], '.'[ '.$P2->getZ().']<br>';

echo 'P1 und P2 haben einen Abstand von: '.$P1->getDistance($P2).'<br>';

?>