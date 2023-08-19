
<?php $this->layout = 'formulario' ?>
<div class="criterios form">
<?php echo $this->Form->create('Criterio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Criterio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('instrumento_id');
		echo $this->Form->input('criterio');
		echo $this->Form->input('definicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Criterio.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Criterio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Criterios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
