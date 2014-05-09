<div class="links index">
	<h2><?php echo __('Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mangas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mid'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($links as $link): ?>
	<tr>
		<td><?php echo h($link['Link']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($link['Mangas']['name'], array('controller' => 'mangas', 'action' => 'view', $link['Mangas']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($link['Mangas2']['name'], array('controller' => 'mangas', 'action' => 'view', $link['Mangas2']['id'])); ?>
		</td>
		<td><?php echo h($link['Link']['number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $link['Link']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $link['Link']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $link['Link']['id']), null, __('Are you sure you want to delete # %s?', $link['Link']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mangas'), array('controller' => 'mangas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mangas'), array('controller' => 'mangas', 'action' => 'add')); ?> </li>
	</ul>
</div>
