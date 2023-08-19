<div class="sociambientals form">
<?php echo $this->Form->create('Sociambiental'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sociambiental'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('ubicacion_id');
		echo $this->Form->input('direccion');
		echo $this->Form->input('vivienda');
		echo $this->Form->input('tenencia');
		echo $this->Form->input('estrato');
		echo $this->Form->input('numerohabitantes');
		echo $this->Form->input('numerohogares');
		echo $this->Form->input('pared');
		echo $this->Form->input('estadoparedes');
		echo $this->Form->input('piso');
		echo $this->Form->input('techo');
		echo $this->Form->input('estadotecho');
		echo $this->Form->input('dormitorios');
		echo $this->Form->input('hacinamiento');
		echo $this->Form->input('riesgoexterno');
		echo $this->Form->input('otroriesgo');
		echo $this->Form->input('actividad');
		echo $this->Form->input('acceso');
		echo $this->Form->input('apellidosfamilia');
		echo $this->Form->input('transporte');
		echo $this->Form->input('riesgo');
		echo $this->Form->input('otroriesgohogar');
		echo $this->Form->input('aguaservicio');
		echo $this->Form->input('aguatratamiento');
		echo $this->Form->input('aguasiministro');
		echo $this->Form->input('aguaalmacenamiento');
		echo $this->Form->input('diposicionexcretas');
		echo $this->Form->input('aguaresiduales');
		echo $this->Form->input('basura');
		echo $this->Form->input('reciclaje');
		echo $this->Form->input('higiene');
		echo $this->Form->input('lavadomanos');
		echo $this->Form->input('elementoshigiene');
		echo $this->Form->input('otroelementohigiene');
		echo $this->Form->input('cepilladodientes');
		echo $this->Form->input('combustible');
		echo $this->Form->input('otrocombustible');
		echo $this->Form->input('mascotas');
		echo $this->Form->input('otramascota');
		echo $this->Form->input('desparasitamascotas');
		echo $this->Form->input('vacunamascotas');
		echo $this->Form->input('cuidadomascotas');
		echo $this->Form->input('vector');
		echo $this->Form->input('enferemedadmenor');
		echo $this->Form->input('otraenfermedadmenor');
		echo $this->Form->input('enferemedadmayo');
		echo $this->Form->input('otraenferemedmayor');
		echo $this->Form->input('hienealimentos');
		echo $this->Form->input('aseococina');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sociambiental.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Sociambiental.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
