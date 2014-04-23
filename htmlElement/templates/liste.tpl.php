<?php $classes = 'class="' . $this->getClassesString() . ' ' . $this->getNiveau() . '"' ?>
	<?php print ($this->estOrdonnee()) ? '<ol ' . $classes .'>' : '<ul ' . $classes .'>'; ?>
		<?php foreach($this->getElements() as $clef => $element): ?>
			<li>
				<?php print $element; ?>
				<?php if(array_key_exists($clef, $this->getSousListe())): ?>
					<?php $this->getSousListe()[$clef]->render() ?>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	<?php print ($this->estOrdonnee()) ? '</ol>' : '</ul>'; ?>
