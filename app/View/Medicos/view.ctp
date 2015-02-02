<div class="medicos view">
<h2><?php  echo __('Visualizar Médico'); ?></h2>
	<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['Nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['CPF']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['Endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['Telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['Celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['CEP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['Cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialidade'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['Especialidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CRM'); ?></dt>
		<dd>
			<?php echo h($medico['Medico']['CRM']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Instituições Associadas'); ?></h3>
	<?php if (!empty($medico['Instituicao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($medico['Instituicao'] as $instituicao): ?>
		<tr>
			<td><?php echo $instituicao['id']; ?></td>
			<td><?php echo $instituicao['Nome']; ?></td>
			<td><?php echo $instituicao['Endereco']; ?></td>
			<td><?php echo $instituicao['Telefone']; ?></td>
			<td><?php echo $instituicao['Cidade']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<a href="javascript:window.history.back()">Voltar</a>
