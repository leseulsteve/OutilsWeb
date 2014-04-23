<?php

class HtmlElement_BlocCode extends HtmlElement_ClassesAbstraites_HtmlElement
{
	private $code;

	/**
 	 * Constructeur d'un tableau html.
 	 *
 	 * @param String $titre Le titre du tableau.
 	 */
	public function __construct($code)
	{
		$this->ajoutClasse('bloc-code');
		$this->code = $code;
	}

	public function getCode()
	{
		return $this->code;
	}
}
?>