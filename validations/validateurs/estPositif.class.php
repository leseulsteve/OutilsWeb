<?php
class Validations_Validateurs_EstPositif extends Validations_ValidateurAbstrait
{
	public function __construct()
	{
		parent::__construct();
		$this->messageErreur = 'La valeur entrée ([champ]) doit-être positive.';
	}

	public function validation($champ)
	{
		$valide = true;

		$validationNumerique = new Validations_Validateurs_EstNumerique();
		$validationNumerique->setChamps($champ);
		
		if (!$validationNumerique->valide())
		{
			$this->messageErreur = $validationNumerique->getMessageErreur();
			$valide = false;	
		}
		else
		{
			$valide &= $champ >= 0;
		}

		return $valide;
	}
}
?>