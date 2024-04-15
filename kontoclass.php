<?PHP
class Sparkonto
{
	private $kontonr = 0;
	protected $kontostand = 0;
	private $inhaber = "";
	
	function __construct($kontonr,$inhaber)
	{
		$this->kontonr = $kontonr;
		$this->inhaber = $inhaber;
	}
	function einzahlen($betrag)
	{
		if($betrag > 0)
		{
			return $this->kontostand += $betrag;
		}
		else
		{
				echo 'Du musst einen positiven Betrag einzahlen<br>';
		}
	}
	function abheben($betrag)
	{
		if ($betrag > 0 && $this->kontostand > 0 && $this->kontostand >= $betrag)
		{
			return $this->kontostand -= $betrag;
		}
		elseif($betrag < 0)
		{
			echo 'Du musst einen positiven Betrag abheben<br>';
		}
		elseif ($this->kontostand <= $betrag)
		{
			echo 'Du kannst nicht so viel Geld abheben<br>';
		}
		else
		{
			echo 'Dein Konto verfügt leider nicht über Geld<br>';
		}
	}
	function info()
	{
echo '
		<style >
			th, td 
			{
				border: 1px solid black;
				width: 200px;
				font-family: "Helvetica";
			}
			th
			{
				text-align: right;
			}
			td{
				text-align: right;
			}
		</style>';
		
		echo'
		<table>
			<tr>
				<th>Kontoinhaber</th>
				<th>Kontonummer</th>
				<th>Saldo</th>
			</tr>
			<tr>
				<td class=>'.$this->inhaber.'</td>
				<td>'.$this->kontonr.'</td>
				<td>'.$this->kontostand.'€</td>
			</tr>
		</table>
		';
	}
}
?>