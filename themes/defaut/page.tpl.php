<?php
//
// Variables disponibles:
//
$message;
$filArianeStatut = $this->getFilArianeStatut();
$pageHeader = $this->getPageHeader();
$contenuPincipal = $this->getContenuPrincipal();
//
//
?>

<?php if (isset($message)): ?>	
	<div class="message">
		<?php print $message ?>
	</div>
<?php endif?>


<?php if ($filArianeStatut): ?>	
	<?php  $this->getFilAriane()->render(); ?>
<?php endif?>

<?php if (isset($pageHeader)): ?>	
	<div class="page-header">
		<h1><?php print $pageHeader ?></h1>
	</div>
<?php endif?>

<div class="contenu">
<?php print $contenuPincipal->render() ?>
</div>