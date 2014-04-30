<?php
class HtmlElement_Formulaire_ChampsTexte extends HtmlElement_Formulaire_ChampsFormulaire
{
	private $typeEntree;	
	private $placeholder;
	
	public function __construct($typeEntree, $etiquette = null)
	{
		$this->typeEntree = $typeEntree;
		parent::setEtiquette($etiquette);
		parent::setNom('entree-' . preg_replace('/( *)/', '', $etiquette));
	}
	
	public function setPlaceholder($texte)
	{
		$this->placeholder = $texte;
	}
	
	public function getPlaceholder()
	{
		return $this->placeholder;
	}
	
	public function getTypeEntree()
	{
		return $this->typeEntree;
	}
}
?>