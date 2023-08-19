<div class="familias view">
<h2><?php echo __('Familia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sociambiental'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familia['Sociambiental']['id'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipofamilia'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['tipofamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numeropersonas'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['numeropersonas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursovidafamilia'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['cursovidafamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lgtbi'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['lgtbi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estilodevidapredominante'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['estilodevidapredominante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Antecedenteenfermedad'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['antecedenteenfermedad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otraenferemedad'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['otraenferemedad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otraenferemedad1'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['otraenferemedad1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otraenferemedad2'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['otraenferemedad2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['riesgopsicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial1'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['riesgopsicosocial1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial2'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['riesgopsicosocial2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programasocial'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['programasocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programasocial1'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['programasocial1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programasocial2'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['programasocial2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familia['Discapacidad']['id'], array('controller' => 'discapacidades', 'action' => 'view', $familia['Discapacidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Victima'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familia['Victima']['id'], array('controller' => 'victimas', 'action' => 'view', $familia['Victima']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vivienda'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['vivienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenencia'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['tenencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dormitorios'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['dormitorios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higiene'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['higiene']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lavadomanos'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['lavadomanos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Elementoshigiene'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['elementoshigiene']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otroelementohigiene'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['otroelementohigiene']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cepilladodientes'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['cepilladodientes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combustible'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['combustible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otrocombustible'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['otrocombustible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higienealimentos'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['higienealimentos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseococina'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['aseococina']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Familia'), array('action' => 'edit', $familia['Familia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Familia'), array('action' => 'delete', $familia['Familia']['id']), array(), __('Are you sure you want to delete # %s?', $familia['Familia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Primerainfancias'); ?></h3>
	<?php if (!empty($familia['Primerainfancia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Familia Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Prematuro'); ?></th>
		<th><?php echo __('Discapacidad'); ?></th>
		<th><?php echo __('Peso'); ?></th>
		<th><?php echo __('Talla'); ?></th>
		<th><?php echo __('Bajopeso'); ?></th>
		<th><?php echo __('Perímetrocefalico'); ?></th>
		<th><?php echo __('Perímetrobraquial'); ?></th>
		<th><?php echo __('Perimetrocintura'); ?></th>
		<th><?php echo __('Perimetrocadera'); ?></th>
		<th><?php echo __('Tensionarterial'); ?></th>
		<th><?php echo __('Lactanciamaterna'); ?></th>
		<th><?php echo __('Condicioncronica'); ?></th>
		<th><?php echo __('Anomaliacongenita'); ?></th>
		<th><?php echo __('Esquemavacunacion'); ?></th>
		<th><?php echo __('Desparasitacion'); ?></th>
		<th><?php echo __('Crecimientoydesarrollo'); ?></th>
		<th><?php echo __('Desnutricion'); ?></th>
		<th><?php echo __('Higieneoral'); ?></th>
		<th><?php echo __('Desarrolloinfantil'); ?></th>
		<th><?php echo __('Eda'); ?></th>
		<th><?php echo __('Era'); ?></th>
		<th><?php echo __('Riesgodetbc'); ?></th>
		<th><?php echo __('Saludalternativa'); ?></th>
		<th><?php echo __('Padresconsumo'); ?></th>
		<th><?php echo __('Sospechaviolencia'); ?></th>
		<th><?php echo __('Cudadorpermanente'); ?></th>
		<th><?php echo __('Canalizacionuno'); ?></th>
		<th><?php echo __('Canalizaciondos'); ?></th>
		<th><?php echo __('Eduacionuno'); ?></th>
		<th><?php echo __('Educaciondos'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($familia['Primerainfancia'] as $primerainfancia): ?>
		<tr>
			<td><?php echo $primerainfancia['id']; ?></td>
			<td><?php echo $primerainfancia['familia_id']; ?></td>
			<td><?php echo $primerainfancia['persona_id']; ?></td>
			<td><?php echo $primerainfancia['prematuro']; ?></td>
			<td><?php echo $primerainfancia['discapacidad']; ?></td>
			<td><?php echo $primerainfancia['peso']; ?></td>
			<td><?php echo $primerainfancia['talla']; ?></td>
			<td><?php echo $primerainfancia['bajopeso']; ?></td>
			<td><?php echo $primerainfancia['perímetrocefalico']; ?></td>
			<td><?php echo $primerainfancia['perímetrobraquial']; ?></td>
			<td><?php echo $primerainfancia['perimetrocintura']; ?></td>
			<td><?php echo $primerainfancia['perimetrocadera']; ?></td>
			<td><?php echo $primerainfancia['tensionarterial']; ?></td>
			<td><?php echo $primerainfancia['lactanciamaterna']; ?></td>
			<td><?php echo $primerainfancia['condicioncronica']; ?></td>
			<td><?php echo $primerainfancia['anomaliacongenita']; ?></td>
			<td><?php echo $primerainfancia['esquemavacunacion']; ?></td>
			<td><?php echo $primerainfancia['desparasitacion']; ?></td>
			<td><?php echo $primerainfancia['crecimientoydesarrollo']; ?></td>
			<td><?php echo $primerainfancia['desnutricion']; ?></td>
			<td><?php echo $primerainfancia['higieneoral']; ?></td>
			<td><?php echo $primerainfancia['desarrolloinfantil']; ?></td>
			<td><?php echo $primerainfancia['eda']; ?></td>
			<td><?php echo $primerainfancia['era']; ?></td>
			<td><?php echo $primerainfancia['riesgodetbc']; ?></td>
			<td><?php echo $primerainfancia['saludalternativa']; ?></td>
			<td><?php echo $primerainfancia['padresconsumo']; ?></td>
			<td><?php echo $primerainfancia['sospechaviolencia']; ?></td>
			<td><?php echo $primerainfancia['cudadorpermanente']; ?></td>
			<td><?php echo $primerainfancia['canalizacionuno']; ?></td>
			<td><?php echo $primerainfancia['canalizaciondos']; ?></td>
			<td><?php echo $primerainfancia['eduacionuno']; ?></td>
			<td><?php echo $primerainfancia['educaciondos']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'primerainfancias', 'action' => 'view', $primerainfancia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'primerainfancias', 'action' => 'edit', $primerainfancia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'primerainfancias', 'action' => 'delete', $primerainfancia['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
