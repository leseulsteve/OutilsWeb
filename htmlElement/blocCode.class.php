<?php

class HtmlElement_BlocCode extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private $code;

	/**
 	 * Constructeur d'un bloc de code html.
 	 *
 	 * @param String $code Le code à afficher.
 	 */
	public function __construct($code)
	{
		$this->ajoutClasse('bloc-code');
		$this->code = $code;
	}

	/**
 	 * Accesseur du code à afficher.
 	 *
 	 * @return String Le code à afficher.
 	 */
	public function getCode()
	{
		return $this->code;
	}
}
?>