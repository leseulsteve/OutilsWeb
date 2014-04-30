<?php
class Validations_Validateurs_MinMax extends Validations_ValidateurAbstrait
{
	private $valeurMin;
	private $valeurMax;

	public function __construct($valeurMin, $valeurMax)
	{
		parent::__construct();
		$this->valeurMin = $valeurMin;
		$this->valeurMax = $valeurMax;	
	}

	public function validation($champ)
	{
		$valide = true;

		if ($champ < $this->valeurMin)
		{
			$this->messageErreur = "La valeur entrée ([champ]) doit-être plus grande que " . ($this->valeurMin - 1) . '.';
			$valide = false;
		}
		elseif ($champ > $this->valeurMax)
		{
			$this->messageErreur = "La valeur entrée ([champ]) doit-être plus petite que " . ($this->valeurMax + 1) . '.';
			$valide = false;
		}

		return $valide;
	}
}
?>