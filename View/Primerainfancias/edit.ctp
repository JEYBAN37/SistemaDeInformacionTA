<div class="primerainfancias form">
<?php echo $this->Form->create('Primerainfancia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Primerainfancia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('familia_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('prematuro');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('peso');
		echo $this->Form->input('talla');
		echo $this->Form->input('bajopeso');
		echo $this->Form->input('perímetrocefalico');
		echo $this->Form->input('perímetrobraquial');
		echo $this->Form->input('perimetrocintura');
		echo $this->Form->input('perimetrocadera');
		echo $this->Form->input('tensionarterial');
		echo $this->Form->input('lactanciamaterna');
		echo $this->Form->input('condicioncronica');
		echo $this->Form->input('anomaliacongenita');
		echo $this->Form->input('esquemavacunacion');
		echo $this->Form->input('desparasitacion');
		echo $this->Form->input('crecimientoydesarrollo');
		echo $this->Form->input('desnutricion');
		echo $this->Form->input('higieneoral');
		echo $this->Form->input('desarrolloinfantil');
		echo $this->Form->input('eda');
		echo $this->Form->input('era');
		echo $this->Form->input('riesgodetbc');
		echo $this->Form->input('saludalternativa');
		echo $this->Form->input('padresconsumo');
		echo $this->Form->input('sospechaviolencia');
		echo $this->Form->input('cudadorpermanente');
		echo $this->Form->input('canalizacionuno');
		echo $this->Form->input('canalizaciondos');
		echo $this->Form->input('eduacionuno');
		echo $this->Form->input('educaciondos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Primerainfancia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Primerainfancia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
