<?php
class Index extends ClassesAbstraites_ControleurAbstraite
{
	public function __construct()
	{
		parent::__construct('Hola');
		
		$this->ajoutContenuPrinpal($this->contenu());

		$this->filArianeStatut = true;

		$this->render();
	}

	private function contenu()
	{
		$contenu = new HtmlElement_Conteneur();

		$code = new HtmlElement_BlocCode('c:\fdfkjfdkdk');
		$contenu->ajout($code);

		return $contenu;
	}
}

$index = new Index();

function __autoload($class_name)
{
	$nom_fichier = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name)).'.class.php';
	include_once $nom_fichier;
}
?>