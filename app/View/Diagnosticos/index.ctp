<div class="grid_12">
	<h3>
		<?php echo __('Diagnósticos'); ?>
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
			<th><?php echo $this->Paginator->sort('Paciente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Medico_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($diagnosticos as $diagnostico): ?>
	<tr>
		<!--<td><?php echo h($diagnostico['Diagnostico']['id']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($diagnostico['Paciente']['Nome'], array('controller' => 'pacientes', 'action' => 'view', $diagnostico['Paciente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diagnostico['Medico']['Nome'], array('controller' => 'medicos', 'action' => 'view', $diagnostico['Medico']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('Visualizar', array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php echo $this->Html->link('Editar', array('action' => 'edit', $diagnostico['Diagnostico']['id'])); ?>
			<?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Você tem certeza que deseja deletar diagnostico # %s?', $diagnostico['Diagnostico']['id'])); ?>
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
