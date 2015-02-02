<div class="prontuarios form">
<?php echo $this->Form->create('Prontuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Prontuario'); ?></legend>
	<?php
		echo $this->Form->input('Paciente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prontuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnosticos'), array('controller' => 'diagnosticos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostico'), array('controller' => 'diagnosticos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exames'), array('controller' => 'exames', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exame'), array('controller' => 'exames', 'action' => 'add')); ?> </li>
	</ul>
</div>
