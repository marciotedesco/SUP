<div class="grid_12">
	<h3><?php echo __('Visualizar Exame'); ?></h3>
	<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exame['Exame']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Medico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exame['Medico']['Nome'], array('controller' => 'medicos', 'action' => 'view', $exame['Medico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exame['Paciente']['Nome'], array('controller' => 'pacientes', 'action' => 'view', $exame['Paciente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($exame['Exame']['Data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exame'); ?></dt>
		<dd>
			<?php echo h($exame['ExameDisponivel']['Nome']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt style="clear: both;"><?php echo __('Resultado'); ?></dt>
		<dd style="float: left;">
			<?php echo $exame['Exame']['Resultado']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<a href="javascript:window.history.back()">Voltar</a>
