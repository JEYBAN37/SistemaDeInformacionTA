<div class="juventudadultos index">
	<h2><?php echo __('Juventudadultos'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('condicioncronica1'); ?></th>
			<th><?php echo $this->Paginator->sort('ancededenteginecologico'); ?></th>
			<th><?php echo $this->Paginator->sort('esquemavacunacion'); ?></th>
			<th><?php echo $this->Paginator->sort('desparasitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracionmedica'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracionrias'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracionrias1'); ?></th>
			<th><?php echo $this->Paginator->sort('tomacitologia'); ?></th>
			<th><?php echo $this->Paginator->sort('saludoral'); ?></th>
			<th><?php echo $this->Paginator->sort('higieneoral'); ?></th>
			<th><?php echo $this->Paginator->sort('iniciovidasexual'); ?></th>
			<th><?php echo $this->Paginator->sort('metodosanticonceptivos'); ?></th>
			<th><?php echo $this->Paginator->sort('infeccionestransmisionsexual'); ?></th>
			<th><?php echo $this->Paginator->sort('consumospa'); ?></th>
			<th><?php echo $this->Paginator->sort('consumospa1'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial1'); ?></th>
			<th><?php echo $this->Paginator->sort('estudio'); ?></th>
			<th><?php echo $this->Paginator->sort('rendimientoescolar'); ?></th>
			<th><?php echo $this->Paginator->sort('sopechamaltrato'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
			<th><?php echo $this->Paginator->sort('eduacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('educaciondos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($juventudadultos as $juventudadulto): ?>
	<tr>
		<td><?php echo h($juventudadulto['Juventudadulto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($juventudadulto['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $juventudadulto['Persona']['id'])); ?>
		</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['discapacidad']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['peso']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['talla']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['tensionarterial']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['condicioncronica']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['condicioncronica1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['ancededenteginecologico']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['desparasitacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['valoracionmedica']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['valoracionrias']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['valoracionrias1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['tomacitologia']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['saludoral']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['higieneoral']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['consumospa']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['consumospa1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['estudio']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['rendimientoescolar']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['canalizaciondos']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['eduacionuno']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['educaciondos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $juventudadulto['Juventudadulto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $juventudadulto['Juventudadulto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $juventudadulto['Juventudadulto']['id']), array(), __('Are you sure you want to delete # %s?', $juventudadulto['Juventudadulto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Juventudadulto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
