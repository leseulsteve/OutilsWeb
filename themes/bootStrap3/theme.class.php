<?php
class Themes_BootStrap3_Theme extends ClassesAbstraites_ThemeAbstraite
{

	public function __construct()
	{
		array_push($this->feuillesCSS, '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
	}

	/**
 	 * Une ligne sur deux sera d'une autre couleur.
 	 * Objet accepté = tableau.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setLigneRayees($objet)
	{
		if ($this->getNomClasse($objet) == 'tableau')
		{
			$objet->ajoutClasse('table-striped');
		}
	}

	/**
 	 * Une bordure tout le tour de l'objet sera ajouter.
 	 * Objet accepté = tableau.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setBordure($objet)
	{
		if ($this->getNomClasse($objet) == 'tableau')
		{
			$objet->ajoutClasse('table-bordered');
		}
	}

	/**
 	 * Retire les syles de l'objet.
 	 * Objet accepté = liste.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setSansStyle($objet)
	{
		if ($this->getNomClasse($objet) == 'liste')
		{
			$objet->ajoutClasse('list-unstyled');
		}
	}

	/**
 	 * Les éléments de l'objet envoyé en paramètre seront affichés horizontalement.
 	 * Objet accepté = conteneur.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setHorizontal($objet)
	{
		if ($this->getNomClasse($objet) == 'conteneur')
		{
			$elements = $objet->getElements();
			$nbElements = sizeof($elements);

			foreach ($elements as $element)
			{	

				foreach ($element->getClasses() as $classe) 
				{
					if(strpos($classe, 'col-md') === 0)
					{
    					$element->retraitClasse($classe);
    				}
    			}
    	
    		$element->ajoutClasse('col-md-' . 12 / $nbElements);
    		}
			
			$this->horizontal = true;	
		}
	}
}
?>