<?php $this->layout = 'formulario' ?>
<div class="dimensiones form">
<?php echo $this->Form->create('Dimension'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dimension'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_dimension');
		echo $this->Form->input('definicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dimension.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Dimension.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dimensiones'), array('action' => 'index')); ?></li>
	</ul>
</div>
