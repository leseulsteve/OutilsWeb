<?php

class HtmlElement_Conteneur extends HtmlElement_ClassesAbstraites_HtmlElement
{
	private $elements = array();
	private $horizontal = false;

	/**
 	 * Constructeur d'un tableau html.
 	 *
 	 * @param String $titre Le titre du tableau.
 	 */
	public function __construct()
	{
		parent::ajoutClasse('container');
	}

	public function ajout($element)
	{
		array_push($this->elements, $element);

		if ($this->horizontal)
		{
			$this->horizontal();
		}
	}
	
	public function getElement()
	{
		return $this->elements;
	}

	public function horizontal()
	{
		$nbElements = sizeof($this->elements);

		foreach ($this->elements as $element)
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
?>