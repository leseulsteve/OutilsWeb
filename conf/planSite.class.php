<?php
class Conf_PlanSite
{
	private static $instance;
	private $pages = array();

	private function __construct()
	{
		$this->ajoutPage('Accueil', 'index.php', null);
		$this->ajoutPage('Hola', 'hola.php', 'Accueil');
	}
	
	public static function get_instance()
	{
		if (!isset(self::$instance))
		{
			self::$instance = new self;
		}
		return self::$instance;

	}

	private function ajoutPage($titre_page, $lien, $parent)
	{
		$infos = array();
		$infos['titre'] = $titre_page;
		$infos['lien'] = $lien;
		$infos['parent'] = $parent;
		$this->pages[$titre_page] = $infos;
	}

	public function getPages()
	{
		return $this->pages;
	}
}
?>