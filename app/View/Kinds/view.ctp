<div class="kinds view">
<h2><?php echo __('Kind'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kind'), array('action' => 'edit', $kind['Kind']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kind'), array('action' => 'delete', $kind['Kind']['id']), null, __('Are you sure you want to delete # %s?', $kind['Kind']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kinds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kind'), array('action' => 'add')); ?> </li>
	</ul>
</div>
