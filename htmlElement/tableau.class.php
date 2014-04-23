<?php

class HtmlElement_Tableau extends HtmlElement_ClassesAbstraites_HtmlElement
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
		parent::ajoutClasse('table');
		$this->donnees = $donnees;
		$clefs = array_keys($this->donnees);
		$this->entetes = array_keys($this->donnees[$clefs[0]]);
		
		$nbColonnes = sizeof($clefs);
		for ($i = 1; $i <= $nbColonnes; $i++)
		{
			$classesColonne = array();
			array_push($classesColonne, 'colonne-' . $i);
			array_push($this->colonnesClasses, $classesColonne);

		}

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

	public function getColonneClasses($noColonne)
	{
		$retour = '';
		$classes = $this->colonnesClasses[$noColonne - 1];
		return parent::classesEnString($classes);
	}

	/**
 	 * Accesseur des classes css des lignes du tableau.
 	 *
 	 * @return Array Les classes css des lignes du tableau.
 	 */
	public function getLigneClasses($noLigne)
	{
		$retour = '';
		$classes = $this->lignesClasses[$noLigne - 1];
		return parent::classesEnString($classes);
	}

	public function setBordure()
	{
		parent::ajoutClasse('table-bordered');
	}

	public function setLigneRayees()
	{
		parent::ajoutClasse('table-striped');
	}

	/**
 	 * Permet de spécifier qu'elle colonne sera utiliser pour le tri des lignes.
 	 *
 	 * @param Integer $colonne Colonne utilisée pour le tri des lignes (commence à 1).
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