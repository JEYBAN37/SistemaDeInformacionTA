<?php $this->layout = 'formulario' ?>
<div class="evaluaciones form">
<?php echo $this->Form->create('Evaluacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Evaluacion'); ?></legend>
	<?php
		echo $this->Form->input('subcriterio_id');
		echo $this->Form->input('num_historias_evaluadas');
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
		echo $this->Form->input('observacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
