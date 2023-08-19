<?php $this->layout = 'printactividades' ?>
<div class="instrumentos view">
<h2><?php echo __('Instrumento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instrumento['Instrumento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimension Id'); ?></dt>
		<dd>
			<?php echo h($instrumento['Instrumento']['dimension_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Instrumento'); ?></dt>
		<dd>
			<?php echo h($instrumento['Instrumento']['nombre_instrumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($instrumento['Instrumento']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Definicion'); ?></dt>
		<dd>
			<?php echo h($instrumento['Instrumento']['definicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instrumento'), array('action' => 'edit', $instrumento['Instrumento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instrumento'), array('action' => 'delete', $instrumento['Instrumento']['id']), array(), __('Are you sure you want to delete # %s?', $instrumento['Instrumento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instrumentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrumento'), array('action' => 'add')); ?> </li>
	</ul>
</div>
