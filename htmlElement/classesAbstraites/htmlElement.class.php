<?php

abstract class HtmlElement_ClassesAbstraites_HtmlElement extends ClassesAbstraites_ObjetAvecTemplate
{
	protected $id;
	protected $classes = array();

	public function __construct($classe)
	{
		array_push($classes, $classe);
	}

	public function ajoutClasse($classe)
	{
		array_push($this->classes, $classe);
	}

	public function retraitClasse($classe)
	{
		if(($clef = array_search($classe, $this->classes)) !== false) {
    	unset($this->classes[$clef]);
		}
	}

	public function getClasses()
	{
		return $this->classes;
	}

	public function getClassesString()
	{
		return $this->classesEnString($this->classes);
	}

	/**
 	 * Mutateur de l'id css du tableau.
 	 *
 	 * @param String $classes_lignes L'id css du tableau.
 	 */ 
	public function setId($id)
	{
		$this->id = $id;
	}
	
	/**
 	 * Accesseur de l'id css du tableau.
 	 *
 	 * @return String L'id css du tableau.
 	 */
	public function getId()
	{
		return $this->id;
	}

	protected function classesEnString($classes)
	{
		$retour = '';

		$derniereClasse = end($classes);

		foreach ($classes as $classe) 
		{
			$retour .= $classe;

			if ($classe != $derniereClasse) 
			{
					$retour .= ' ';
			}
		}

		return $retour;
	}

	public function centrer()
	{
		$this->ajoutClasse('center-block');
	}
}
?>