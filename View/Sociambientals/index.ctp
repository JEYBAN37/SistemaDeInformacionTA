<div class="sociambientals index">
	<h2><?php echo __('Sociambientals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('vivienda'); ?></th>
			<th><?php echo $this->Paginator->sort('tenencia'); ?></th>
			<th><?php echo $this->Paginator->sort('estrato'); ?></th>
			<th><?php echo $this->Paginator->sort('numerohabitantes'); ?></th>
			<th><?php echo $this->Paginator->sort('numerohogares'); ?></th>
			<th><?php echo $this->Paginator->sort('pared'); ?></th>
			<th><?php echo $this->Paginator->sort('estadoparedes'); ?></th>
			<th><?php echo $this->Paginator->sort('piso'); ?></th>
			<th><?php echo $this->Paginator->sort('techo'); ?></th>
			<th><?php echo $this->Paginator->sort('estadotecho'); ?></th>
			<th><?php echo $this->Paginator->sort('dormitorios'); ?></th>
			<th><?php echo $this->Paginator->sort('hacinamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgoexterno'); ?></th>
			<th><?php echo $this->Paginator->sort('otroriesgo'); ?></th>
			<th><?php echo $this->Paginator->sort('actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('acceso'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidosfamilia'); ?></th>
			<th><?php echo $this->Paginator->sort('transporte'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgo'); ?></th>
			<th><?php echo $this->Paginator->sort('otroriesgohogar'); ?></th>
			<th><?php echo $this->Paginator->sort('aguaservicio'); ?></th>
			<th><?php echo $this->Paginator->sort('aguatratamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('aguasiministro'); ?></th>
			<th><?php echo $this->Paginator->sort('aguaalmacenamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('diposicionexcretas'); ?></th>
			<th><?php echo $this->Paginator->sort('aguaresiduales'); ?></th>
			<th><?php echo $this->Paginator->sort('basura'); ?></th>
			<th><?php echo $this->Paginator->sort('reciclaje'); ?></th>
			<th><?php echo $this->Paginator->sort('higiene'); ?></th>
			<th><?php echo $this->Paginator->sort('lavadomanos'); ?></th>
			<th><?php echo $this->Paginator->sort('elementoshigiene'); ?></th>
			<th><?php echo $this->Paginator->sort('otroelementohigiene'); ?></th>
			<th><?php echo $this->Paginator->sort('cepilladodientes'); ?></th>
			<th><?php echo $this->Paginator->sort('combustible'); ?></th>
			<th><?php echo $this->Paginator->sort('otrocombustible'); ?></th>
			<th><?php echo $this->Paginator->sort('mascotas'); ?></th>
			<th><?php echo $this->Paginator->sort('otramascota'); ?></th>
			<th><?php echo $this->Paginator->sort('desparasitamascotas'); ?></th>
			<th><?php echo $this->Paginator->sort('vacunamascotas'); ?></th>
			<th><?php echo $this->Paginator->sort('cuidadomascotas'); ?></th>
			<th><?php echo $this->Paginator->sort('vector'); ?></th>
			<th><?php echo $this->Paginator->sort('enferemedadmenor'); ?></th>
			<th><?php echo $this->Paginator->sort('otraenfermedadmenor'); ?></th>
			<th><?php echo $this->Paginator->sort('enferemedadmayo'); ?></th>
			<th><?php echo $this->Paginator->sort('otraenferemedmayor'); ?></th>
			<th><?php echo $this->Paginator->sort('hienealimentos'); ?></th>
			<th><?php echo $this->Paginator->sort('aseococina'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sociambientals as $sociambiental): ?>
	<tr>
		<td><?php echo h($sociambiental['Sociambiental']['id']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sociambiental['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $sociambiental['Responsable']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sociambiental['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $sociambiental['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($sociambiental['Sociambiental']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['vivienda']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['tenencia']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['estrato']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['numerohabitantes']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['numerohogares']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['pared']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['estadoparedes']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['piso']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['techo']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['estadotecho']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['dormitorios']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['hacinamiento']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['riesgoexterno']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otroriesgo']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['actividad']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['acceso']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['apellidosfamilia']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['transporte']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['riesgo']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otroriesgohogar']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['aguaservicio']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['aguatratamiento']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['aguasiministro']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['aguaalmacenamiento']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['diposicionexcretas']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['aguaresiduales']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['basura']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['reciclaje']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['higiene']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['lavadomanos']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['elementoshigiene']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otroelementohigiene']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['cepilladodientes']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['combustible']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otrocombustible']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['mascotas']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otramascota']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['desparasitamascotas']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['vacunamascotas']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['cuidadomascotas']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['vector']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['enferemedadmenor']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otraenfermedadmenor']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['enferemedadmayo']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['otraenferemedmayor']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['hienealimentos']); ?>&nbsp;</td>
		<td><?php echo h($sociambiental['Sociambiental']['aseococina']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sociambiental['Sociambiental']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sociambiental['Sociambiental']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sociambiental['Sociambiental']['id']), array(), __('Are you sure you want to delete # %s?', $sociambiental['Sociambiental']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
