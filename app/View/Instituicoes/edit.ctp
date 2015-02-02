<div class="grid_12">
<h3>Adicionar Instituição</h3>
<?php echo $this->Form->create('Instituicao'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('Nome', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Endereco', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Telefone', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('Cidade', array('class' => 'text', 'between' => '<br>'));
		echo $this->Form->input('DataFundacao', array('class' => 'text', 'between' => '<br>'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>

</div>
