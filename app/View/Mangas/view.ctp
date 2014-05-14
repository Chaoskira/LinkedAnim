<div class="mangas view">
<h2><?php echo __('Manga'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin Name'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['origin_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Editions'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manga['Editions']['name'], array('controller' => 'editions', 'action' => 'view', $manga['Editions']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Types'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manga['Types']['name'], array('controller' => 'types', 'action' => 'view', $manga['Types']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season Number'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['season_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Episode Number'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['episode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverage'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['coverage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tome Number'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['tome_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authors'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manga['Authors']['name'], array('controller' => 'authors', 'action' => 'view', $manga['Authors']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($manga['Manga']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinds'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manga['Kinds']['name'], array('controller' => 'kinds', 'action' => 'view', $manga['Kinds']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinds2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manga['Kinds2']['name'], array('controller' => 'kinds', 'action' => 'view', $manga['Kinds2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinds3'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manga['Kinds3']['name'], array('controller' => 'kinds', 'action' => 'view', $manga['Kinds3']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>