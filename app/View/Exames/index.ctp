<div class="grid_12">
	<h3>
		<?php echo __('Exames'); ?>
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
			<th><?php echo $this->Paginator->sort('Medico'); ?></th>
			<th><?php echo $this->Paginator->sort('Paciente'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('Exame_Disponivel'); ?></th>
			<th class="actions">Ações</th>
	</tr>
	<?php
	foreach ($exames as $exame): ?>
	<tr>
		<!--<td><?php echo h($exame['Exame']['id']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($exame['Medico']['Nome'], array('controller' => 'medicos', 'action' => 'view', $exame['Medico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($exame['Paciente']['Nome'], array('controller' => 'pacientes', 'action' => 'view', $exame['Paciente']['id'])); ?>
		</td>
		<td><?php echo h($exame['Exame']['Data']); ?>&nbsp;</td>
		<td><?php echo h($exame['ExameDisponivel']['Nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Visualizar', array('action' => 'view', $exame['Exame']['id'])); ?>
			<?php echo $this->Html->link('Editar', array('action' => 'edit', $exame['Exame']['id'])); ?>
			<?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $exame['Exame']['id']), null, __('Você tem certeza que deseja deletar exame # %s?', $exame['Exame']['id'])); ?>
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
