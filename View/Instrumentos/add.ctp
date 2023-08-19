<?php $this->layout = 'formulario' ?>
<div class="instrumentos form">
<?php echo $this->Form->create('Instrumento'); ?>
	<fieldset>
		<legend><?php echo __('Add Instrumento'); ?></legend>
	<?php
		echo $this->Form->input('dimension_id', array('label' => 'Dimension', 'type' => 'select',  'class' => 'form-control select-search'));

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

		<li><?php echo $this->Html->link(__('List Instrumentos'), array('action' => 'index')); ?></li>
	</ul>
</div>

<script type="text/javascript">

 function agregarOpcionSeleccion() {
        $("#InstrumentoDimensionId").prepend("<option value='' selected='selected'>Seleccione</option>");
       
    }

 </script>
