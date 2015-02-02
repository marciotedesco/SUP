<div class="grid_12">
<h3>Editar Administrador</h3>
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


<!--<div class="administradores form">
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
		<legend><?php echo __('Edit Administrador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Instituicao_id');
		echo $this->Form->input('Profissional_id');
		echo $this->Form->input('ARS');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Administrador.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Administrador.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Administradores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicoes'), array('controller' => 'instituicoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profissionais'), array('controller' => 'profissionais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profissional'), array('controller' => 'profissionais', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
