<?php
abstract class classesAbstraites_ObjetAvecTemplate
{
	/**
 	 * Affiche le template de l'objet
 	 */
	public function render()
	{
		$reflecteur = new ReflectionClass(get_class($this));
		$nomFichier = basename($reflecteur->getFileName(), '.class.php') . '.tpl.php';
		$fichierDefaut = 'themes/defaut' . '/' . $nomFichier;

		$config = Configuration::get_instance();
		$theme = $config->getTheme();
		if (isset($theme))
		{
			$cheminTheme = 'themes/' . $theme->getNomTheme();
			$fichierTheme = $cheminTheme . '/' . $nomFichier;
		}

		include file_exists($fichierTheme) ? $fichierTheme : $fichierDefaut; 
	}
}
