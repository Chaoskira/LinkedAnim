<div class="mangas index">
	<div class="page-header">
		<h1 class= "center"><?php echo __(h($manga['Manga']['name'])); ?></h1>
	</div>
	<div class="col-md-12">
		<img class="col-md-4" style="width:180px; height:230px;" src="<?php echo h($manga['Manga']['coverage']); ?>"></img>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-3">Titre original :</div>
				<div class="col-md-2"><?php echo h($manga['Manga']['origin_name']); ?></div>
			</div>
			<div class="row">
				<div class="col-md-3">Auteur :</div>
				<div class="col-md-1"><?php echo $this->Html->link($manga['Authors']['name'], array('controller' => 'authors', 'action' => 'view', 'id' => $manga['Authors']['id'])); ?></div>
				<div class="col-md-1"><?php echo $this->Html->link($manga['Authors']['first_name'], array('controller' => 'authors', 'action' => 'view', 'id' => $manga['Authors']['id'])); ?></div>
			</div>
			<div class="row">
				<div class="col-md-3">Type :</div>
				<div class="col-md-2"><?php echo $this->Html->link($manga['Types']['name'], array('controller' => 'types', 'action' => 'view', $manga['Types']['id'])); ?></div>
			</div>
			<div class="row">	
				<div class="col-md-3">Genre :</div>
				<div class="col-md-1"><?php echo $this->Html->link($manga['Kinds']['name'], array('controller' => 'kinds', 'action' => 'view', 'id' => $manga['Kinds']['id'])); ?></div>
				<?php 
					if($manga['Manga']['kid'] != "")
					{
						echo '<div class="col-md-1" style="text-align:center"> - </div>';
					}
				?>
				<div class="col-md-1"><?php echo $this->Html->link($manga['Kinds2']['name'], array('controller' => 'kinds', 'action' => 'view', 'id' => $manga['Kinds2']['id'])); ?></div>
				<?php 
					if($manga['Manga']['kids'] != "")
					{
						echo '<div class="col-md-1" style="text-align:center"> - </div>';
					}
				?>
				<div class="col-md-1"><?php echo $this->Html->link($manga['Kinds3']['name'], array('controller' => 'kinds', 'action' => 'view', 'id' => $manga['Kinds3']['id'])); ?></div>
			</div>
			<div class="row">	
			<div class="col-md-3">Tome : </div>
				<div class="col-md-1"><?php echo h($manga['Manga']['tome_number']); ?></div>
			</div>
			<div class="row">
				<div class="col-md-3">Episode :</div>
				<div class="col-md-1"><?php echo h($manga['Manga']['episode_number']); ?></div>
			</div>
			<div class="row">
				<div class="col-md-3">Saison :</div>
				<div class="col-md-2"><?php echo h($manga['Manga']['season_number']); ?></div>
			</div>
			<div class="row">
				<div class="col-md-3">Date de début :</div>
				<div class="col-md-1"><?php echo h($manga['Manga']['start_date']); ?></div>
			</div>
			<div class="row">
				<?php 
					if($manga['Manga']['end_date'] != "0000-00-00")
					{
						echo '<div class="col-md-2">Date de fin :</div>';
						echo '<div class="col-md-1">';
						echo h($manga['Manga']['end_date']);
						echo '</div>';
					}
				?>
			</div>
			<div class="row">
				<div class="col-md-3">Status :</div>
				<div class="col-md-2"><?php echo h($manga['Manga']['status']); ?></div>
			</div>
			<div class="row">	
				<div class="col-md-3">Editeur :</div>
				<div class="col-md-3"><?php echo $this->Html->link($manga['Editions']['name'], array('controller' => 'editions', 'action' => 'view', 'id' => $manga['Editions']['id'])); ?></div>
			</div>
			<div class="row">
			<?php echo $this->Html->link(
					__('Manga liés'),
					array('action' => 'top', 'id' => $manga['Manga']['id']),
					array('class' => 'btn btn-default btn-sm')
				); ?>
			</div>
		</div>
	</div>
</div>

