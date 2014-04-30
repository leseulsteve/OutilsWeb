<div class="form-group">
	<label for="<?php print $this->get_id()?>" class="col-sm-2 control-label"><?php print $this->get_etiquette()?></label>
		<div class="col-sm-offset-2 col-sm-10">	
		<div class="select">
			<select class="form-control" id="<?php print $this->get_id()?>" name="<?php print $this->get_id()?>"
				<?php if ($this->est_requis() ):?>
			 		required
				<?php endif ?>
				>
				<option value="">- Faites votre choix -</option>

				<?php foreach($this->get_liste_choix() as $clef => $choix):?>
		
		   		<option value="<?php print $clef ?>"
		   			
		   			<?php if ($this->get_valeur() == $clef):?>
		   			
		   				 selected="selected"
		   			
		   			<?php endif ?>
		   			
		    	><?php print $choix ?></option>
		
				<?php endforeach ?> 
		      			
			</select>
		</div>
	</div>
</div>