<?php
class Index extends ClassesAbstraites_ControleurAbstraite
{
	public function __construct()
	{
		parent::__construct('Acceuil');

		$int = 0;
		$valeurMin = 1;
		$valeurMax = 10;

		$estInteger = new Validations_Validateurs_estInteger();
		$minMax = new Validations_Validateurs_MinMax($valeurMin, $valeurMax);

		$validation = new Validations_Validation($int);
		$validation->ajoutValidateur($estInteger);
		$validation->ajoutValidateur($minMax);

		$erreurs = $validation->valide();


		if (!empty($erreurs))
		{
			$message = '';
			foreach ($erreurs as $erreur)
			{
				$message .= $erreur->getMessage() . '<br>';
			}

			$code = new HtmlElement_BlocCode($message);
			$this->ajoutContenuPrinpal($code);
		}
		
		

		//$this->ajoutContenuPrinpal($this->contenu());
		//$this->setPageHeader("Paul's Informatique");

		//$this->setFilAriane(true);

		$this->render();
	}

	private function contenu()
	{
		$produits = array();

		$produit1['Produit'] = 'Disque dur';
		$champTexte1 = new HtmlElement_Formulaire_ChampsTexte('text');
		$champTexte1->setNom('entree-HD');
		$produit1['Quantité'] = $champTexte1;

		$produit2['Produit'] = 'Souris';
		$champTexte2 = new HtmlElement_Formulaire_ChampsTexte('text');
		$champTexte2->setNom('entree-souris');
		$produit2['Quantité'] = $champTexte2;

		$produit3['Produit'] = 'Cable (m)';
		$champTexte3 = new HtmlElement_Formulaire_ChampsTexte('text');
		$champTexte3->setNom('entree-cable');
		$produit3['Quantité'] = $champTexte3;

		$addresse['Produit'] = 'Addresse de destination';
		$champTexteAddresse = new HtmlElement_Formulaire_ChampsTexte('text');
		$champTexteAddresse->setNom('entree-addresse');
		$champTexteAddresse->setPlaceholder('ex: Cegep Limoilou');
		$champTexteAddresse->setRequis(true);
		$addresse['Quantité'] = $champTexteAddresse;

		array_push($produits, $produit1);
		array_push($produits, $produit2);
		array_push($produits, $produit3);
		array_push($produits, $addresse);

		$tableau = new HtmlElement_Tableau($produits);

		$tableauCommande = new HtmlElement_Formulaire_groupeChamps('Formulaire de commande');
		$tableauCommande->ajout($tableau);

		$formulaire = new HtmlElement_Formulaire_Formulaire('script', 'Envoyer');
		$formulaire->ajout($tableauCommande);
	
		$contenu = new HtmlElement_Conteneur();
		$contenu->ajout($formulaire);

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