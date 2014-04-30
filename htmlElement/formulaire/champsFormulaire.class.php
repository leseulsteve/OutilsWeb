<?php
abstract class HtmlElement_Formulaire_ChampsFormulaire extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private $nom;
	private $valeur;
	private $etiquette;
	private $requis = false;
	
	public function setNom($nom)
	{
		$this->nom = $nom;
	}
	
	public function getNom()
	{
		return $this->nom;
	}
	
	public function setValeur($valeur)
	{
		$this->valeur = $valeur;
	}
	
	public function getValeur()
	{
		return $this->valeur;
	}
	
	public function setEtiquette($etiquette)
	{
		$this->etiquette = $etiquette;
	}
	
	public function getEtiquette()
	{
		return $this->etiquette;
	}
	
	public function setRequis($boolean)
	{
		$this->requis = $boolean;
	}
	
	public function estRequis()
	{
		return $this->requis;
	}
}