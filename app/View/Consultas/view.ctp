<div class="grid_12">

	<h3><?php echo __('Visualizar Consulta'); ?></h3>

	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['Medico']['Nome'], array('controller' => 'medicos', 'action' => 'view', $consulta['Medico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['Paciente']['Nome'], array('controller' => 'pacientes', 'action' => 'view', $consulta['Paciente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['Data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['Valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<a href="javascript:window.history.back()">Voltar</a>
