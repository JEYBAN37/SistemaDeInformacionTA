

<?php $this->layout = 'formulario';?>





 
<div class="verificaciones form">
<?php echo $this->Form->create('Verificacion'); ?>
    <fieldset>
        <legend><?php echo __('Add verificacion'); ?></legend>
    <?php
        echo $this->Form->input('dimension_id');   
        echo $this->Form->input('instrumento_id');
        echo $this->Form->input('criterio_id');
        echo $this->Form->input('subcriterio_id');
        echo $this->Form->input('evaluacion_id');
        


            ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Dimensiones'), array('action' => 'index')); ?></li>
    </ul>
</div-->
<script language="javascript">
 var js = jQuery.noConflict();
js(document).ready(function () {
        js("#VerificacionDimensionId").change(function () {
            js.ajax({
                type:"GET",
                url:"../Verificaciones/edit"+js(this).val(),

                beforeSend:function () {
                    js('#imgcargas').html('<div class="rating-flash" id="cargando_div"><img src="..img/escudo.png" whith= "60px;" height="60px;"/>Cargando</div>');

                },
                success: function (respuesta) {
                    js('#imgcargas').html(respuesta);
                }




            })
           
        })
       
    })
</script>

 


