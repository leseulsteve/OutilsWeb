<?php
abstract class ClassesAbstraites_ThemeAbstraite implements ClassesInterfaces_ThemeInterface
{
	protected $feuillesCSS = array();

	public function getNomTheme()
	{
		$reflecteur = new ReflectionClass(get_class($this));
		return basename(dirname($reflecteur->getFileName()));
	}
	
	protected function getNomClasse($objet)
	{
		$reflecteur = new ReflectionClass(get_class($objet));
		return basename($reflecteur->getFileName(), '.class.php');
	}

	public function getFeuillesCSS()
	{
		return $this->feuillesCSS;
	}
}
?>