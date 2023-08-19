<?php $this->layout = 'formulario' ?>
<div class="instrumentos form">
<?php echo $this->Form->create('Instrumento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instrumento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dimension_id');
		echo $this->Form->input('nombre_instrumento');
		echo $this->Form->input('tipo');
		echo $this->Form->input('definicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instrumento.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Instrumento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instrumentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
