<div class="grid_12">
<h3>Adicionar Paciente</h3>
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
	<?php
		/**echo $this->Form->input('CodigoSUP', array('class' => 'text', 'between' => '<br>'));**/
		echo $this->Form->input('Nome', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CPF', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('RG', array('class' => 'text', 'between' => '<br>'));

		echo $this->Form->input('Endereco', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CEP', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Cidade', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('DataNascimento', array('class' => 'date', 'between' => '<br>', 'minYear' => date('Y') - 70, 'maxYear' => date('Y')));
		echo $this->Form->input('NomeResponsavel', array('class' => 'text', 'between' => '<br>'));

		echo $this->Form->input('Telefone', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Celular', array('class' => 'text', 'between' => '<br>'));
		
		echo $this->Form->input('EstadoCivil', array('class' => 'text', 'between' => '<br>'));

	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>
</div>
