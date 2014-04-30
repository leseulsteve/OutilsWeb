<?php
class HtmlElement_Formulaire_groupeChamps extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private $champs = array();
	private $legende;

	
	public function __construct($legende = null)
	{
		$this->legende = $legende;
	}

	public function getLegende()
	{
		return $this->legende;
	}
	
	public function ajout($champs)
	{
		array_push($this->champs, $champs);
	}
	
	public function getChamps()
	{
		return $this->champs;
	}
}