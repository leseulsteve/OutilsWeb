<?php

class HtmlElement_Page extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{	
	protected $theme;
	private $scripts = array();
	private $titrePage;
	private $contenu_principal;
	protected $pageHeader;
	
	protected $filArianeStatut;

	/**
 	 * Constructeur d'un tableau html.
 	 *
 	 * @param String $titre Le titre du tableau.
 	 */
	public function __construct($titrePage)
	{
		$this->titrePage = $titrePage;
		$this->theme = Conf_Configuration::get_instance()->getTheme();
		$reflecteur = new ReflectionClass(get_class($this));
		$this->chemin = $reflecteur->getFileName();
		$this->contenu_principal = new HtmlElement_Conteneur();
	}

	public function getFilArianeStatut()
	{
		return $this->filArianeStatut;	
	}

	public function getFilAriane()
	{
		return HtmlElement_FileAriane::get_instance($this);
	}

	public function getTheme()
	{
		return $this->theme;
	}

	public function getTitrePage()
	{
		return $this->titrePage;
	}

	public function setPageHeader($pageHeader)
	{
		$this->pageHeader = $pageHeader;
	}

	public function getPageHeader()
	{
		return $this->pageHeader;
	}


	public function getScripts()
	{
		return $this->scripts;
	}

	public function ajoutContenuPrinpal($contenu)
	{
		$this->contenu_principal->ajout($contenu);
	}

	public function getContenuPrincipal()
	{
		return $this->contenu_principal;
	}

	public function affichePage()
	{
		$nomFichier = 'page.tpl.php';
		$fichierDefaut = 'themes/defaut' . '/' . $nomFichier;
		$config = Conf_Configuration::get_instance();
		$theme = $config->getTheme();
		if (isset($theme))
		{
			$cheminTheme = 'themes/' . $theme->getNomTheme();
			$fichierTheme = $cheminTheme . '/' . $nomFichier;
		}
				include file_exists($fichierTheme) ? $fichierTheme : $fichierDefaut; 

	}



	public function render()
	{
		$html = 'html.tpl.php';
		$htmlDefaut = 'themes/defaut' . '/' . $html;
		

		$config = Conf_Configuration::get_instance();
		$theme = $config->getTheme();
		if (isset($theme))
		{
			$cheminTheme = 'themes/' . $theme->getNomTheme();
			$htmlTheme = $cheminTheme . '/' . $htmlDefaut;
		}

		include file_exists($htmlTheme) ? $htmlTheme : $htmlDefaut;
	}

}
?>