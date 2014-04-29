<?php
abstract class Validations_ValidateurAbstrait implements Validations_ValidateurInterface
{
	protected $champ;
	protected $messageErreur;
	protected $erreur = null;

	public function setChamp($champ)
	{
		$this->champ = $champ;
	}

	public abstract function valide();

	protected function ajoutErreur()
	{
		$this->erreur = new Validations_ErreurValidation($this->champ, $this->messageErreur);
	}
}
?>