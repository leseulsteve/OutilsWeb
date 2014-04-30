<?php
abstract class Validations_ValidateurAbstrait implements Validations_ValidateurInterface
{
	protected $nomValidateur;
	protected $champs;
	protected $messageErreur;
	protected $erreurValidation = array();

	public function __construct()
	{
		$reflecteur = new ReflectionClass(get_class($this));
		$this->nomValidateur = basename($reflecteur->getFileName(), '.class.php');
	}

	public function setChamps($champs)
	{
		$this->champs = $champs;
	}

	public function getChamps()
	{
		return $this->champ;
	}

	public function getMessageErreur()
	{
		return $this->messageErreur;
	}

	public function valide()
	{
		$retour = true;

		if (is_array($this->champs))
		{
			foreach($this->champs as $champ)
			{
				$retour &= $this->validation($champ);
				if (!$retour)
				{
					$this->ajoutErreur($this->nomValidateur, $champ);
				}
			}
		}
		else
		{
			$retour &= $this->validation($this->champs);
			if (!$retour)
			{
				$this->ajoutErreur($this->nomValidateur, $this->champs);
			}
		}



		return $retour;
	}

	abstract public function validation($champ);

	protected function ajoutErreur($validateur, $champ)
	{
		$messageErreur = str_replace('[champ]', $champ, $this->messageErreur);
		$this->erreurValidation[$champ] = new Validations_ErreurValidation($validateur, $champ, $messageErreur);
	}

	public function getErreur()
	{
		return $this->erreurValidation;
	}
}
?>