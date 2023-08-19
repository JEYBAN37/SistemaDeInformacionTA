<?php $this->layout = 'printactividades' ?>
<div class="evaluaciones view">
<h2><?php echo __('Evaluacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcriterio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evaluacion['Subcriterio']['subcriterio'], array('controller' => 'subcriterios', 'action' => 'view', $evaluacion['Subcriterio']['id'])); ?>
			&nbsp;

			<!--td colspan="6">Tarea:<!-?php echo ($evaluacion['Producto']['tarea']); ?></td-->


		</dd>
		<dt><?php echo __('Num Historias Evaluadas'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['num_historias_evaluadas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 1'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 2'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 3'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 4'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 5'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 6'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 7'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 8'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 9'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 10'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['hcl_10']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluacion'), array('action' => 'edit', $evaluacion['Evaluacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluacion'), array('action' => 'delete', $evaluacion['Evaluacion']['id']), array(), __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
