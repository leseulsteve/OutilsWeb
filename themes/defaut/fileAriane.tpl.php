<?php
//
// Variables disponibles:
//
$filAriane = self::$filAriane;
$classes = $this->getClassesString();
$id = $this->getId();
//
//
?>
<ol class="breadcrumb">
	<?php $nbElement = count($filAriane) ?>
	<?php $compteur = 0 ?>
	<?php foreach ($filAriane as $titre => $lien) : ?>
			<?php if(++$compteur === $nbElement) : ?>
				<li class="active"><a href=" <?php print $lien ?> "> <?php print $titre ?>	</a></li>
			<?php else : ?>
				<li><a href=" <?php print $lien ?> "> <?php print $titre ?>	</a></li> 	
			<?php endif ?>	
	<?php endforeach ?>
</ol>