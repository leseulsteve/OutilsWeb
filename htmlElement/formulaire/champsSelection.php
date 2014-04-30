<?php
class HtmlElement_Formulaire_ChampsSelection extends Formulaire_ChampsFormulaire
{
	private $type;
	private $listeChoix;
	private $valeur = array();
	
	public function __construct($type, $liste_choix, $nom)
	{
		$this->type = $type;
		$this->listeChoix = $listeChoix;
		parent::set_id('entree-' . $nom);
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	public function getListeChoix()
	{
		return $this->listeChoix;
	}
	
	public function setValeur($valeur)
	{
		$this->valeur = $valeur;
	}
}
