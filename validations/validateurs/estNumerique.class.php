<?php
class Validations_Validateurs_EstNumerique extends Validations_ValidateurAbstrait
{
	public function __construct()
	{
		$this->messageErreur = "La valeur entrée ([champ]) n'est pas un nombre.";
	}

	public function validation($champ)
	{
		$valide = true;

		if (!is_numeric($champ))
		{
			$this->ajoutErreur('estNumerique', $champ);
			$valide = false;
		}

		return $valide;
	}
}
?>