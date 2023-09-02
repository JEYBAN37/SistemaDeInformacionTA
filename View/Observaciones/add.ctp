<div class="observaciones form">
<?php echo $this->Form->create('Observacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Observacion'); ?></legend>
	<?php
		echo $this->Form->input('familia_id');
		echo $this->Form->input('riesgovivienda');
		echo $this->Form->input('riesgoprimerainfancia');
		echo $this->Form->input('riesgoenfermedadcronica');
		echo $this->Form->input('riesgogestante');
		echo $this->Form->input('riesgosicosocial');
		echo $this->Form->input('riesgofamilia');
		echo $this->Form->input('date');
		echo $this->Form->input('observacion');
		echo $this->Form->input('dir');
		echo $this->Form->input('anexo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Observaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
