<div role="main">
	<div class="page-header">
		<h1 class= "center"><?php echo __('Mangas liés'); ?></h1>
	</div>
		<table class="table table-bordered table-striped">
			<tr>
				<th class = "center"><?php echo 'couverture'; ?></th>
				<th class = "center"><?php echo 'nom'; ?></th>
				<th class = "center"><?php echo "nom d'origine"; ?></th>
				<th class = "center"><?php echo 'type'; ?></th>
				<th class = "center"><?php echo 'genre'; ?></th>
				<th class = "center"><?php echo 'genre'; ?></th>
				<th class = "center"><?php echo 'genre'; ?></th>
				<th class="actions center"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($links as $link): ?>
				<tr>
					<td class = "center"><img src = "<?php echo h($link['Mangas2']['coverage']); ?>" class = "images"/>&nbsp;</td>
					<td class = "center"><?php echo h($link['Mangas2']['name']); ?>&nbsp;</td>
					<td class = "center"><?php echo h($link['Mangas2']['origin_name']); ?>&nbsp;</td>
					<td class = "center">
						<?php echo h($link['Mangas2']['types_id']); ?>&nbsp;
					</td>
					<td class = "center"><?php echo h($link['Mangas2']['kinds_id']); ?>&nbsp;</td>
					<td class = "center"><?php echo h($link['Mangas2']['kid']); ?>&nbsp;</td>
					<td class = "center"><?php echo h($link['Mangas2']['kids']); ?>&nbsp;</td>
					<td class="actions center">
						<?php echo $this->Html->link(
							__('View'),
							array('action' => 'view', 'id' => $link['Mangas2']['id']),
							array('class' => 'btn btn-default btn-sm')
						); ?>
						<?php echo $this->Html->link(
							__('Mangas liés'),
							array('action' => 'top', 'id' => $link['Mangas2']['id']),
							array('class' => 'btn btn-default btn-sm')
						); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<div>
			<p> Type = 1 : Shonen </p>
			<p> Type = 2 : Shojo </p>
			<p> Type = 3 : Seinen </p>
		</div>
		<div style = "text-align : right; margin-top : -100px;">
			<p> Genre = 1 : Comédie </p>
			<p> Genre = 2 : Nekketsu </p>
			<p> Genre = 3 : Fantasy </p>
		</div>
</div>