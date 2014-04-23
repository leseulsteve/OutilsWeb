<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
		<title><?php print $titre_page ?></title>
		<?php if (!empty($feuillesCss)): ?>
			<?php foreach($feuillesCss as $feuille): ?>
				<link rel="stylesheet" type="text/css" href="<?php print $feuille ?>">
			<?php endforeach ?>
		<?php endif ?>
	</head>
	<body>
		<?php include 'page.tpl.php' ?>	
		<?php if (!empty($scripts)): ?>
			<?php foreach($scripts as $script): ?>
				<script type="text/JavaScript" src="<?php print $script ?>"></script>
			<?php endforeach ?>
		<?php endif ?>
	</body>
</html>