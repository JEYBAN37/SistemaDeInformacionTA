<div class="ubicaciones form">
<?php echo $this->Form->create('Ubicacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Ubicacion'); ?></legend>
	<?php
		echo $this->Form->input('zona');
		echo $this->Form->input('tipo1');
		echo $this->Form->input('comuna');
		echo $this->Form->input('tipo2');
		echo $this->Form->input('barrio');
		echo $this->Form->input('estrato');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientalscompleta'), array('controller' => 'sociambientalscompleta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambientalscompletum'), array('controller' => 'sociambientalscompleta', 'action' => 'add')); ?> </li>
	</ul>
</div>
