<div class="primerainfancias index">
	<h2><?php echo __('Primerainfancias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prematuro'); ?></th>
			<th><?php echo $this->Paginator->sort('discapacidad'); ?></th>
			<th><?php echo $this->Paginator->sort('peso'); ?></th>
			<th><?php echo $this->Paginator->sort('talla'); ?></th>
			<th><?php echo $this->Paginator->sort('bajopeso'); ?></th>
			<th><?php echo $this->Paginator->sort('perímetrocefalico'); ?></th>
			<th><?php echo $this->Paginator->sort('perímetrobraquial'); ?></th>
			<th><?php echo $this->Paginator->sort('perimetrocintura'); ?></th>
			<th><?php echo $this->Paginator->sort('perimetrocadera'); ?></th>
			<th><?php echo $this->Paginator->sort('tensionarterial'); ?></th>
			<th><?php echo $this->Paginator->sort('lactanciamaterna'); ?></th>
			<th><?php echo $this->Paginator->sort('condicioncronica'); ?></th>
			<th><?php echo $this->Paginator->sort('anomaliacongenita'); ?></th>
			<th><?php echo $this->Paginator->sort('esquemavacunacion'); ?></th>
			<th><?php echo $this->Paginator->sort('desparasitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('crecimientoydesarrollo'); ?></th>
			<th><?php echo $this->Paginator->sort('desnutricion'); ?></th>
			<th><?php echo $this->Paginator->sort('higieneoral'); ?></th>
			<th><?php echo $this->Paginator->sort('desarrolloinfantil'); ?></th>
			<th><?php echo $this->Paginator->sort('eda'); ?></th>
			<th><?php echo $this->Paginator->sort('era'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgodetbc'); ?></th>
			<th><?php echo $this->Paginator->sort('saludalternativa'); ?></th>
			<th><?php echo $this->Paginator->sort('padresconsumo'); ?></th>
			<th><?php echo $this->Paginator->sort('sospechaviolencia'); ?></th>
			<th><?php echo $this->Paginator->sort('cudadorpermanente'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
			<th><?php echo $this->Paginator->sort('eduacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('educaciondos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($primerainfancias as $primerainfancia): ?>
	<tr>
		<td><?php echo h($primerainfancia['Primerainfancia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($primerainfancia['Familia']['id'], array('controller' => 'familias', 'action' => 'view', $primerainfancia['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($primerainfancia['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $primerainfancia['Persona']['id'])); ?>
		</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['prematuro']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['discapacidad']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['peso']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['talla']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['bajopeso']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['perímetrocefalico']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['perímetrobraquial']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['perimetrocintura']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['perimetrocadera']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['tensionarterial']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['lactanciamaterna']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['condicioncronica']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['anomaliacongenita']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['esquemavacunacion']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['desparasitacion']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['crecimientoydesarrollo']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['desnutricion']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['higieneoral']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['desarrolloinfantil']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['eda']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['era']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['riesgodetbc']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['saludalternativa']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['padresconsumo']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['sospechaviolencia']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['cudadorpermanente']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['canalizaciondos']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['eduacionuno']); ?>&nbsp;</td>
		<td><?php echo h($primerainfancia['Primerainfancia']['educaciondos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $primerainfancia['Primerainfancia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $primerainfancia['Primerainfancia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $primerainfancia['Primerainfancia']['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['Primerainfancia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
