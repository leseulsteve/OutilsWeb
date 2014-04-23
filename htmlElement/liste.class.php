<?php

class HtmlElement_Liste extends HtmlElement_ClassesAbstraites_HtmlElement
{	
	private $titre_liste;
	private $listeElements;
	private $listeOrdonnee;
	private $niveau = 1;
	private $sousListe = array();
	
	/**
 	 * Constructeur d'un tableau html.
 	 *
 	 * @param String $titre Le titre du tableau.
 	 */
	public function __construct($listeElements)
	{
		parent::ajoutClasse('liste');
		parent::ajoutClasse('list-unstyled');
		$this->listeElements = $listeElements;
	}

	/**
 	 * Accesseur des données qui seront affichés dans le tableau.
 	 *
 	 * @return Array Les données qui seront affichés dans le tableau.
 	 */
	public function getElements()
	{
		return $this->listeElements;
	}

	public function setListeOrdonee()
	{
		$this->listeOrdonnee = true;
		parent::retraitClasse('list-unstyled');
	}

	public function setListeNonOrdonee()
	{
		$this->listeOrdonnee = false;
		parent::retraitClasse('list-unstyled');
	}

	public function estOrdonnee()
	{
		return $this->listeOrdonnee;
	}

	public function ajoutSousListe($index, $liste)
	{
		$liste->ajoutNiveau($this->niveau + 1);
		$this->sousListe[$index - 1] = $liste;
	}

	public function getSousListe()
	{
		return $this->sousListe;
	}

	public function ajoutNiveau($niveau)
	{
		$this->niveau = $niveau;
	}

	public function getNiveau()
	{
		return 'niveau-' . $this->niveau;
	}

	/**
 	 * Permet de spécifier qu'elle colonne sera utiliser pour le tri des lignes.
 	 */ 
	public function trier()
	{
		asort($this->listeElements);
	}
}
?>