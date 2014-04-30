<?php
//
// Variables disponibles:
//
$classes = $this->getClassesString();
$id = $this->getId();
$entetes = $this->getEntetes();
$colonneClasses =  $this->getColonneClasses();
$ligneClasses  = $this->getligneClasses()
//
?>

<table <?php print isset($classes) ? 'class="' . $classes . '"' : '' ?> <?php print isset($id) ? 'id="' . $id . '"' : '' ?>>
	<tr>
		<?php for($i = 0; $i < sizeof($this->getEntetes()); $i++): ?>
			<th class="<?php print $colonneClasses[$i + 1] ?>">
				<?php print $entetes[$i] ?>
			</th>
		<?php endfor?>
	</tr>
	<?php for ($i = 0; $i < sizeof($this->getDonnees()); $i++): ?>
	<tr class="<?php print $ligneClasses[$i] ?>">
		<?php $compteurColonne = 1; ?>
		<?php foreach ($this->getDonnees()[$i] as $donnees): ?>
			<td class="<?php print $colonneClasses[$compteurColonne] ?>">
				<?php if (is_a($donnees, 'HtmlElement_ClassesAbstraites_HtmlElementAbstraite')): ?>
					<?php $donnees->render() ?>
				<?php else: ?>
					<?php print $donnees ?>
				<?php endif ?>
			</td>
		<?php $compteurColonne++; ?>
		<?php endforeach ?>	
	</tr>
	<?php endfor ?>	
</table>