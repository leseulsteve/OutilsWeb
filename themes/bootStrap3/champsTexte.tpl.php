<?php
//
// Variables disponibles:
//
$etiquette = $this->getEtiquette();
$nom = $this->getNom();
//
?>

<div class="form-group">
	<?php if (isset($etiquette)): ?>
		<label for="<?php print $nom ?>" class="col-sm-2 control-label"><?php print $this->getEtiquette()?></label>
	<?php endif ?>
		<div class="col-sm-10">
		<input type="<?php print $this->getTypeEntree()?>" class="form-control" id="<?php print $nom ?>" name="<?php print $nom ?>"
		
		<?php if ($this->estRequis() ):?>
			 required
		<?php endif ?>
		
		<?php if ($this->getValeur() != null ):?>
			value ="<?php print $this->getValeur()?>"
		<?php endif ?>
		
		<?php if ($this->getPlaceholder() != null ):?>	
			placeholder="<?php print $this->getPlaceholder()?>"
		<?php endif ?>
		
		></div>
</div>		