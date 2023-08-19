<div class="responsables view">
<h2><?php echo __('Responsable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodoc'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['tipodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nac'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familiar'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['familiar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Familiar'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['tel_familiar']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Responsable'), array('action' => 'edit', $responsable['Responsable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Responsable'), array('action' => 'delete', $responsable['Responsable']['id']), array(), __('Are you sure you want to delete # %s?', $responsable['Responsable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sociambientals'); ?></h3>
	<?php if (!empty($responsable['Sociambiental'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Vivienda'); ?></th>
		<th><?php echo __('Tenencia'); ?></th>
		<th><?php echo __('Estrato'); ?></th>
		<th><?php echo __('Numerohabitantes'); ?></th>
		<th><?php echo __('Numerohogares'); ?></th>
		<th><?php echo __('Pared'); ?></th>
		<th><?php echo __('Estadoparedes'); ?></th>
		<th><?php echo __('Piso'); ?></th>
		<th><?php echo __('Techo'); ?></th>
		<th><?php echo __('Estadotecho'); ?></th>
		<th><?php echo __('Dormitorios'); ?></th>
		<th><?php echo __('Hacinamiento'); ?></th>
		<th><?php echo __('Riesgoexterno'); ?></th>
		<th><?php echo __('Otroriesgo'); ?></th>
		<th><?php echo __('Actividad'); ?></th>
		<th><?php echo __('Acceso'); ?></th>
		<th><?php echo __('Apellidosfamilia'); ?></th>
		<th><?php echo __('Transporte'); ?></th>
		<th><?php echo __('Riesgo'); ?></th>
		<th><?php echo __('Otroriesgohogar'); ?></th>
		<th><?php echo __('Aguaservicio'); ?></th>
		<th><?php echo __('Aguatratamiento'); ?></th>
		<th><?php echo __('Aguasiministro'); ?></th>
		<th><?php echo __('Aguaalmacenamiento'); ?></th>
		<th><?php echo __('Diposicionexcretas'); ?></th>
		<th><?php echo __('Aguaresiduales'); ?></th>
		<th><?php echo __('Basura'); ?></th>
		<th><?php echo __('Reciclaje'); ?></th>
		<th><?php echo __('Higiene'); ?></th>
		<th><?php echo __('Lavadomanos'); ?></th>
		<th><?php echo __('Elementoshigiene'); ?></th>
		<th><?php echo __('Otroelementohigiene'); ?></th>
		<th><?php echo __('Cepilladodientes'); ?></th>
		<th><?php echo __('Combustible'); ?></th>
		<th><?php echo __('Otrocombustible'); ?></th>
		<th><?php echo __('Mascotas'); ?></th>
		<th><?php echo __('Otramascota'); ?></th>
		<th><?php echo __('Desparasitamascotas'); ?></th>
		<th><?php echo __('Vacunamascotas'); ?></th>
		<th><?php echo __('Cuidadomascotas'); ?></th>
		<th><?php echo __('Vector'); ?></th>
		<th><?php echo __('Enferemedadmenor'); ?></th>
		<th><?php echo __('Otraenfermedadmenor'); ?></th>
		<th><?php echo __('Enferemedadmayo'); ?></th>
		<th><?php echo __('Otraenferemedmayor'); ?></th>
		<th><?php echo __('Hienealimentos'); ?></th>
		<th><?php echo __('Aseococina'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($responsable['Sociambiental'] as $sociambiental): ?>
		<tr>
			<td><?php echo $sociambiental['id']; ?></td>
			<td><?php echo $sociambiental['fecha']; ?></td>
			<td><?php echo $sociambiental['responsable_id']; ?></td>
			<td><?php echo $sociambiental['ubicacion_id']; ?></td>
			<td><?php echo $sociambiental['direccion']; ?></td>
			<td><?php echo $sociambiental['vivienda']; ?></td>
			<td><?php echo $sociambiental['tenencia']; ?></td>
			<td><?php echo $sociambiental['estrato']; ?></td>
			<td><?php echo $sociambiental['numerohabitantes']; ?></td>
			<td><?php echo $sociambiental['numerohogares']; ?></td>
			<td><?php echo $sociambiental['pared']; ?></td>
			<td><?php echo $sociambiental['estadoparedes']; ?></td>
			<td><?php echo $sociambiental['piso']; ?></td>
			<td><?php echo $sociambiental['techo']; ?></td>
			<td><?php echo $sociambiental['estadotecho']; ?></td>
			<td><?php echo $sociambiental['dormitorios']; ?></td>
			<td><?php echo $sociambiental['hacinamiento']; ?></td>
			<td><?php echo $sociambiental['riesgoexterno']; ?></td>
			<td><?php echo $sociambiental['otroriesgo']; ?></td>
			<td><?php echo $sociambiental['actividad']; ?></td>
			<td><?php echo $sociambiental['acceso']; ?></td>
			<td><?php echo $sociambiental['apellidosfamilia']; ?></td>
			<td><?php echo $sociambiental['transporte']; ?></td>
			<td><?php echo $sociambiental['riesgo']; ?></td>
			<td><?php echo $sociambiental['otroriesgohogar']; ?></td>
			<td><?php echo $sociambiental['aguaservicio']; ?></td>
			<td><?php echo $sociambiental['aguatratamiento']; ?></td>
			<td><?php echo $sociambiental['aguasiministro']; ?></td>
			<td><?php echo $sociambiental['aguaalmacenamiento']; ?></td>
			<td><?php echo $sociambiental['diposicionexcretas']; ?></td>
			<td><?php echo $sociambiental['aguaresiduales']; ?></td>
			<td><?php echo $sociambiental['basura']; ?></td>
			<td><?php echo $sociambiental['reciclaje']; ?></td>
			<td><?php echo $sociambiental['higiene']; ?></td>
			<td><?php echo $sociambiental['lavadomanos']; ?></td>
			<td><?php echo $sociambiental['elementoshigiene']; ?></td>
			<td><?php echo $sociambiental['otroelementohigiene']; ?></td>
			<td><?php echo $sociambiental['cepilladodientes']; ?></td>
			<td><?php echo $sociambiental['combustible']; ?></td>
			<td><?php echo $sociambiental['otrocombustible']; ?></td>
			<td><?php echo $sociambiental['mascotas']; ?></td>
			<td><?php echo $sociambiental['otramascota']; ?></td>
			<td><?php echo $sociambiental['desparasitamascotas']; ?></td>
			<td><?php echo $sociambiental['vacunamascotas']; ?></td>
			<td><?php echo $sociambiental['cuidadomascotas']; ?></td>
			<td><?php echo $sociambiental['vector']; ?></td>
			<td><?php echo $sociambiental['enferemedadmenor']; ?></td>
			<td><?php echo $sociambiental['otraenfermedadmenor']; ?></td>
			<td><?php echo $sociambiental['enferemedadmayo']; ?></td>
			<td><?php echo $sociambiental['otraenferemedmayor']; ?></td>
			<td><?php echo $sociambiental['hienealimentos']; ?></td>
			<td><?php echo $sociambiental['aseococina']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sociambientals', 'action' => 'view', $sociambiental['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sociambientals', 'action' => 'edit', $sociambiental['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sociambientals', 'action' => 'delete', $sociambiental['id']), array(), __('Are you sure you want to delete # %s?', $sociambiental['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
