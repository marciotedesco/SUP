<div class="grid_12">
<h3>Adicionar Consulta</h3>
<?php echo $this->Form->create('Consulta'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('Medico_id', array('class' => 'select', 'between' => '<br>'));
		echo $this->Form->input('Paciente_id', array('class' => 'select', 'between' => '<br>'));
		echo $this->Form->input('Data', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Valor', array('class' => 'text', 'between' => '<br>'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>

</div>
