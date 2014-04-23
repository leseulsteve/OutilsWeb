<?php
abstract class HtmlElement_ClassesAbstraites_ConteneurAbstraite extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	protected $elements = array();

	/**
 	 * Ajout d'un élément au conteneur.
 	 *
 	 * @param Objet $element L'élément à ajouter.
 	 */
	public function ajout($element)
	{
		array_push($this->elements, $element);
	}

	/**
 	 * Accesseur des éléments du conteneur.
 	 *
 	 * @return Array Les éléments du conteneur.
 	 */
	public function getElements()
	{
		return $this->elements;
	}
}
?>