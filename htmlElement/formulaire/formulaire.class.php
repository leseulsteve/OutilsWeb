<?php
class HtmlElement_Formulaire_Formulaire extends HtmlElement_ClassesAbstraites_HtmlElementAbstraite
{
	private $scriptTraitement;
	private $composantes = array();
	private $texteBouttonEnvoyer;
	
	public function __construct($scriptTraitement, $texteBouttonEnvoyer)
	{
		$this->scriptTraitement = $scriptTraitement;
		$this->texteBouttonEnvoyer = $texteBouttonEnvoyer;
	}
	
	public function ajout($composante)
	{
		array_push($this->composantes, $composante);
	}
	
	public function getComposantes()
	{
		return $this->composantes;
	}
	
	public function getScriptTraitement()
	{
		return $this->scriptTraitement;
	}
	
	public function getTexteBouttonEnvoyer()
	{	
		return $this->texteBouttonEnvoyer;
	}
}