<?php $this->layout = 'printactividades' ?>
<div class="evaluaciones index">
	<h2><?php echo __('Evaluaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subcriterio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('num_historias_evaluadas'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_1'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_2'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_3'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_4'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_5'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_6'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_7'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_8'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_9'); ?></th>
			<th><?php echo $this->Paginator->sort('hcl_10'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($evaluaciones as $evaluacion): ?>
	<tr>
		<td><?php echo h($evaluacion['Evaluacion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluacion['Subcriterio']['subcriterio'], array('controller' => 'subcriterios', 'action' => 'view', $evaluacion['Subcriterio']['id'])); ?>
		</td>
		<td><?php echo h($evaluacion['Evaluacion']['num_historias_evaluadas']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_1']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_2']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_3']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_4']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_5']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_6']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_7']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_8']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_9']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['hcl_10']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['observacion']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluacion['Evaluacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluacion['Evaluacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluacion['Evaluacion']['id']), array(), __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
