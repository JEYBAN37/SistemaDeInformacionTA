<div class="observacions index">
	<h2><?php echo __('Observacions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgovivienda'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgoprimerainfancia'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgoenfermedadcronica'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgogestante'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgosicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgofamilia'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($observacions as $observacion): ?>
	<tr>
		<td><?php echo h($observacion['Observacion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($observacion['Familia']['hogar'], array('controller' => 'familias', 'action' => 'view', $observacion['Familia']['id'])); ?>
		</td>
		<td><?php echo h($observacion['Observacion']['riesgovivienda']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['riesgoprimerainfancia']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['riesgoenfermedadcronica']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['riesgogestante']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['riesgosicosocial']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['riesgofamilia']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['date']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['observacion']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['dir']); ?>&nbsp;</td>
		<td><?php echo h($observacion['Observacion']['anexo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $observacion['Observacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $observacion['Observacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $observacion['Observacion']['id']), array(), __('Are you sure you want to delete # %s?', $observacion['Observacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Observacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
	</ul>
</div>
