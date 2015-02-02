<div class="grid_12">

	<h3><?php echo __('Prontuário do Paciente'); ?></h3>
	<div>
	<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Codigo SUP'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['Nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['CPF']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['Endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['Telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['Celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['CEP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['Cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RG'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['RG']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Nascimento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['DataNascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome do Responsavel'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['NomeResponsavel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['EstadoCivil']); ?>
			&nbsp;
		</dd>
	</dl>
	</div>
	
	
	<h3><?php echo __('Consultas'); ?></h3>
	<div>
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Medico'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php if (!empty($paciente['Consulta'])): ?>	
	<?php
		$i = 0;
		foreach ($paciente['Consulta'] as $consulta): ?>
		<tr>
			<!--<td><?php echo $consulta['id']; ?></td>-->
			<td><?php echo $consulta['Data']; ?></td>
			<td><?php echo $consulta['Medico_id']; ?></td>
			<td><?php echo $this->Html->link('Visualizar', array('controller' => 'consultas', 'action' => 'view', $consulta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	<?php endif; ?>
	</table>
	
	</div>


	<h3><?php echo __('Diagnósticos'); ?></h3>
	<div>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Medico'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php if (!empty($paciente['Diagnostico'])): ?>
	<?php
		$i = 0;
		foreach ($paciente['Diagnostico'] as $diagnostico): ?>
		<tr>
			<!--<td><?php echo $diagnostico['id']; ?></td>-->
			<td><?php echo $diagnostico['Data']; ?></td>
			<td><?php echo $diagnostico['Medico_id']; ?></td>
			<td><?php echo $this->Html->link('Visualizar', array('controller' => 'diagnosticos', 'action' => 'view', $diagnostico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	<?php endif; ?>
	</table>
	</div>
	
	<h3><?php echo __('Exames'); ?></h3>
	<div>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Medico'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php if (!empty($paciente['Exame'])): ?>
	<?php
		$i = 0;
		foreach ($paciente['Exame'] as $exame): ?>
		<tr>
			<!--<td><?php echo $exame['id']; ?></td>-->
			<td><?php echo $exame['Data']; ?></td>
			<td><?php echo $exame['Medico_id']; ?></td>
			<td><?php echo $this->Html->link('Visualizar', array('controller' => 'exames', 'action' => 'view', $exame['id'])); ?>
			</td>
			
		</tr>
	<?php endforeach; ?>
	<?php endif; ?>
	</table>
	</div>	
	
</div>
<a href="javascript:window.history.back()">Voltar</a>
