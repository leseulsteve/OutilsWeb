<?php
//
// Variables disponibles:
//
$classes = $this->getClassesString();
$id = $this->getId();
//
?>

<div class="groupe-champs <?php print !is_null($classes) ? ' ' . $classes : '' ?>" <?php (!is_null($id)) ? print 'id="' . $id . '"': '' ?>>
	<?php if (is_null($this->getLegende())):?>
		<?php foreach ($this->getChamps() as $composante):?>
			<?php $composante->render(); ?>
		<?php endforeach;?>	
	<?php else:?>	 
		<fieldset>
			<legend><?php print $this->getLegende() ?></legend>
				<?php foreach ($this->getChamps() as $composante):?>
					<?php $composante->render() ?>
				<?php endforeach ?>	
		</fieldset>
	<?php endif ?>
</div>