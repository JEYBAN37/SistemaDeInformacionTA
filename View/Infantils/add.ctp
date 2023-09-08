<div>
    <div class="form-group col-sm-12">

        <?php echo $this->Form->create('Infantil'); ?>

        <fieldset>

            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Infancia</h1>
                <h5 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: -10px; ">6 a 11 años</h5>
            </div>


            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php

                            echo $this->Form->input('familia_id', [
                                'label' => 'ID_Familia/N° Hogar/Nombres',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'class' => 'form-control select-search',
                                'style' => 'font-size: 12px',
                            ]);
                            ?></div>
                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('persona_id', [
                                'label' => 'Docuemento/Nombre del Menor/Edad',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'class' => 'form-control select-search',
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; "> Valoración de Salud</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <?php
                            $optionDiscapacidad = array('' => 'Elegir', 'No presenta' => 'No presenta', 'Fisica' => 'Fisica', 'Cognitiva' => 'Cognitiva', 'Sensorial' => 'Sensorial');
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

                            echo $this->Form->input('indicemasacorporal', array(
                                'label' => 'Indice masa corporal',
                                'class' => 'form-control',
                                'placeholder' => '',

                                'style' => 'font-size: 12px',

                            ));
                            ?></div>
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('tensionarterial', array(
                                'label' => 'Registre Tensión arterial',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'placeholder' => ''
                            )); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $optionCronica = array(
                                '' => 'Elegir',
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
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <?php
                            $optionVacuna = array(
                                '' => 'Elegir',
                                'Incompleto' => 'Esquema incompleto a su edad',
                                'Completo' => 'Esquema al día a su edad con refuerzo adicionales',
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

                        <div class="form-group col-md-6">
                            <?php
                            $optionYesNo = [
                                '' => 'Elegir',
                                'Si' => 'Si',
                                'No' => 'No',
                                'SD' => 'Sin dato',

                            ];
                            echo $this->Form->input('desparasitacion', array(
                                'label' => 'Desparasitado en los últimos seis meses',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $optionYesNo,
                                'style' => 'font-size: 12px'

                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionCyD = array(
                                '' => 'Elegir',
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
                                '' => 'Elegir',
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
                            <?php


                            echo $this->Form->input('higieneoral', array(
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
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <?php
                            $optionEstudio = [
                                '' => 'Elegir',
                                'Jardin Infantil' => 'Jardin Infantil',
                                'Institucion educativa' => 'Escuela',
                                'No estudia' => 'No estudia',
                                'Pronico' => 'Proinco',
                                'Descercion escolar ' => 'Se retiro de estudiar',
                                'No informa' => 'No informa',
                                'SD' => 'Sin dato'
                            ];

                            echo $this->Form->input('estudio', array(
                                'label' => '¿El menor asiste a una institución educativa o de cuidado?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'options' => $optionEstudio,
                                'type' => 'select',
                                'style' => 'font-size: 12px',

                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionRendimientoEstudio = [
                                '' => 'Elegir',
                                'Alto' => 'Aprende y es dedicado en sus tareas',
                                'Medio' => 'Se le dificulta comprender las tematicas ',
                                'Bajo' => 'Tiene bajas notas y no hace tareas',
                                'No aplica' => 'No aplica',
                                'No informa' => 'No informa',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('rendimientoescolar', array(
                                'label' => '¿Como es el rendiminento escolar del menor:',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $optionRendimientoEstudio,
                                'style' => 'font-size: 12px',
                                'class' => 'form-control select-search'
                            ));
                            ?></div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionTiposViolencia = [
                                '' => 'Eletgir',
                                'No' => 'No se identifica',
                                'Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
                                'Violencia Emocional' => 'Menor retarido, timido o agresivo',
                                'Violencia Sexual' => 'Tocamientos de personas adultas, relaciones sexuales ',
                                'Abondono_Negligencia' => 'Falta de atencion a necesidades básicas(alimentación, salud, educación)',
                                'No informa' => 'No informa',
                                'SD' => 'Sin dato'
                            ];


                            echo $this->Form->input('sopechamaltrato', array(
                                'label' => '¿Sospecha de algun tipo de vulneración o violencia?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'options' => $optionTiposViolencia,
                                'type' => 'select',
                                'style' => 'font-size: 12px',

                            )); ?>
                        </div>

                    </div>
                </div>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Plan de Atención integral</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('canalizacionuno', array(
                                'label' => 'Se canaliza a',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $optionYesNo,
                                'style' => 'font-size: 12px',

                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('canalizaciondos', array(
                                'label' => 'Se canaliza a',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'style' => 'font-size: 12px',
                                'options' => $optionYesNo,
                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('eduacionuno', array(
                                'label' => 'Se requiere plan de atención en',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'style' => 'font-size: 12px',
                                'options' => $optionYesNo,
                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('educaciondos', array(
                                'label' => 'Se requiere plan de atención en',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'style' => 'font-size: 12px',
                                'options' => $optionYesNo,
                            )); ?>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>

    </div>
</div>



<!--div class="actions">
	<h3><?php echo ('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('List Infantils'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
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


function agregarOpcionSeleccion() {

    $("#PrimerainfanciaFamiliaId").prepend("<option value='' selected='selected'>Seleccione</option>");
    $("#PrimerainfanciaPersonaId").prepend("<option value='' selected='selected'>Seleccione</option>");
}




function mostrar(id) {
    if (id == "si") {
        $("#si").show();
        $("#no").hide();

    } else if (id == "no") {
        $("#si").hide();
        $("#no").show();

    }
}
</script>