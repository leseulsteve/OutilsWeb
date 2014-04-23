<?php
class HtmlElement_Conteneur extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private $elements = array();
	private $horizontal = false;

	/**
 	 * Constructeur d'un conteneur html.
 	 */
	public function __construct(){}

	/**
 	 * Ajout d'un élément au conteneur.
 	 *
 	 * @param Objet $element L'élément à ajouter.
 	 */
	public function ajout($element)
	{
		array_push($this->elements, $element);

		if ($this->horizontal)
		{
			$config = Configuration::get_instance();
			$theme = $config->getTheme();
			$theme->setHorizontal($this);
		}
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