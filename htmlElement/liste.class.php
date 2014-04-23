<?php

class HtmlElement_Liste extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{	
	private $titre_liste;
	private $listeElements;
	private $listeOrdonnee = false;
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
		parent::ajoutClasse('niveau-' . $this->niveau);
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

	/**
 	 * Méthode permettant de transformer la liste en liste ordonnée.
 	 */
	public function setListeOrdonee()
	{
		$this->listeOrdonnee = true;
	}

	/**
 	 * Retourne vrai si la liste est ordonnée.
 	 *
 	 * @return boolean Vrai si la liste est ordonnée.
 	 */
	public function estOrdonnee()
	{
		return $this->listeOrdonnee;
	}

	/**
 	 * Ajout une sous-liste à cette liste.
 	 *
 	 * @param int $index L'index de l'élément de la liste où insérer cette sous-liste (commence à 1).
 	 * @param HtmlElement_Liste $liste La sous-liste.
 	 */
	public function ajoutSousListe($index, $liste)
	{
		$liste->setNiveau($this->niveau + 1);
		$this->sousListe[$index - 1] = $liste;
	}

	/**
 	 * Accesseur des sous-listes de cette liste.
 	 *
 	 * @return Array Les sous-listes de cette liste.
 	 */
	public function getSousListes()
	{
		return $this->sousListe;
	}

	/**
 	 * Mutateur du niveau de cette liste.
 	 *
 	 * @param int $niveau Le niveau de cette liste.
 	 */
	public function setNiveau($niveau)
	{
		$this->niveau = $niveau;
	}

	/**
 	 * Permet de trier la liste.
 	 */ 
	public function trier()
	{
		asort($this->listeElements);
	}
}
?>