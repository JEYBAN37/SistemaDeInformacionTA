


<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">
                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
                </div>


                <?php echo $this->Form->create('Verificacion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>
                    <h2 class="page-header">Calificación de criterios</h2>

                  <div class="row"> 

                    <div class="form-group col-md-6 ">
                        <?php

                        echo $this->Form->input('dimension_id', array('label' => 'Dimensión', 'type' => 'select', 'class' => 'form-control select-search'));

                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php
                        echo $this->Form->input('criterio_id', array('label' => 'Instrumento/criterio', 'type' => 'select',  'class' => 'form-control select-search'));

                        ?>


                    </div>

                      <div class="form-group col-md-6">
                        <?php
                        echo $this->Form->input('porcentajeprogramado', array('label' => 'Porcentaje programado del item/criterio',   'class' => 'form-control'));

                        ?>


                    </div>
                        <div class="form-group col-md-6">
                        <?php
                        echo $this->Form->input('porcentajealcanzado', array('label' => 'Porcentaje alacanzado  del item/criterio',   'class' => 'form-control'));                  

                        ?>


                    </div>
                 
                     


                    <div class="form-group col-md-6">
                        <p class="help-block">Seleccione tipo de instrumento</p>


                        <select id="status" name="status" required onChange="mostrar(this.value);" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="01">Check list</option>
                            <option value="1">Historia Clinica</option>
                           
                        </select>
                    </div>  




                    <div class="form-group col-md-6" >

                         <?php $optionsnumerohistorias = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15'); ?>
                       
                          <?php  echo $this->Form->input('numero_historias', array('label' => 'Numero de historias o profesionales auditadas ', 'type' => 'select', 'options' => $optionsnumerohistorias ,'class'=>'form-control')); ?>


                    </div>

                      <div class="form-group col-md-12">


                        

                        <p class="help-block">'Ingrese solo los valores del subtotal del ítem o criterio evaluado, en relación al numero de historias o profesionales auditados'</p>
                    </div>

                     

                      <div id="01" class="panel panel-default form-group col-md-12" style="display: none;">

                        <div class="form-group col-md-3"><?php echo $this->Form->input('valorchecklist1'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('valorchecklist2'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('valorchecklist3'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('valorchecklist4'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('valorchecklist5'); ?></div>
                      

                    </div>

                      <div id="1" class="panel panel-default form-group col-md-12" style="display: none;">

                       <div class="form-group col-md-3"><?php echo $this->Form->input('historia1'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia2'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia3'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia4'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia5'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia6'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia7'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia8'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia9'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia10'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia11'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia12'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia13'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia14'); ?></div>
                        <div class="form-group col-md-3"><?php echo $this->Form->input('historia15'); ?></div>

                       


                    </div>

                  
                   

                   
                    <div class="form-group col-md-12">
                        <p class="help-block"> Registre los hallazgos mas relevantes del criterio auditado (max 1000 caracteres)</p>
                        <?php
                        echo $this->Form->input('observacion', array('label' => 'Observacion general del criterio evaluado', 'class' => 'form-control'));
                        ?>

                    </div>
                   

                   
                    
                    <div class="form-group col-md-6">
                        <?php
                        echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                      
                        ?>
                    </div>

                     <?php
                         echo $this->Form->input('created', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                      
                        ?>

                </div>


            </fieldset>

             
            <!--p>
                <?php echo $this->Form->end(array('label' => 'Guardar registro', 'class' => 'btn btn-success')); ?>
            </p-->

             <div class="row">
                    <div class="form-group col-md-6">                      
                        <?php echo $this->Form->submit('Guardar Otro', array('name' => 'btn')); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php echo $this->Form->submit('Finalizar', array('name' => 'btn')); ?>
                    </div>
                </div>

        </div>
    </div>

</div>
</div>

<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>


<script type="text/javascript">
    $(document).ready(function() {
        $('.select-search').select2();
        agregarOpcionSeleccion();
    });
    /*$('document').ready(function() {

        $val = 0;
        $porcentajeprogramado = 0;      
        $hcl1=0;
        $hcl2=0;
        $hcl3=0;
        $hcl4=0;
        $hcl5=0;
        $hcl6=0;
        $hcl7=0;
        $hcl8=0;
        $hcl9=0;
        $hcl10=0;
        $hcl11=0;
        $hcl12=0;
        $hcl13=0;
        $hcl14=0;
        $hcl15=0;

       
        $('#VerificacionPorcentajealcanzado').on('change', function() {
            calcularValor();
        });
    });*/

    function agregarOpcionSeleccion() {
        $("#VerificacionCriterioId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#VerificacionDimensionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }




    /*function calcularValor() {

        try {

            $porcentajeprogramado = $('#VerificacionPorcentajeprogramado').val();
          // $porcentajealcanzado = $('#VerificacionPorcentajealcanzado').val();
                $hcl1= $('#VerificacionHistoria1').val();
                $hcl2= $('#VerificacionHistoria2').val();
                $hcl3= $('#VerificacionHistoria3').val();
                $hcl4= $('#VerificacionHistoria4').val();
                $hcl5= $('#VerificacionHistoria5').val();
                $hcl6= $('#VerificacionHistoria6').val();
                $hcl7= $('#VerificacionHistoria7').val();;
                $hcl8= $('#VerificacionHistoria8').val();
                $hcl9= $('#VerificacionHistoria9').val();
                $hcl10= $('#VerificacionHistoria10').val();
                $hcl11= $('#VerificacionHistoria11').val(); 
                $hcl12= $('#VerificacionHistoria12').val();
                $hcl13= $('#VerificacionHistoria13').val();
                $hcl14= $('#VerificacionHistoria14').val();
                $hcl15= $('#VerificacionHistoria15').val();



            $val = (parseFloat($hcl1) + parseFloat($hcl2)+parseFloat($hcl3));

             if($val > $porcentajeprogramado){
              if (confirm("El porcentaje acomulado no debe superar el valor programado")) {
                 $val =  null;
                  $('#VerificacionPorcentajealcanzado').val();   
                

                 }
                } 
         
        $('#VerificacionPorcentajealcanzado').val($val);


    } catch (err) {}
    }*/

      function mostrar(id) {
        if (id == "01") {
            $("#01").show();
            $("#1").hide();
       

        } else if (id == "1") {
            $("#01").hide();
            $("#1").show();
           

        } 
    }


</script>

