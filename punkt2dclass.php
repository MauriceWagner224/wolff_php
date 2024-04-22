<head></head>
<body>
<?PHP
class Punkt2D
{
	protected $x = 0;
	protected $y = 0;

	
	function __construct($x,$y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	function getX()
	{
        return $this->x;
	}

    function getY()
    {
        return $this->y;
    }

    function setX($x){
        $this->x = $x;
    }

    function setY($y){
        $this->y = $y;
    }

    function getDistance($P2){
        $dpow = (pow($P2->getX(), 2) - pow($this->getX(),2)) + (pow($P2->getY(), 2) - pow( - $this->getY(), 2));
        $d = sqrt($dpow);
        return $d;
    }

}
?>
</body>