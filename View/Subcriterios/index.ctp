
<?php $this->layout = 'printactividades' ?>
<div class="subcriterios index">
	<h2><?php echo __('Subcriterios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('criterio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subcriterio'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
			<th><?php echo $this->Paginator->sort('definicion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subcriterios as $subcriterio): ?>
	<tr>
		<td><?php echo h($subcriterio['Subcriterio']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subcriterio['Criterio']['id'], array('controller' => 'criterios', 'action' => 'view', $subcriterio['Criterio']['id'])); ?>
		</td>
		<td><?php echo h($subcriterio['Subcriterio']['subcriterio']); ?>&nbsp;</td>
		<td><?php echo h($subcriterio['Subcriterio']['porcentaje']); ?>&nbsp;</td>
		<td><?php echo h($subcriterio['Subcriterio']['definicion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subcriterio['Subcriterio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subcriterio['Subcriterio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subcriterio['Subcriterio']['id']), array(), __('Are you sure you want to delete # %s?', $subcriterio['Subcriterio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Criterios'), array('controller' => 'criterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterio'), array('controller' => 'criterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
