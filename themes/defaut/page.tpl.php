<?php
//
// Variables disponibles:
//
$message;
$filAriane = $this->estFilAriane();
$header;
$contenuPincipal = $this->getContenuPrincipal();
//
//
?>

<?php if (isset($message)): ?>	
	<div class="message">
		<?php print $message ?>
	</div>
<?php endif?>


<?php if ($filAriane): ?>	
	<?php print $this->getFileAriane() ?>ff
	<ol class="breadcrumb">
  		<li><a href="#">Home</a></li>
  		<li><a href="#">Library</a></li>
  		<li class="active">Data</li>
	</ol>

<?php endif?>

<?php if (isset($header)): ?>	
	<div class="page-header">
		<h1><?php print $header ?></h1>
	</div>
<?php endif?>

<div class="contenu">
<?php print $contenuPincipal->render() ?>
</div>