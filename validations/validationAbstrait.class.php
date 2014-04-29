<?php
abstract class Validations_ValidationAbstrait implements Validations_ValidationInterface
{
	protected $champ;
	protected $validateurs = array();
	protected $erreursValidation = array();
	
	public function __construct($champ)
	{
		$this->champ = $champ;
	}

	public function ajoutValidateur($validateur)
	{
		array_push($this->validateurs, $validateur);
		$validateur->setChamp($this->champ);
	}

	public function valide()
	{
		foreach ($this->validateurs as $validateur)
		{
			$validation = $validateur->valide();

			if (!is_null($validation))
			{
				array_push($this->erreursValidation, $validation);
			}
		}

		return $this->erreursValidation;
	}
}
?>