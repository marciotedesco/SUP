<div class="grid_12">
	<h3>
		<?php echo __('Médicos'); ?>
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
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Especialidade'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('Cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('CRM'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($medicos as $medico): ?>
	<tr>
		<!--<td><?php echo h($medico['Medico']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($medico['Medico']['Nome']); ?>&nbsp;</td>
		<td><?php echo h($medico['Medico']['Especialidade']); ?>&nbsp;</td>
		<td><?php echo h($medico['Medico']['Telefone']); ?>&nbsp;</td>
		<td><?php echo h($medico['Medico']['Cidade']); ?>&nbsp;</td>
		<td><?php echo h($medico['Medico']['CRM']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Visualizar', array('action' => 'view', $medico['Medico']['id'])); ?>
			<?php echo $this->Html->link('Editar', array('action' => 'edit', $medico['Medico']['id'])); ?>
			<?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $medico['Medico']['id']), null, __('Você tem certeza que deseja deletar # %s?', $medico['Medico']['id'])); ?>
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
