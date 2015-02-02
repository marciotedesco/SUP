<div class="grid_12">
	<h3><?php echo __('Visulizar Diagnóstico'); ?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Médico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostico['Medico']['Nome'], array('controller' => 'medicos', 'action' => 'view', $diagnostico['Medico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostico['Paciente']['Nome'], array('controller' => 'pacientes', 'action' => 'view', $diagnostico['Paciente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['Data']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt style="clear: both;"><?php echo __('Sintomas'); ?></dt>
		<dd style="float: left;">
			<?php echo $diagnostico['Diagnostico']['Sintomas']; ?>
			&nbsp;
		</dd>
		<hr>
		<dt style="clear: both;"><?php echo __('Comentários'); ?></dt>
		<dd style="float: left;">
			<?php echo $diagnostico['Diagnostico']['Comentarios']; ?>
			&nbsp;
		</dd>
		<hr>
		<dt style="clear: both;"><?php echo __('Receita'); ?></dt>
		<dd style="float: left;">
			<?php echo $diagnostico['Diagnostico']['Receita']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<a href="javascript:window.history.back()">Voltar</a>
