<div class="links view">
<h2><?php echo __('Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($link['Link']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mangas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($link['Mangas']['name'], array('controller' => 'mangas', 'action' => 'view', $link['Mangas']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mangas2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($link['Mangas2']['name'], array('controller' => 'mangas', 'action' => 'view', $link['Mangas2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($link['Link']['number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Link'), array('action' => 'edit', $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Link'), array('action' => 'delete', $link['Link']['id']), null, __('Are you sure you want to delete # %s?', $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mangas'), array('controller' => 'mangas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mangas'), array('controller' => 'mangas', 'action' => 'add')); ?> </li>
	</ul>
</div>
