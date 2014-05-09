<div class="mangas form">
<?php echo $this->Form->create('Manga'); ?>
	<fieldset>
		<legend><?php echo __('Edit Manga'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('origin_name');
		echo $this->Form->input('editions_id');
		echo $this->Form->input('types_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('season_number');
		echo $this->Form->input('episode_number');
		echo $this->Form->input('coverage');
		echo $this->Form->input('tome_number');
		echo $this->Form->input('authors_id');
		echo $this->Form->input('status');
		echo $this->Form->input('kinds_id');
		echo $this->Form->input('kid');
		echo $this->Form->input('kids');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Manga.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Manga.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mangas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Editions'), array('controller' => 'editions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editions'), array('controller' => 'editions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Types'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authors'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kinds'), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kinds'), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
	</ul>
</div>
