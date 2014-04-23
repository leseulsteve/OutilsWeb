<table class="<?php print $this->getClassesString() ?>" <?php (!is_null($this->getId())) ? print 'id="' . $this->getId() . '"': '' ?>>
	<tr>
		<?php for($i = 0; $i < sizeof($this->getEntetes()); $i++): ?>
			<th class="<?php print $this->getColonneClasses($i + 1) ?>">
				<?php print $this->getEntetes()[$i] ?>
			</th>
		<?php endfor?>
	</tr>
	<?php for ($i = 0; $i < sizeof($this->getDonnees()); $i++): ?>
	<tr class="<?php print $this->getligneClasses($i + 1) ?>">
		<?php $compteurColonne = 1; ?>
		<?php foreach ($this->getDonnees()[$i] as $donnees): ?>
			<td class="<?php print $this->getColonneClasses($compteurColonne)?>">
				<?php print $donnees ?>
			</td>
		<?php $compteurColonne++; ?>
		<?php endforeach ?>	
	</tr>
	<?php endfor ?>	
</table>