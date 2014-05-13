<div class="mangas index">
	<div class="page-header">
		<h1 class= "center"><?php echo __('Mangas'); ?></h1>
	</div>
	<table class="table table-bordered table-striped">
		<tr class = "center">
				<th><?php echo $this->Paginator->sort('coverage'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('origin_name'); ?></th>
				<th><?php echo $this->Paginator->sort('types_id'); ?></th>
				<th><?php echo $this->Paginator->sort('genre 1'); ?></th>
				<th><?php echo $this->Paginator->sort('genre 2'); ?></th>
				<th><?php echo $this->Paginator->sort('genre 3'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($mangas as $manga): ?>
		<tr>
			<td><?php echo h($manga['Manga']['coverage']); ?>&nbsp;</td>
			<td><?php echo h($manga['Manga']['name']); ?>&nbsp;</td>
			<td><?php echo h($manga['Manga']['origin_name']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($manga['Types']['name'], array('controller' => 'types', 'action' => 'view', $manga['Types']['id'])); ?>
			</td>
			<td><?php echo $this->Html->link($manga['Kinds']['name'], array('controller' => 'kinds', 'action' => 'view', 'id' => $manga['Kinds']['id'])); ?>&nbsp;</td>
			<td><?php echo $this->Html->link($manga['Kinds2']['name'], array('controller' => 'kinds', 'action' => 'view', 'id' => $manga['Kinds2']['id'])); ?>&nbsp;</td>
			<td><?php echo $this->Html->link($manga['Kinds3']['name'], array('controller' => 'kinds', 'action' => 'view', 'id' => $manga['Kinds3']['id'])); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(
					__('View'),
					array('action' => 'view', 'id' => $manga['Manga']['id']),
					array('class' => 'btn btn-default btn-sm')
				); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

