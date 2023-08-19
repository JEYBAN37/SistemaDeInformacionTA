<div class="responsables form">
<?php echo $this->Form->create('Responsable'); ?>
	<fieldset>
		<legend><?php echo __('Edit Responsable'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipodoc');
		echo $this->Form->input('numero');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nac');
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('profesion');
		echo $this->Form->input('cargo');
		echo $this->Form->input('familiar');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('tel_familiar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Responsable.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Responsable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
	</ul>
</div>
