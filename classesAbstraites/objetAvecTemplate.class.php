<?php
abstract class classesAbstraites_ObjetAvecTemplate
{
	/**
 	 * Affiche le template de l'objet
 	 */
	public function render()
	{
		$reflector = new ReflectionClass(get_class($this));
		include dirname($reflector->getFileName()) . '/templates/' . basename($reflector->getFileName(), '.class.php') . '.tpl.php'; 
	}
}