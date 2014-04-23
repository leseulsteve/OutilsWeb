<?php
abstract class ClassesAbstraites_ThemeAbstraite implements ClassesInterfaces_ThemeInterface
{
	protected function getNomClasse($objet)
	{
		$reflecteur = new ReflectionClass(get_class($objet));
		return basename($reflecteur->getFileName(), '.class.php');
	}
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> FETCH_HEAD
