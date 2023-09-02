<div class="gestantes form">
<?php echo $this->Form->create('Gestante'); ?>
	<fieldset>
		<legend><?php echo __('Add Gestante'); ?></legend>
	<?php
		echo $this->Form->input('familia_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('cursovida');
		echo $this->Form->input('controprenatal');
		echo $this->Form->input('riesgomaterno');
		echo $this->Form->input('valoracionmedica');
		echo $this->Form->input('paraclinicos');
		echo $this->Form->input('riesgopsicosocial');
		echo $this->Form->input('canalizacionuno');
		echo $this->Form->input('canalizaciondos');
		echo $this->Form->input('eduacionuno');
		echo $this->Form->input('educaciondos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gestantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
