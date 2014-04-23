<?php
//
// Variables disponibles:
//
$estOrdonnee = $this->estOrdonnee();
$olOuUl = $estOrdonnee ? 'ul' : 'ol';
$elements = $this->getElements();
$sousListe = $this->getSousListes();
$classes = $this->getClassesString();
$id = $this->getId();
//
//
?>

<?php print '<' . $olOuUl ?> <?php print isset($classes) ? ' class="' . $classes . '"': '' ?> <?php print isset($id) ? 'id="' . $id . '"' : '' ?>/> 
	<?php foreach($elements as $clef => $element): ?>
		<li>
			<?php print $element; ?>
			<?php if(array_key_exists($clef, $sousListe)): ?>
				<?php $sousListe[$clef]->render() ?>
			<?php endif ?>
		</li>
	<?php endforeach ?>
<?php print '</' . $olOuUl . '>' ?>