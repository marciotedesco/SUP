<div class="grid_12">
<h2><?php  echo __('Prontuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prontuario['Prontuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prontuario['Paciente']['Nome'], array('controller' => 'pacientes', 'action' => 'view', $prontuario['Paciente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="grid_12">
	<h3><?php echo __('Consultas'); ?></h3>
	<?php if (!empty($prontuario['Consulta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Medico Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Prontuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($prontuario['Consulta'] as $consulta): ?>
		<tr>
			<td><?php echo $consulta['id']; ?></td>
			<td><?php echo $consulta['Medico_id']; ?></td>
			<td><?php echo $consulta['Paciente_id']; ?></td>
			<td><?php echo $consulta['Data']; ?></td>
			<td><?php echo $consulta['Valor']; ?></td>
			<td><?php echo $consulta['Prontuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consultas', 'action' => 'view', $consulta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consultas', 'action' => 'edit', $consulta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consultas', 'action' => 'delete', $consulta['id']), null, __('Are you sure you want to delete # %s?', $consulta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="grid_12">
	<h3><?php echo __('Diagnósticos'); ?></h3>
	<?php if (!empty($prontuario['Diagnostico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sintomas'); ?></th>
		<th><?php echo __('Comentarios'); ?></th>
		<th><?php echo __('Receita'); ?></th>
		<th><?php echo __('Prontuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($prontuario['Diagnostico'] as $diagnostico): ?>
		<tr>
			<td><?php echo $diagnostico['id']; ?></td>
			<td><?php echo $diagnostico['Sintomas']; ?></td>
			<td><?php echo $diagnostico['Comentarios']; ?></td>
			<td><?php echo $diagnostico['Receita']; ?></td>
			<td><?php echo $diagnostico['Prontuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'diagnosticos', 'action' => 'view', $diagnostico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'diagnosticos', 'action' => 'edit', $diagnostico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diagnosticos', 'action' => 'delete', $diagnostico['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Diagnostico'), array('controller' => 'diagnosticos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="grid_12">
	<h3><?php echo __('Exames'); ?></h3>
	<?php if (!empty($prontuario['Exame'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Medico Id'); ?></th>
		<th><?php echo __('Prontuario Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Resultado'); ?></th>
		<th><?php echo __('Exame Disponivel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($prontuario['Exame'] as $exame): ?>
		<tr>
			<td><?php echo $exame['id']; ?></td>
			<td><?php echo $exame['Medico_id']; ?></td>
			<td><?php echo $exame['Prontuario_id']; ?></td>
			<td><?php echo $exame['Data']; ?></td>
			<td><?php echo $exame['Resultado']; ?></td>
			<td><?php echo $exame['Exame_Disponivel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exames', 'action' => 'view', $exame['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exames', 'action' => 'edit', $exame['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exames', 'action' => 'delete', $exame['id']), null, __('Are you sure you want to delete # %s?', $exame['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Exame'), array('controller' => 'exames', 'action' => 'add')); ?> </li>
		</ul>
	</div>

</div>
<a href="javascript:window.history.back()">Voltar</a>
