<?php
class Validations_Validateurs_EstRempli extends Validations_ValidateurAbstrait
{
	public function __construct()
	{
		parent::__construct();
		$this->messageErreur = "Le champ doit être rempli.";
	}

	public function validation($champ)
	{
		return $champ != '' && !is_null($champ) && !ctype_space($champ);
	}
}
?>