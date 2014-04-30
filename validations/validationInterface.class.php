<?php
interface Validations_ValidationInterface
{
	public function ajoutValidateur($validateur);
	public function valide();
	public function getErreurs();
}
?>