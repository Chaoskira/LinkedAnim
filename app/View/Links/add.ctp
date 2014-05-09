<div class="links form">
<?php echo $this->Form->create('Link'); ?>
	<fieldset>
		<legend><?php echo __('Add Link'); ?></legend>
	<?php
		echo $this->Form->input('mangas_id');
		echo $this->Form->input('mid');
		echo $this->Form->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mangas'), array('controller' => 'mangas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mangas'), array('controller' => 'mangas', 'action' => 'add')); ?> </li>
	</ul>
</div>
