<?php

class HtmlElement_Tableau extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private $donnees;
	private $entetes;
	private $colonnesClasses = array();
	private $lignesClasses = array();

	/**
 	 * Constructeur d'un tableau html.
 	 *
 	 * @param String $titre Le titre du tableau.
 	 */
	public function __construct($donnees)
	{
		parent::ajoutClasse('tableau');
		$this->donnees = $donnees;
		
		// Définition des entêtes.
		$clefs = array_keys($this->donnees);
		$this->entetes = array_keys($this->donnees[$clefs[0]]);
		
		// Définition des classes CSS des colonnes.
		$nbColonnes = sizeof($clefs);
		for ($i = 1; $i <= $nbColonnes; $i++)
		{
			$classesColonne = array();
			array_push($classesColonne, 'colonne-' . $i);
			array_push($this->colonnesClasses, $classesColonne);

		}

		// Définition des classes CSS des lignes.
		$nbLignes = sizeof($donnees);
		for ($i = 1; $i <= $nbLignes; $i++)
		{
			$classesLigne = array();
			array_push($classesLigne, 'ligne-' . $i);
			($i % 2 == 0) ? array_push($classesLigne, 'ligne-pair') : array_push($classesLigne, 'ligne-impair');
			array_push($this->lignesClasses, $classesLigne);
		}
	}

	
	/**
 	 * Accesseur des données qui seront affichés dans le tableau.
 	 *
 	 * @return Array Les données qui seront affichés dans le tableau.
 	 */
	public function getDonnees()
	{
		return $this->donnees;
	}

	/**
 	 * Accesseur des entêtes du tableau.
 	 *
 	 * @return Array Les entêtes du tableau.
 	 */
	public function getEntetes()
	{	
		return $this->entetes;
	}

	/**
 	 * Accesseur des classes CSS des colonnes du tableau.
 	 *
 	 * @return Array Les classes CSS des colonnes du tableau.
 	 */
	public function getColonneClasses()
	{
		$retour = array();

		for($i = 0; $i < sizeof($this->colonnesClasses); $i ++)
		{
			$retour[$i + 1] = parent::classesEnString($this->colonnesClasses[$i]);

		}

		return $retour;
	}

	/**
 	 * Accesseur des classes CSS des lignes du tableau.
 	 *
 	 * @return Array Les classes CSS des lignes du tableau.
 	 */
	public function getLigneClasses()
	{
		$retour = array();

		foreach($this->lignesClasses as $classe)
		{
			array_push($retour, parent::classesEnString($classe));

		}
		
		return $retour;
	}

	/**
 	 * Permet de spécifier qu'elle colonne sera utilisée pour le tri des lignes.
 	 *
 	 * @param int $colonne Colonne utilisée pour le tri des lignes (commence à 1).
 	 */ 
	public function trier($colonne)
	{
		$entete_de_tri =  $this->entetes[$colonne - 1];
		$tri_non_termine = true;

		while ($tri_non_termine)
		{
			$tri_non_termine = false;
			
			for($i = 0; $i < sizeof($this->donnees) - 1; $i ++)
			{
				$j = $i + 1;

				if (strcmp ($this->donnees[$i][$entete_de_tri], $this->donnees[$j][$entete_de_tri]) > 0)
				{
					$temp = $this->donnees[$i];
					$this->donnees[$i] = $this->donnees[$j];
					$this->donnees[$j] = $temp;
					$tri_non_termine = true;
				}
			}
		}
	}
}
?>