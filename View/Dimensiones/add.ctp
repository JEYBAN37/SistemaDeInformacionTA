<?php $this->layout = 'formulario' ?>
<div class="dimensiones form">
<?php echo $this->Form->create('Dimension'); ?>
	<fieldset>
		<legend><?php echo __('Add Dimension'); ?></legend>
	<?php
		echo $this->Form->input('nombre_dimension');
		echo $this->Form->input('definicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dimensiones'), array('action' => 'index')); ?></li>
	</ul>
</div>


