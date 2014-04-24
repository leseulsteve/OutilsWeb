<?php

class HtmlElement_FileAriane extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private static $instance;
	private $racine;
	private $elements = array();

	private function __construct()
	{

	}

	public static function get_instance()
	{
		if (!isset(self::$instance))
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function ajout($page, $parent)
	{
		$reflecteur = new ReflectionClass(get_class($page));
		$nomFichier = basename($reflecteur->getFileName(), '.php');

		$this->elements[$nomFichier] = $page;
		
		if (!is_null($parent));
		{
			foreach($this->elements as $element)
			{
				$reflecteur = new ReflectionClass(get_class($element));
				$nomFichier = basename($reflecteur->getFileName(), '.php');	

				if (strcmp($nomFichier, $parent) == 0)
				{
					$page->setParent($this->elements[$parent]);
				}
			}
		}
	}

	public function getFileAriane($page)
	{
		return array_search($page, $this->elements);
	}
}
?>