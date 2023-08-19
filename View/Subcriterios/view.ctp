<?php $this->layout = 'printactividades' ?>

<div class="subcriterios view">
<h2><?php echo __('Subcriterio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subcriterio['Subcriterio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criterio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subcriterio['Criterio']['id'], array('controller' => 'criterios', 'action' => 'view', $subcriterio['Criterio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcriterio'); ?></dt>
		<dd>
			<?php echo h($subcriterio['Subcriterio']['subcriterio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje'); ?></dt>
		<dd>
			<?php echo h($subcriterio['Subcriterio']['porcentaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Definicion'); ?></dt>
		<dd>
			<?php echo h($subcriterio['Subcriterio']['definicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subcriterio'), array('action' => 'edit', $subcriterio['Subcriterio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subcriterio'), array('action' => 'delete', $subcriterio['Subcriterio']['id']), array(), __('Are you sure you want to delete # %s?', $subcriterio['Subcriterio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterios'), array('controller' => 'criterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterio'), array('controller' => 'criterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
