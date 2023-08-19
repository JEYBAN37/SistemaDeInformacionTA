
<?php $this->layout = 'printactividades' ?>
<div class="criterios index">
	<h2><?php echo __('Criterios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('instrumento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('criterio'); ?></th>
			<th><?php echo $this->Paginator->sort('definicion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($criterios as $criterio): ?>
	<tr>
		<td><?php echo h($criterio['Criterio']['id']); ?>&nbsp;</td>
		<td><?php echo h($criterio['Criterio']['instrumento_id']); ?>&nbsp;</td>
		<td><?php echo h($criterio['Criterio']['criterio']); ?>&nbsp;</td>
		<td><?php echo h($criterio['Criterio']['definicion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $criterio['Criterio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $criterio['Criterio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $criterio['Criterio']['id']), array(), __('Are you sure you want to delete # %s?', $criterio['Criterio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Criterio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
