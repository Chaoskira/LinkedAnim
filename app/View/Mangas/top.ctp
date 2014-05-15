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
						<?php
							if($link['Mangas2']['types_id'] == 1)
							{
								echo "Shonen";
							}
							else if($link['Mangas2']['types_id'] == 2)
							{
								echo "Shojo";
							}
							else if($link['Mangas2']['types_id'] == 3)
							{
								echo "Sheinen";
							}
						?>&nbsp;
					</td>
					<td class = "center">
						<?php
							if($link['Mangas2']['kinds_id'] == 1)
							{
								echo "Comédie";
							}
							else if($link['Mangas2']['kinds_id'] == 2)
							{
								echo "Nekketsu";
							}
							else if($link['Mangas2']['kinds_id'] == 3)
							{
								echo "Fantasy";
							}
						?>&nbsp;
					</td>
					<td class = "center">
						<?php
							if($link['Mangas2']['kid'] == 1)
							{
								echo "Comédie";
							}
							else if($link['Mangas2']['kid'] == 2)
							{
								echo "Nekketsu";
							}
							else if($link['Mangas2']['kid'] == 3)
							{
								echo "Fantasy";
							}
						?>&nbsp;
					</td>
					<td class = "center">
						<?php
							if($link['Mangas2']['kids'] == 1)
							{
								echo "Comédie";
							}
							else if($link['Mangas2']['kids'] == 2)
							{
								echo "Nekketsu";
							}
							else if($link['Mangas2']['kids'] == 3)
							{
								echo "Fantasy";
							}
						?>&nbsp;
					</td>
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
</div>