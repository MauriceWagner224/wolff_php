<?PHP
include 'kontoclass.php';
class Giro extends Konto 
{
	private $Dispo;
	
	function __construct($nr,$kontostand,$name,$Dispo)
	{
		parent::__construct($nr,$name);
		$this->Dispo = $Dispo;
	}
	function auszahlen($Geld){
	if ($this->kontostand-$Geld >= $this->Dispo && $Geld > 0)
	{
		$this->kontostand -= $Geld;
	}		
	elseif ($Geld < 0) 
	{
		echo 'Du musst einen positiven Betrag eingeben';
	}
	else 
	{
		echo 'Sie können Ihr Konto nicht um diesem Betrag überziehen';
	}
}
	function getDispo()
	{
		return $this->Dispo;
	}
	
}
?>