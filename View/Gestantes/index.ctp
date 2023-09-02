<div class="gestantes index">
	<h2><?php echo __('Gestantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cursovida'); ?></th>
			<th><?php echo $this->Paginator->sort('controprenatal'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgomaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracionmedica'); ?></th>
			<th><?php echo $this->Paginator->sort('paraclinicos'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
			<th><?php echo $this->Paginator->sort('eduacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('educaciondos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gestantes as $gestante): ?>
	<tr>
		<td><?php echo h($gestante['Gestante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gestante['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $gestante['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gestante['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $gestante['Persona']['id'])); ?>
		</td>
		<td><?php echo h($gestante['Gestante']['cursovida']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['controprenatal']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['riesgomaterno']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['valoracionmedica']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['paraclinicos']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['riesgopsicosocial']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['canalizaciondos']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['eduacionuno']); ?>&nbsp;</td>
		<td><?php echo h($gestante['Gestante']['educaciondos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gestante['Gestante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gestante['Gestante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gestante['Gestante']['id']), array(), __('Are you sure you want to delete # %s?', $gestante['Gestante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Gestante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
