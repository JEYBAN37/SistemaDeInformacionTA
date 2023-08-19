<?php $this->layout = 'formulario' ?>
<div class="criterios form">
<?php echo $this->Form->create('Criterio'); ?>
	<fieldset>
		<legend><?php echo __('Add Criterio'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Criterios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script language="javascript">
$(document).ready(function(){
    $("#marca").on('change', function () {
        $("#marca option:selected").each(function () {
            elegido=$(this).val();
            $.post("modelos.php", { elegido: elegido }, function(data){
                $("#modelo").html(data);
            });			
        });
   });
});
</script>
