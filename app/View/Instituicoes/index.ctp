<div class="grid_12">
	<h3>
		<?php echo __('Instituições'); ?> 
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
		<!--<th><?php echo $this->Paginator->sort('ID'); ?></th>-->
		<th><?php echo $this->Paginator->sort('Nome'); ?></th>
		<th><?php echo $this->Paginator->sort('Endereco'); ?></th>
		<th><?php echo $this->Paginator->sort('Telefone'); ?></th>
		<th><?php echo $this->Paginator->sort('Cidade'); ?></th>
		<th><?php echo $this->Paginator->sort('Data de Fundação'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($instituicoes as $instituicao): ?>
	<tr>
		<!--<td><?php echo h($instituicao['Instituicao']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($instituicao['Instituicao']['Nome']); ?>&nbsp;</td>
		<td><?php echo h($instituicao['Instituicao']['Endereco']); ?>&nbsp;</td>
		<td><?php echo h($instituicao['Instituicao']['Telefone']); ?>&nbsp;</td>
		<td><?php echo h($instituicao['Instituicao']['Cidade']); ?>&nbsp;</td>
		<td><?php echo h($instituicao['Instituicao']['DataFundacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Visualizar', array('action' => 'view', $instituicao['Instituicao']['id'])); ?>
			<?php echo $this->Html->link('Editar', array('action' => 'edit', $instituicao['Instituicao']['id'])); ?>
			<?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $instituicao['Instituicao']['id']), null, __('Você tem certeza que deseja excluir a instituicao # %s?', $instituicao['Instituicao']['id'])); ?>
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
