<div class="grid_12">

	<h3>
		<?php echo __('Administradores'); ?>
		<!-- START SEARCH -->
		<div id="search" class="grid_3 buttons">
			<form id="form1" name="form1" method="post" action="">
				<input type="text" class="text medium" id="search2" />
				<input name="Submit" type="submit" class="submit special" value="Ir" id="Submit" />
			</form>
		</div>
		<!-- END SEARCH -->
	</h3>

	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Instituicao'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('Profissional'); ?></th>-->
			<th><?php echo $this->Paginator->sort('ARS'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($administradores as $administrador): ?>
	<tr>
		<!--<td><?php echo h($administrador['Administrador']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($administrador['Instituicao']['Nome'], array('controller' => 'instituicoes', 'action' => 'view', $administrador['Instituicao']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($administrador['Profissional']['Nome'], array('controller' => 'profissionais', 'action' => 'view', $administrador['Profissional']['id'])); ?>
		</td>
		<td><?php echo h($administrador['Administrador']['ARS']); ?>&nbsp;</td>-->
		<td><?php echo h($administrador['Administrador']['id']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Nome']); ?>&nbsp;</td>
		<td>
			<?php echo h($administrador['Instituicao']['Nome']); ?>&nbsp;
		</td>
		<!--<td>
			<?php echo h($administrador['Profissional']['Nome']); ?>&nbsp;
		</td>-->
		<td><?php echo h($administrador['Administrador']['ARS']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $administrador['Administrador']['id']), null, __('Are you sure you want to delete # %s?', $administrador['Administrador']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, exibindo {:current} registros do total de {:count}, iniciando em {:start}, terminando em {:end}')
		));
	?>	</p>

	<div class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior '), array(), null, array('class' => 'previous-off'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próxima') . ' >', array(), null, array('class' => 'next'));
	?>
	</div>
</div>
