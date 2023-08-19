<?php $this->layout = 'formulario' ?>
<div class="subcriterios form">
<?php echo $this->Form->create('Subcriterio'); ?>
	<fieldset>
		<legend><?php echo __('Add Subcriterio'); ?></legend>
	<?php
		echo $this->Form->input('criterio_id');
		echo $this->Form->input('subcriterio');
		echo $this->Form->input('porcentaje');
		echo $this->Form->input('definicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subcriterios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Criterios'), array('controller' => 'criterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterio'), array('controller' => 'criterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
