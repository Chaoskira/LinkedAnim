<div class="authors form">
<?php echo $this->Form->create('Author'); ?>
	<fieldset>
		<legend><?php echo __('Edit Author'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Author.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Author.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?></li>
	</ul>
</div>