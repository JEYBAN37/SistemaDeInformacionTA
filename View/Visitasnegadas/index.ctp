<div class="visitasnegadas index">
	<h2><?php echo __('Visitasnegadas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreshabitante'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodocumento'); ?></th>
			<th><?php echo $this->Paginator->sort('numerodocumento'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('estadocasa'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($visitasnegadas as $visitasnegada): ?>
	<tr>
		<td><?php echo h($visitasnegada['Visitasnegada']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($visitasnegada['Ubicacion']['microterritorio'], array('controller' => 'ubicaciones', 'action' => 'view', $visitasnegada['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['nombreshabitante']); ?>&nbsp;</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['tipodocumento']); ?>&nbsp;</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['numerodocumento']); ?>&nbsp;</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['estadocasa']); ?>&nbsp;</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['observacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($visitasnegada['Responsable']['encuestador'], array('controller' => 'responsables', 'action' => 'view', $visitasnegada['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($visitasnegada['Visitasnegada']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $visitasnegada['Visitasnegada']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $visitasnegada['Visitasnegada']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $visitasnegada['Visitasnegada']['id']), array(), __('Are you sure you want to delete # %s?', $visitasnegada['Visitasnegada']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Visitasnegada'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
