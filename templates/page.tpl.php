<?php if (isset($message)): ?>	
	<div class="message">
		<?php print $message ?>
	</div>
<?php endif?>

<?php if (isset($header)): ?>	
	<div class="page-header">
		<h1><?php print $header ?></h1>
	</div>
<?php endif?>

<div class="contenu">
<?php print $contenu->render() ?>
</div>