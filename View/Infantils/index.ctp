<div class="infantils index">
	<h2><?php echo __('Infantils'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discapacidad'); ?></th>
			<th><?php echo $this->Paginator->sort('peso'); ?></th>
			<th><?php echo $this->Paginator->sort('talla'); ?></th>
			<th><?php echo $this->Paginator->sort('indicemasacorporal'); ?></th>
			<th><?php echo $this->Paginator->sort('tensionarterial'); ?></th>
			<th><?php echo $this->Paginator->sort('condicioncronica'); ?></th>
			<th><?php echo $this->Paginator->sort('esquemavacunacion'); ?></th>
			<th><?php echo $this->Paginator->sort('desparasitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('crecimientoydesarrollo'); ?></th>
			<th><?php echo $this->Paginator->sort('desnutricion'); ?></th>
			<th><?php echo $this->Paginator->sort('higieneoral'); ?></th>
			<th><?php echo $this->Paginator->sort('desarrolloinfantil'); ?></th>
			<th><?php echo $this->Paginator->sort('estudio'); ?></th>
			<th><?php echo $this->Paginator->sort('sopechamaltrato'); ?></th>
			<th><?php echo $this->Paginator->sort('rendimientoescolar'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
			<th><?php echo $this->Paginator->sort('eduacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('educaciondos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($infantils as $infantil): ?>
	<tr>
		<td><?php echo h($infantil['Infantil']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($infantil['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $infantil['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($infantil['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $infantil['Persona']['id'])); ?>
		</td>
		<td><?php echo h($infantil['Infantil']['discapacidad']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['peso']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['talla']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['indicemasacorporal']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['tensionarterial']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['condicioncronica']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['esquemavacunacion']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['desparasitacion']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['crecimientoydesarrollo']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['desnutricion']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['higieneoral']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['desarrolloinfantil']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['estudio']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['sopechamaltrato']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['rendimientoescolar']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['canalizaciondos']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['eduacionuno']); ?>&nbsp;</td>
		<td><?php echo h($infantil['Infantil']['educaciondos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $infantil['Infantil']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $infantil['Infantil']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $infantil['Infantil']['id']), array(), __('Are you sure you want to delete # %s?', $infantil['Infantil']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Infantil'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
