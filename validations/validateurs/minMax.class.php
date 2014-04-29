<?php
class Validations_Validateurs_MinMax extends Validations_ValidateurAbstrait
{
	private $valeurMin;
	private $valeurMax;

	public function __construct($valeurMin, $valeurMax)
	{
		$this->valeurMin = $valeurMin;
		$this->valeurMax = $valeurMax;	
	}

	public function valide()
	{
		if ($this->champ < $this->valeurMin)
		{
			$this->messageErreur = "La valeur entrée doit-être plus grande que " . ($this->valeurMin - 1) . '.';
			$this->ajoutErreur();
		}
		elseif ($this->champ > $this->valeurMax)
		{
			$this->messageErreur = "La valeur entrée doit-être plus petite que " . ($this->valeurMax + 1) . '.';
			$this->ajoutErreur();
		}

		return $this->erreur;
	}
}
?>