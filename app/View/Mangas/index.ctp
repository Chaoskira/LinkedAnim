<div class="mangas index">
	<h2><?php echo __('Mangas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('origin_name'); ?></th>
			<th><?php echo $this->Paginator->sort('editions_id'); ?></th>
			<th><?php echo $this->Paginator->sort('types_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('season_number'); ?></th>
			<th><?php echo $this->Paginator->sort('episode_number'); ?></th>
			<th><?php echo $this->Paginator->sort('coverage'); ?></th>
			<th><?php echo $this->Paginator->sort('tome_number'); ?></th>
			<th><?php echo $this->Paginator->sort('authors_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('kinds_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kid'); ?></th>
			<th><?php echo $this->Paginator->sort('kids'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mangas as $manga): ?>
	<tr>
		<td><?php echo h($manga['Manga']['id']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['name']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['origin_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manga['Editions']['name'], array('controller' => 'editions', 'action' => 'view', $manga['Editions']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($manga['Types']['name'], array('controller' => 'types', 'action' => 'view', $manga['Types']['id'])); ?>
		</td>
		<td><?php echo h($manga['Manga']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['season_number']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['episode_number']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['coverage']); ?>&nbsp;</td>
		<td><?php echo h($manga['Manga']['tome_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manga['Authors']['name'], array('controller' => 'authors', 'action' => 'view', $manga['Authors']['id'])); ?>
		</td>
		<td><?php echo h($manga['Manga']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manga['Kinds']['name'], array('controller' => 'kinds', 'action' => 'view', $manga['Kinds']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($manga['Kinds2']['name'], array('controller' => 'kinds', 'action' => 'view', $manga['Kinds2']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($manga['Kinds3']['name'], array('controller' => 'kinds', 'action' => 'view', $manga['Kinds3']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $manga['Manga']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $manga['Manga']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $manga['Manga']['id']), null, __('Are you sure you want to delete # %s?', $manga['Manga']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Manga'), array('action' => 'add')); ?></li>
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
