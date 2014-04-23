<?php
abstract class ClassesAbstraites_ControleurAbstraite
{
	protected $config;
	protected $theme;
	protected $titrePage;
	protected $contenu;
	protected $scripts = array();

	public function __construct()
	{
		$this->config = Configuration::get_instance();
		$this->theme = $this->config->getTheme();
		$this->contenu = new HtmlElement_Conteneur();
	}

	public function render()
	{
		
		$htmlDefaut = 'themes/defaut/html.tpl.php';
		$htmlTheme = 'themes/' . $this->theme->getNomTheme() . '/html.tpl.php';
		include file_exists($htmlTheme) ? $htmlTheme : $htmlDefaut;
	}

	public function getScripts()
	{
		$this->scripts;
	}
	
	public function getTitrePage()
	{
		return $this->titrePage;
	}

	public function getContenu()
	{
		return $this->contenu;
	}
}
?>