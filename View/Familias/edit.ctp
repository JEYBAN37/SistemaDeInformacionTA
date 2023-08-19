<div class="familias form">
<?php echo $this->Form->create('Familia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Familia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sociambiental_id');
		echo $this->Form->input('tipofamilia');
		echo $this->Form->input('numeropersonas');
		echo $this->Form->input('cursovidafamilia');
		echo $this->Form->input('lgtbi');
		echo $this->Form->input('estilodevidapredominante');
		echo $this->Form->input('antecedenteenfermedad');
		echo $this->Form->input('otraenferemedad');
		echo $this->Form->input('otraenferemedad1');
		echo $this->Form->input('otraenferemedad2');
		echo $this->Form->input('riesgopsicosocial');
		echo $this->Form->input('riesgopsicosocial1');
		echo $this->Form->input('riesgopsicosocial2');
		echo $this->Form->input('programasocial');
		echo $this->Form->input('programasocial1');
		echo $this->Form->input('programasocial2');
		echo $this->Form->input('discapacidad_id');
		echo $this->Form->input('victima_id');
		echo $this->Form->input('vivienda');
		echo $this->Form->input('tenencia');
		echo $this->Form->input('dormitorios');
		echo $this->Form->input('higiene');
		echo $this->Form->input('lavadomanos');
		echo $this->Form->input('elementoshigiene');
		echo $this->Form->input('otroelementohigiene');
		echo $this->Form->input('cepilladodientes');
		echo $this->Form->input('combustible');
		echo $this->Form->input('otrocombustible');
		echo $this->Form->input('higienealimentos');
		echo $this->Form->input('aseococina');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Familia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Familia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('action' => 'index')); ?></li>
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
