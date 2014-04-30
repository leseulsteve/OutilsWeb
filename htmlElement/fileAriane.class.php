<?php

class HtmlElement_FileAriane extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private static $instance;
	private static $pages = array();
	private static $pageCourrante;
	protected static $filAriane = array();

	private function __construct()
	{
		self::$pages = Conf_PlanSite::get_instance()->getPages();
	}

	public static function get_instance($pageCourrante)
	{
		

		if (!isset(self::$instance))
		{
			self::$instance = new self;
		}

		self::$pageCourrante = $pageCourrante;
		self::setFilAriane();

		return self::$instance;
	}

	private static function setFilAriane()
	{	
		$titrePageCourrante = self::$pageCourrante->getTitrePage();
		print $titrePageCourrante;
		
		while (!is_null($titrePageCourrante))
		{
			self::$filAriane[$titrePageCourrante] = self::$pages[$titrePageCourrante]['lien'];
			$titrePageCourrante = self::$pages[$titrePageCourrante]['parent'];
		}

		self::$filAriane = array_reverse(self::$filAriane);
	}

	public static function getFilAriane()
	{
		return self::$filAriane;
	}
}
?>