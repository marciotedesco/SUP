<div class="grid_12">
<h3>Adicionar Administrador</h3>
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('Nome', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CPF', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Endereco', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Telefone', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Celular', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('CEP', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Cidade', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Instituicao_id', array('class' => 'select', 'between' => '<br>'));
		echo $this->Form->input('ARS', array('type' => 'checkbox', 'class' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>

</div>
