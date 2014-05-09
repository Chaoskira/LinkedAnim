<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset>
		<legend><?php echo __('Add Kind'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Kinds'), array('action' => 'index')); ?></li>
	</ul>
</div>
