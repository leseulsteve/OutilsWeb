<?php

class HtmlElement_Page extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{	
	protected $theme;
	private $scripts = array();
	private $titrePage;
	private $contenu_principal;
	
	protected $chemin;
	protected $parent;
	protected $filAriane = false;

	
	/**
 	 * Constructeur d'un tableau html.
 	 *
 	 * @param String $titre Le titre du tableau.
 	 */
	public function __construct($titrePage)
	{
		$this->titrePage = $titrePage;
		$this->theme = Conf_Configuration::get_instance()->getTheme();

		$this->contenu_principal = new HtmlElement_Conteneur();
	}

	public function estFilAriane()
	{
		return $this->filAriane;
	}

	public function getFileAriane()
	{
		HtmlElement_FileAriane::get_instance()-> getFileAriane($this);
	}

	public function setParent($parent)
	{
		$this->parent = $parent;
	}

	public function getParent()
	{
		return $this->parent;
	}


	public function getTheme()
	{
		return $this->theme;
	}

	public function getTitrePage()
	{
		return $this->titrePage;
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

	public function getChemin()
	{
		return $this->chemin;
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