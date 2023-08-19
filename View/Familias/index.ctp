<div class="familias index">
	<h2><?php echo __('Familias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sociambiental_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hogar'); ?></th>
			<th><?php echo $this->Paginator->sort('tipofamilia'); ?></th>
			<th><?php echo $this->Paginator->sort('numeropersonas'); ?></th>
			<th><?php echo $this->Paginator->sort('cursovidafamilia'); ?></th>
			<th><?php echo $this->Paginator->sort('lgtbi'); ?></th>
			<th><?php echo $this->Paginator->sort('estilodevidapredominante'); ?></th>
			<th><?php echo $this->Paginator->sort('antecedenteenfermedad'); ?></th>
			<th><?php echo $this->Paginator->sort('otraenferemedad'); ?></th>
			<th><?php echo $this->Paginator->sort('otraenferemedad1'); ?></th>
			<th><?php echo $this->Paginator->sort('otraenferemedad2'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial1'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial2'); ?></th>
			<th><?php echo $this->Paginator->sort('programasocial'); ?></th>
			<th><?php echo $this->Paginator->sort('programasocial1'); ?></th>
			<th><?php echo $this->Paginator->sort('programasocial2'); ?></th>
			
			<th><?php echo $this->Paginator->sort('vivienda'); ?></th>
			<th><?php echo $this->Paginator->sort('tenencia'); ?></th>
			<th><?php echo $this->Paginator->sort('dormitorios'); ?></th>
			<th><?php echo $this->Paginator->sort('higiene'); ?></th>
			<th><?php echo $this->Paginator->sort('lavadomanos'); ?></th>
			<th><?php echo $this->Paginator->sort('elementoshigiene'); ?></th>
			<th><?php echo $this->Paginator->sort('otroelementohigiene'); ?></th>
			<th><?php echo $this->Paginator->sort('cepilladodientes'); ?></th>
			<th><?php echo $this->Paginator->sort('combustible'); ?></th>
			<th><?php echo $this->Paginator->sort('otrocombustible'); ?></th>
			<th><?php echo $this->Paginator->sort('higienealimentos'); ?></th>
			<th><?php echo $this->Paginator->sort('aseococina'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($familias as $familia): ?>
	<tr>
		<td><?php echo h($familia['Familia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familia['Sociambiental']['id'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
		</td>
		<td><?php echo h($familia['Familia']['hogar']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['tipofamilia']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['numeropersonas']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['cursovidafamilia']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['lgtbi']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['estilodevidapredominante']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['antecedenteenfermedad']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['otraenferemedad']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['otraenferemedad1']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['otraenferemedad2']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['riesgopsicosocial']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['riesgopsicosocial1']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['riesgopsicosocial2']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['programasocial']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['programasocial1']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['programasocial2']); ?>&nbsp;</td>
		
		<td><?php echo h($familia['Familia']['vivienda']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['tenencia']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['dormitorios']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['higiene']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['lavadomanos']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['elementoshigiene']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['otroelementohigiene']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['cepilladodientes']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['combustible']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['otrocombustible']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['higienealimentos']); ?>&nbsp;</td>
		<td><?php echo h($familia['Familia']['aseococina']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $familia['Familia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $familia['Familia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $familia['Familia']['id']), array(), __('Are you sure you want to delete # %s?', $familia['Familia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Familia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discapacidades'), array('controller' => 'discapacidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discapacidad'), array('controller' => 'discapacidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Victimas'), array('controller' => 'victimas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Victima'), array('controller' => 'victimas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?> </li>
	</ul>
</div>
