<?php $this->layout = 'printactividades' ?>

<div class="dimensiones view">
<h2><?php echo __('Dimension'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimension['Dimension']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Dimension'); ?></dt>
		<dd>
			<?php echo h($dimension['Dimension']['nombre_dimension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Definicion'); ?></dt>
		<dd>
			<?php echo h($dimension['Dimension']['definicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dimension'), array('action' => 'edit', $dimension['Dimension']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dimension'), array('action' => 'delete', $dimension['Dimension']['id']), array(), __('Are you sure you want to delete # %s?', $dimension['Dimension']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dimensiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dimension'), array('action' => 'add')); ?> </li>
	</ul>
</div>
