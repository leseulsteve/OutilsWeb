<?php
class Validations_ErreurValidation
{
	private $validateur;
	private $champ;
	private $message;

	public function __construct($validateur, $champ, $message)
	{
		$this->validateur = $validateur;
		$this->champ = $champ;
		$this->message = $message;
	}

	public function getChamp()
	{
		return $this->champ;
	}

	public function getMessage()
	{
		return $this->message;
	}
}
?>