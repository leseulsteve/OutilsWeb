<?php
class Validations_Validateurs_EstInteger extends Validations_ValidateurAbstrait
{
	public function __construct()
	{
		$this->messageErreur = "La valeur entrée n'est pas un nombre.";
	}

	public function valide()
	{
		if (!is_int($this->champ))
		{
			$this->ajoutErreur();
		}

		return $this->erreur;
	}
}
?>