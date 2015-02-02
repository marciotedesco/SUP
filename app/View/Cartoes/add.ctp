<div class="grid_12">
<h3>Solicitar Segunda Via</h3>
<?php echo $this->Form->create('Cartao'); ?>
	<fieldset>
	<?php
		/**echo $this->Form->input('CodigoSUP', array('class' => 'text', 'between' => '<br>'));**/
		echo $this->Form->input('nomeusuario', array('class' => 'text', 'between' => '<br>'));

	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar',array('class' => 'submit')); ?>
<?php echo $this->Form->end(); ?>
</div>
