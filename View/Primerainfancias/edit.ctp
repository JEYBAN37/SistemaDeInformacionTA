<div>

    <div class="form-group col-sm-12">


        <?php echo $this->Form->create('Primerainfancia'); ?>


        <fieldset>

            <?php echo $this->Form->input('id'); ?>


            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Primera Infancia
                    menor de 5 años
                </h1>

            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
            <hr
                style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">


                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'style' => 'font-size: 12px',
								'type' => 'hidden'
							]);
							?>
                        </div>





                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('persona_id', [
								'label' => 'Docuemento/Nombre del Menor/Edad',
								'class' => 'form-control',
								'placeholder' => '',
								'style' => 'font-size: 12px',
								'disabled' => 'disabled'
							]);
							?>
                        </div>


                    </div>
                </div>

            </div>



            <h2 class="titulo-general-pwa-govco col-md-6  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
                Valoracion de Salud</h2>
            <hr
                style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php
							$optionYesNo = [

								'Si' => 'Si',
								'No' => 'No',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('prematuro', array(
								'label' => '¿El/la menor nació prematuro?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							$optionDiscapacidad = array('No presenta' => 'No presenta', 'Fisica' => 'Fisica', 'Cognitiva' => 'Cognitiva', 'Sensorial' => 'Sensorial');
							echo $this->Form->input('discapacidad', array(
								'label' => '¿Presenta alguna de las siguientes discapacidades?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',

								'style' => 'font-size: 12px',
								'options' => $optionDiscapacidad
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('anomaliacongenita', array(
								'label' => 'Presenta una anomalía congénita',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('peso', array(
								'label' => 'Registre su Peso en Kg.',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('talla', array(
								'label' => 'Registre su talla en cm',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php

							echo $this->Form->input('bajopeso', array(
								'label' => 'Antecedente de bajo peso al nacer',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('perimetrocefalico', array(
								'label' => 'Registre su perímetro cefálico (cm)',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('perimetrobraquial', array(
								'label' => 'Registre su perímetro braquial (cm)',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('perimetrocintura', array(
								'label' => 'Registre perímetro cintura (cm)',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('perimetrocadera', array(
								'label' => 'Registre perímetro cadera (cm)',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div>

                        <!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('tensionarterial', array(
								'label' => 'Registre Tensión arterial',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div-->

                        <div class="form-group col-md-6">
                            <?php
							$optionLactancia = array(

								'Lactancia materna exclusiva' => 'Solo Leche materna',
								'Lactancia materna y Alimentacion complementaria' => 'Lactancia materna Alimentación complementaria',
								'Leche materna y leche de formula' => 'Leche materna y leche de formula',
								'Leche materna y otros liquidos' => 'Leche materna y otros liquidos(jugos, agua, aromatica, colada)',
								'Leche de formula' => 'Solo Leche de formula',
								'leche de formula y alimentos solidos' => 'leche de formula y alimentos solidos',
								'Leche materna y alimentos solidos' => 'Leche materna y alimentos solidos(huevo, arroz, pollo, carne)',
								'Alimentacion nutritiva' => 'Alimentación balaceada(Frutas, Verduras, Proteina)',
								'Alimentación no nutritiva' => 'Alimentación No balenceada(Empaquedados, Dulces, gaseosa, Harinas)',

							);
							echo $this->Form->input('lactanciamaterna', array(
								'label' => '¿El alimento en El/La menor es: ?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionLactancia,
								'style' => 'font-size: 12px',

							)); ?>
                            <p class="help-block"> NOTA: Tener encuenta la edad del menor</p>

                        </div>

                        <div class="form-group col-md-6">
                            <?php
							$optionCronica = array(

								'Neurológica' => 'Neurológica',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabolica' => 'Metabólica',
								'Endocrinologica' => 'Endocrinológica',
								'Gastrointestinal' => 'Gastrointestinal',
								'Endocrinologica' => 'Endocrinológica',
								'renal o de otro tipo' => 'renal o de otro tipo',
							);

							echo $this->Form->input('condicioncronica', array(
								'label' => 'Presenta alguna de las siguientes enfermedades crónicas',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica,
								'style' => 'font-size: 12px',

							)); ?>


                        </div>


                    </div>

                </div>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Atención en Salud</h2>
            <hr
                style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <?php
							$optionVacuna = array(

								'Incompleto' => 'Esquema incompleto a su edad',
								'Completo' => 'Esquema al día a su edad',
								'No informa' => 'Desconoce la información/no presenta carnet de vacuanas',
								'SD' => 'Sin dato',

							);
							echo $this->Form->input('esquemavacunacion', array(
								'label' => '¿Le han aplicado las vacunas correspondientes a la edad de menor? ',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionVacuna,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('desparasitacion', array(
								'label' => 'Desparasitado en los últimos seis meses',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							)); ?>
                        </div-->

                        <div class="form-group col-md-6">
                            <?php
							$optionCyD = array(

								'No inscrito en CYD' => 'No está inscrito en CYD',
								'Si CYD' => 'Si Asistió a último control programado',
								'Si no asistiio ulitimo ctrl. ' => 'No Asistió a último control programado',
								'No informa' => 'Desconoce la información/no presenta carnet de CYD',
								'SD' => 'Sin dato',

							);

							echo $this->Form->input('crecimientoydesarrollo', array(
								'label' => '¿Asistió al ultimo control de Crecimiento y Desarrollo?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCyD,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							$optionMalnutricion = array(

								'Desnutricion Aguda' => 'Bajo peso para la edad',
								'Desnutricion Cronica' => 'Baja talla para la edad',
								'Sobrepeso' => 'Sobrepeso',
								'Obesidad' => 'Obesidad',
								'No informa' => 'Desconoce la información/no presenta carnet de CYD',
								'SD' => 'Sin dato',

							);

							echo $this->Form->input('desnutricion', array(
								'label' => '¿Le han informado si el menor tiene un diagnóstico de Malnutrición?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionMalnutricion,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('higieneoral', array(
								'label' => '¿Asistió a consulta de odontología en los últimos seis meses?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('desarrolloinfantil', array(
								'label' => 'Informa sobre alguna dificultad del desarrollo',
								'class' => 'form-control',
								'placeholder' => '',
								'style' => 'font-size: 12px',

							)); ?>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Condiciones de vulnerabilidad</h2>
            <hr
                style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">


            <div class="grow justify-content-center" display="none" style="margin-top:20px">


                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('era', array(
								'label' => 'En momento presenta algún signo de Enferemeda respiratoria Aguda',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('eda', array(
								'label' => 'En momento presenta algún signo de Enferemeda diarreica Aguda',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							$optionCuidado = [

								'Continuo familiar reponsable' => 'Continuo por un familiar adulto',
								'Continuo familiar vulnerable' => 'Continuo por un familiar menor/persona mayor',
								'Continuo acompañante' => 'Continuo por un acompañante no familiar',
								'Cuidado institucional' => 'Continuo en una institución o grupo',
								'Permanece solo' => 'Permanece solo',
								'No refiere' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('cuidador', array(
								'label' => '¿El cuidado del menor está a cargo principalmente de?',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionCuidado,
								'type' => 'select',
								'style' => 'font-size: 12px',

							)); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							$optionEstudio = [
								'' => 'Elegir',
								'Jardin Infantil' => 'Jardin Infantil',
								'Hogar Comuitario' => 'Hogar Comuitario',
								'CDI' => 'CDI',
								'No' => 'Mantiene en casa',
								'No refiere' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('estudio', array(
								'label' => '¿El menor asiste a una institucion educativa o de cuidado?',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionEstudio,
								'type' => 'select',
								'style' => 'font-size: 12px',

							)); ?>
                        </div>


                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('padresconsumo', array(
								'label' => 'Hijo de padres (especialmente la madre) con consumo de sustancias psicoactivas',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionYesNo,
								'type' => 'select',
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('sopechamaltrato', array(
								'label' => 'Indicios de menor víctima de vulneración o violencia',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionYesNo,
								'type' => 'select',
								'style' => 'font-size: 12px',

							)); ?>
                        </div>

                    </div>
                </div>
            </div>


            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Plan de Atención integral</h2>
            <hr
                style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php
							$optionCanlizacion = [
								'' => 'Elegir',
								'Vacunación ' => 'Vacunación',
								'Atención en salud del recién nacido ' => 'Atención en salud del recién nacido',
								'Atención en salud de promoción y mantenimiento por médico o enfermera ' => 'Atención en salud de promoción y mantenimiento por médico o enfermera',
								'Atención en salud bucal' => 'Atención en salud bucal',
								'aplicación de sellantes' => 'aplicación de sellantes, fluor, barniz',
								'Atención medicina general ' => 'Atención en salud por medicina general',
								'Atención Urgencias ' => 'Atención en salud en un servicio de Urgencias',
								'Asesoría en Lactancia Materna ' => 'Asesoría en Lactancia Materna',
								'Activación de ruta por sospecha de violencias ' => 'Activación de ruta por sospecha de violencias',


							];

							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'font-size: 12px',
							)); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'font-size: 12px'
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							$optionEducacion = [
								'Educacion individual' => 'Educación para la salud individual',
								'Educacion familiar' => 'Educación para la salud familiar',
								'Educacion grupal' => 'Educación para la salud grupal',
							];
							echo $this->Form->input('canalizaciontres', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'font-size: 12px',
							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('educacion', array(
								'label' => 'Educación',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'options' => $optionEducacion,
								'type' => 'select',
								'style' => 'font-size: 12px',
							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('canalizacion_id', array(
								'label' => 'Enlace de canalizacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'class' => 'form-control select-search',
								'placeholder' => '',
								'type' => 'select',
								'style' => 'font-size: 12px',
							)); ?>
                        </div>

                    </div>
                </div>
            </div>
        </fieldset>
        <?php echo $this->Form->end(__('Guradar'), ['class' => 'btn btn-success']); ?>
    </div>






</div>


<!--div class="actions">
    <?php echo __('Actions'); ?>



    <ul>

        <li>
            <?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
        </li>
    </ul>
</div-->




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
</script>