<?php
$theme = new Themes_BootStrap3_Theme();




$titre_page = 'Tableau';
$feuillesCss = array();
array_push($feuillesCss, '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
$contenu = new HtmlElement_Conteneur;

$donnees = array();
$steve = array();
$steve['Prénom'] = 'Steve';
$steve['Nom'] = 'Boisvert';
$steve['Age'] = 33;
$julie = array();
$julie['Prénom'] = 'Julie';
$julie['Nom'] = 'Babouine';
$julie['Age'] = 34;
$jess = array();
$jess['Prénom'] = 'Jess';
$jess['Nom'] = 'Desbiens';
$jess['Age'] = 28;
array_push($donnees, $steve);
array_push($donnees, $julie);
array_push($donnees, $jess);

$tableau = new HtmlElement_Tableau($donnees);
$theme->setBordure($tableau);
$theme->setLigneRayees($tableau);


$contenu_droite = new HtmlElement_Conteneur();

$contenu_droite->ajout($tableau);
$contenu->ajout($contenu_droite);

$listeElements = array('aaa', 'bbb', 'ccc', 'ddd', 'abc');

$liste = new HtmlElement_Liste($listeElements);
$liste->trier();

$souslisteElement = array('123', '4545', '34343');
$nouvelle_liste = new HtmlElement_Liste($souslisteElement);
$nouvelle_liste->setListeOrdonee();

$souslisteElement2 = array('123', '4545', '34343');
$nouvelle_liste2 = new HtmlElement_Liste($souslisteElement);



$nouvelle_liste->ajoutSousListe(1, $nouvelle_liste2);
$liste->ajoutSousListe(2, $nouvelle_liste);

$contenu_gauche = new HtmlElement_Conteneur();

$contenu_gauche->ajout($liste);

$contenu->ajout($contenu_gauche);


$code = new HtmlElement_BlocCode('c:\fdfkjfdkdk');

$contenu->ajout($code);

include 'themes/bootstrap3/html.tpl.php';

function __autoload($class_name)
{
	$nom_fichier = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name)).'.class.php';
	include_once $nom_fichier;
}
?>