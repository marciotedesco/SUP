<div class="grid_12">
<h3>Adicionar Médico</h3>
<?php echo $this->Form->create('Medico'); ?>
	<fieldset>
	<?php
	
		echo $this->Form->input('Nome', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CPF', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Endereco', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Telefone', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Celular', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CEP', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Cidade', array('class' => 'text', 'between' => '<br>'));
		
		echo '<hr>';
		
		echo $this->Form->input('Especialidade', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CRM', array('class' => 'text', 'between' => '<br>'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>

</div>
