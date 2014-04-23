<?php
class Themes_Defaut_Theme extends ClassesAbstraites_ThemeAbstraite
{
	public function __construct(){}

	/**
 	 * Une ligne sur deux sera d'une autre couleur.
 	 * Objet accepté = tableau.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setLigneRayees($objet){}

	/**
 	 * Une bordure tout le tour de l'objet sera ajouter.
 	 * Objet accepté = tableau.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setBordure($objet){}

	/**
 	 * Retire les syles de l'objet.
 	 * Objet accepté = liste.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setSansStyle($objet){}

	/**
 	 * Les éléments de l'objet envoyé en paramètre seront affichés horizontalement.
 	 * Objet accepté = conteneur.
 	 *
 	 * @param Objet L'objet à 'themer'.
 	 */
	public function setHorizontal($objet){}
}
?>