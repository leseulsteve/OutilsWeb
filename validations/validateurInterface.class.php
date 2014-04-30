<?php
interface Validations_ValidateurInterface
{
	public function setChamps($champs);
	public function getChamps();
	public function getMessageErreur();
	public function valide();
	public function getErreur();
	public function validation($champ);
}
?>