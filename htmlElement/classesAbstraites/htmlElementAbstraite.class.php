<?php

abstract class HtmlElement_ClassesAbstraites_HtmlElementAbstraite 
{
	protected $id;
	protected $classes = array();

	/**
 	 * Ajoute une classe CSS à l'objet.
 	 *
 	 * @param String $classe La classe CSS à ajouter.
 	 */
	public function ajoutClasse($classe)
	{
		array_push($this->classes, $classe);
	}

	/**
 	 * Retire une classe CSS à l'objet.
 	 *
 	 * @param String $classe La classe CSS à retirer.
 	 */
	public function retraitClasse($classe)
	{
		if(($clef = array_search($classe, $this->classes)) == true) 
		{
    		unset($this->classes[$clef]);
		}
	}

	/**
 	 * Accesseur des classes CSS de l'objet.
 	 *
 	 * @return Array Les classes CSS de l'objet.
 	 */
	public function getClasses()
	{
		return $this->classes;
	}

	public function getClassesString()
	{
		return $this->classesEnString($this->classes);
	}

	/**
 	 * Mutateur de l'id css du tableau.
 	 *
 	 * @param String $classes_lignes L'id css du tableau.
 	 */ 
	public function setId($id)
	{
		$this->id = $id;
	}
	
	/**
 	 * Accesseur de l'id css du tableau.
 	 *
 	 * @return String L'id css du tableau.
 	 */
	public function getId()
	{
		return $this->id;
	}

	/**
 	 * Retourne les classes CSS de l'objet sous forme de string séparés par des espaces.
 	 *
 	 * @return String Les classes CSS de l'objet.
 	 */
	protected function classesEnString($classes)
	{
		if (empty($classes))
		{
			$retour = null;
		}
		else
		{
			$retour = '';

			$derniereClasse = end($classes);

			foreach ($classes as $classe) 
			{
				$retour .= $classe;

				if ($classe != $derniereClasse) 
				{
						$retour .= ' ';
				}
			}
		}

		return $retour;
	}

	public function render()
	{
		$reflecteur = new ReflectionClass(get_class($this));
		$nomFichier = basename($reflecteur->getFileName(), '.class.php') . '.tpl.php';
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
}
?>