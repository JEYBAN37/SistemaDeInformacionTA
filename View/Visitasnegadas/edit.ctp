<div class="visitasnegadas form">
<?php echo $this->Form->create('Visitasnegada'); ?>
	<fieldset>
		<legend><?php echo __('Edit Visitasnegada'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ubicacion_id');
		echo $this->Form->input('direccion');
		echo $this->Form->input('nombreshabitante');
		echo $this->Form->input('tipodocumento');
		echo $this->Form->input('numerodocumento');
		echo $this->Form->input('telefono');
		echo $this->Form->input('estadocasa');
		echo $this->Form->input('observacion');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Visitasnegada.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Visitasnegada.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Visitasnegadas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
