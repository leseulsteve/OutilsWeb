<?php
class Validations_ErreurValidation
{
	private $champ;
	private $message;

	public function __construct($champ, $message)
	{
		$this->champ = $champ;
		$this->message = $message;
	}

	public function getChamp()
	{
		return $this->champ();
	}

	public function getMessage()
	{
		return $this->message;
	}
}
?>