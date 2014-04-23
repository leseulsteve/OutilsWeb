<?php
//
// Variables disponibles:
//
$classes = $this->getClassesString();
$id = $this->getId();
$elements = $this->getElements();
//
//
?>

<div class="container<?php print isset($classes) ? ' ' . $classes: '' ?>" <?php print isset($id) ? 'id="' . $id . '"' : '' ?>>
<?php foreach($elements as $element): ?>
	<?php $element->render()?>
<?php endforeach ?>
</div>