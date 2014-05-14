<div class="authors index">
	<div class="page-header">
		<h1 class= "center"><?php echo __(h($author['Author']['name'])); echo (' '); echo __(h($author['Author']['first_name']));?></h1>
	</div>
	<div class="col-md-12">
		<img class="col-md-4" style="width:180px; height:230px;" src="<?php echo h($author['Author']['image']); ?>"></img>
		<div class="col-md-8">
			<div class = "row">
				<div class="col-md-3">Nom :</div>
				<div class="col-md-1"><?php echo h($author['Author']['name']); ?></div>
			</div>
			<div class = "row">
				<div class="col-md-3">Prénom :</div>
				<div class="col-md-1"><?php echo h($author['Author']['first_name']); ?></div>
			</div>
			<div class = "row">
				<div class="col-md-3">Date de naissance :</div>
				<div class="col-md-1"><?php echo h($author['Author']['birthdate']); ?>&nbsp;	</div>
			</div>
			<div class = "row">
				<div class="col-md-3">Genre :</div>
				<?php if($author['Author']['gender'] == 0){?>
					<div class="col-md-1"><?php echo ('homme'); ?>&nbsp;</div>
				<?php }
				else{ ?>
					<div class="col-md-1"><?php echo ('femme'); ?>&nbsp;</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

