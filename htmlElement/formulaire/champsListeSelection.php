<?php
class HtmlElement_Formulaire_ChampsListeSelection extends Formulaire_ChampsFormulaire
{
	private $liste_choix;
	
	public function __construct($liste_choix, $etiquette)
	{
		$this->liste_choix = $liste_choix;
		parent::setEtiquette($etiquette);
		parent::setNom('entree-' . preg_replace('/( *)/', '', $etiquette));
	}

	public function getListeChoix()
	{
		return $this->listeChoix;
	}
}