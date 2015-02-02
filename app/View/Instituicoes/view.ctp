<div class="grid_12">
<h2><?php  echo __('Instituição'); ?></h2>
	<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['Nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['Endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['Telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['Cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Fundação'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['DataFundacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<a href="javascript:window.history.back()">Voltar</a>
