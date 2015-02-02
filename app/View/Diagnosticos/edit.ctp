<div class="grid_12">
<h3>Editar Diagnostico</h3>
<?php echo $this->Form->create('Diagnostico'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('Medico_id', array('class' => 'select', 'between' => '<br>'));
		echo $this->Form->input('Paciente_id', array('class' => 'select', 'between' => '<br>'));
		echo $this->Form->input('Data', array('class' => 'text', 'between' => '<br>'));	
		echo $this->Form->input('Sintomas', array('type' => 'textarea', 'class' => 'wysiwyg', 'between' => '<br>'));
		echo $this->Form->input('Comentarios', array('type' => 'textarea', 'class' => 'wysiwyg', 'between' => '<br>'));
		echo $this->Form->input('Receita', array('type' => 'textarea', 'class' => 'wysiwyg', 'between' => '<br>'));
	?>
</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>

</div>
