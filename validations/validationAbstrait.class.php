<?php
abstract class Validations_ValidationAbstrait implements Validations_ValidationInterface
{
	protected $champs;
	protected $validateurs = array();
	protected $erreursValidation = array();
	
	public function __construct($champs)
	{
		$this->champs = $champs;
	}

	public function ajoutValidateur($validateur)
	{
		array_push($this->validateurs, $validateur);
		$validateur->setChamps($this->champs);
	}

	public function valide()
	{
		$valide = true;

		foreach ($this->validateurs as $validateur)
		{
			if (!$validateur->valide())
			{
				foreach ($validateur->getErreur() as $erreur)
				{
					$this->erreursValidation[$erreur->getChamp()] = $erreur;
				}

				$valide = false;
			}
		}

		return $valide;
	}

	public function getErreurs()
	{
		return $this->erreursValidation;
	}
}
?>