<div class="juventudadultos form">
<?php echo $this->Form->create('Juventudadulto'); ?>
	<fieldset>
		<legend><?php echo __('Add Juventudadulto'); ?></legend>
	<?php
		echo $this->Form->input('familia_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('peso');
		echo $this->Form->input('talla');
		echo $this->Form->input('indicemasacorporal');
		echo $this->Form->input('tensionarterial');
		echo $this->Form->input('condicioncronica');
		echo $this->Form->input('condicioncronica1');
		echo $this->Form->input('ancededenteginecologico');
		echo $this->Form->input('esquemavacunacion');
		echo $this->Form->input('desparasitacion');
		echo $this->Form->input('valoracionmedica');
		echo $this->Form->input('valoracionrias');
		echo $this->Form->input('valoracionrias1');
		echo $this->Form->input('tomacitologia');
		echo $this->Form->input('saludoral');
		echo $this->Form->input('higieneoral');
		echo $this->Form->input('iniciovidasexual');
		echo $this->Form->input('metodosanticonceptivos');
		echo $this->Form->input('infeccionestransmisionsexual');
		echo $this->Form->input('consumospa');
		echo $this->Form->input('consumospa1');
		echo $this->Form->input('riesgopsicosocial');
		echo $this->Form->input('riesgopsicosocial1');
		echo $this->Form->input('estudio');
		echo $this->Form->input('rendimientoescolar');
		echo $this->Form->input('sopechamaltrato');
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

		<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
