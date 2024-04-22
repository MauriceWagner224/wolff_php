<?PHP
include 'punkt2dclass.php';

class Punkt3D extends Punkt2D {

    protected $Z;

    function __construct($x, $y, $z) {
        parent::__construct($x, $y);
        $this->Z = $z;
    }

    function getZ() {
        return $this->Z;
    }

    function setZ($z) {
        $this->Z = $z;
    }
    
    function getDistance($P2){
        $dpow = (pow($P2->getX(), 2) - pow($this->getX(),2)) + ((pow($P2->getY(), 2) - pow( - $this->getY(), 2)) + (pow($P2->getZ(), 2) - pow($P2->getZ(), 2 )));
        $d = sqrt($dpow);
        return $d;
    }
}


?>