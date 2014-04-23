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
		$cheminDefaut = $_SERVER['DOCUMENT_ROOT'] . '/test/themes/defaut/' . $nomFichier;

		$cheminTheme = $_SERVER['DOCUMENT_ROOT'] . '/test/themes/bootstrap3/';
		$cheminThemeFichier = $cheminTheme . $nomFichier;

		include file_exists($cheminThemeFichier) ? $cheminThemeFichier : $cheminDefaut; 
	}
}
