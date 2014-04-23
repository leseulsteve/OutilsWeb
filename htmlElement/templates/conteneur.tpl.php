<div class="<?php print $this->getClassesString() ?>" <?php (!is_null($this->getId())) ? print 'id="' . $this->getId() . '"': '' ?>>
<?php foreach($this->getElement() as $element): ?>
	<?php $element->render()?>
<?php endforeach ?>
</div>