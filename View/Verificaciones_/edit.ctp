<?php $this->layout = 'formulario' ?>

<div class="verificaciones form">
<?php echo $this->Form->create('Verificacion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Verificacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('criterio_id');
		echo $this->Form->input('numero_historias');
		echo $this->Form->input('dimension_id');
		echo $this->Form->input('instrumento_id');
		
		echo $this->Form->input('observacion');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('hcl_1');
		echo $this->Form->input('hcl_2');
		echo $this->Form->input('hcl_3');
		echo $this->Form->input('hcl_4');
		echo $this->Form->input('hcl_5');
		echo $this->Form->input('hcl_6');
		echo $this->Form->input('hcl_7');
		echo $this->Form->input('hcl_8');
		echo $this->Form->input('hcl_9');
		echo $this->Form->input('hcl_10');
		echo $this->Form->input('hcl_11');
		echo $this->Form->input('hcl_12');
		echo $this->Form->input('hcl_13');
		echo $this->Form->input('hcl_14');
		echo $this->Form->input('hcl_15');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Verificacion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Verificacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Verificaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
