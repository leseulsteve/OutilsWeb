<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">	
			<div class="<?php print $this->get_type()?>">
				
					<?php foreach ($this->get_liste_choix() as $choix):?>
					<p>
						<label>
							<input type="<?php print $this->get_type()?>" name="<?php print $this->get_id()?>[<?php print $choix ?>]"><?php print $choix ?>
						</label>
				</p>
			<?php endforeach ?>	
		</div>
	</div>
</div>