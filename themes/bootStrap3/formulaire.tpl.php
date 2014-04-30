<form class="form-horizontal" action="<?php print $this->getScriptTraitement() ?>" role="form" method="post">
	<?php foreach ($this->getComposantes() as $composante):?>
		<?php $composante->render() ?>
	<?php endforeach ?>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default"><?php print $this->getTexteBouttonEnvoyer() ?></button>
		</div>
	</div>
</form>