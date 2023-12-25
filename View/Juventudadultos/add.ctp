<?php $this->layout = 'default_familia' ?>
<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<body style="font-size: 14px;">
    <div class="form-group col-sm-12">
        <?php echo $this->Form->create('Juventudadulto'); ?>
        <fieldset>


            <div class="col-12 text-center">
                <h1 class="title-general-forms">Módulo Juventud Adultos
                </h1>

            </div>

            <h2 class="subtitle-general-forms ">Datos Personales</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                    <div class="form-group row">
                        <?php echo $this->Form->input('id'); ?>
                        <?php

						$idAux = $_GET['juventudadultos'];
						echo $this->Form->input('familia_id', array('value' => '' . $idAux, 'type' => 'hidden'));

						?>
                        <!--div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);
							?>
                        </div-->



                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$TipoDeDocumentoOptions = array(
								'' => 'Elegir',
								'CC' => 'Cedula de ciudadania',
								'TI' => 'Tarjeta de identidad',
								'PPT' => 'Permiso Protección Temporal',

							);
							echo $this->Form->input('tipodocumento', array(
								'label' => 'Tipo de Documento:',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'type' => 'select',
								'options' => $TipoDeDocumentoOptions,
								//'empty' => true, // Establecer el campo como vacío
							));
							?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('numerodoc', [
								'label' => 'N° de documento',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('primerapellido', [
								'label' => 'Primer Apellido',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('segundoapellido', [
								'label' => 'Segundo Apellido',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('primernombre', [
								'label' => 'Primer Nombre',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('segundonombre', [
								'label' => 'Segundo Nombre',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <!-- Campo de fecha de nacimiento -->
                            <?php echo $this->Form->input('fechanac', [
								'label' => 'Fecha de nacimiento:',
								'type' => 'date',
								'minYear' => date('Y') - 104,
								'maxYear' => date('Y') - 18,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'fechanac', // Agrega este identificador al campo de fecha de nacimiento
								'empty' => true, // Establecer el campo como vacío

							]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
                            <?php echo $this->Form->input('edad', [
								'label' => 'Edad',
								'style' => 'font-size: 16px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;',
								'id' => 'edad', // Agrega este identificador al campo de edad
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
								'type' => 'number',
								'class' => 'form-control',
								'step' => '0.01'

							]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$generoOption = [
								' ' => 'Elegir',
								'Hombre' => 'Hombre',
								'Mujer' => 'Mujer',
							];
							echo $this->Form->input('sexo', [
								'label' => 'Sexo',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $generoOption,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'mostrar(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							]);
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							$generoOption = [
								' ' => 'Elegir',
								'Masculino' => 'Masculino',
								'Femenino' => 'Femenino',
								'No binanrio' => 'No binario',
								'Prefiere no informar' => 'Prefiere no informar',

							];
							echo $this->Form->input('genero', [
								'label' => '¿Cúal es su género?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $generoOption,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'mostrar(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							]);
							?>

                            <button type="button" id="ayudaButton3" class="btn btn-success rounded-circle"
                                data-toggle="popover" data-placement="top" data-content="Reconocer que las mujeres, 
								los hombres y las personas de los sectores sociales LGBTI,
								reaccionan de distinta forma a los servicios de salud,
								 debido a sus diferentes experiencias a lo largo de la vida,
								 que afecta su salud, la incidencia o prevalencia de enfermedades y su tratamiento. 
								 (Ajustado de módulo conocimientos, OPS 2020).
                                        " style="width: 30px; height: 30px; padding: 0; font-size: 18px;">
                                ?
                            </button>
                        </div>

                      
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$aseguradoraOption = [
								' ' => 'Elegir',
								'Sanitas' => 'Sanitas',
								'Emssanar' => 'Emssanar',
								'Nueva EPS' => 'Nueva EPS',
								'Mallamas' => 'Mallamas',
								'Famisanar' => 'Famisanar',
								'Asmet Salud' => 'Asmet Salud',
								'Sanidad PONAL' => 'Sanidad PONAL',
								'PROINSALUD' => 'PROINSALUD',
								'Fondo UNDENAR' => 'Fondo UDENAR',
								'Medicina Prepagada' => 'Medicina Prepagada',
								'otra' => 'Otra',
								'Sin afiliacion' => 'Sin afiliación',
								'SD' => 'Sin dato',
							];
							echo $this->Form->input('aseguradora', [
								'label' => 'Aseguradora',
								'class' => 'form-control',
								'style' => 'height:30px; font-size: 15px; width:100%',
								'options' => $aseguradoraOption,
								'id' => 'aseguradora', // Añade un ID único
							]);
							?>
						</div>

						<!-- Segundo campo de selección -->
						<div class="form-group col-md-6" style="margin-top: 20px; display: none;" id="otraAseguradoraDiv">
							<?php
							echo $this->Form->input('aseguradora', [
								'label' => 'Otra Aseguradora',
								'class' => 'form-control',
								'style' => 'height:30px; font-size: 15px; width:100%',
								'disabled' => 'disabled', // Inicialmente deshabilitado
								'id' => 'otraAseguradora', // Añade un ID único
							]);
							?>
						</div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$regimenOption = [
								' ' => 'Elegir',
								'Subsidiado' => 'Subsidiado',
								'Contributivo' => 'Contributivo',
								'Regimen especial' => 'Régimen especial',
								'Regimen excepción' => 'Régimen excepción',
								'Particular' => 'Particular',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('regimen', [
								'label' => 'Regimen',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $regimenOption,
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php $estadoAfiliacionOption = [
								' ' => 'Elegir',
								'Activo' => 'Activo',
								'Inactivo' => 'Inactivo',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('estadoafiliacion', [
								'label' => 'Estado de Afiliación',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $estadoAfiliacionOption,
							]);  ?>
                        </div>

                        <!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('barrio', [
								'label' => 'Barrio',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div-->

                        <!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('direccion', [
								'label' => 'Direccion',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div-->

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('telefono', [
								'label' => 'Teléfono',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('email', [
								'label' => 'Email',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="subtitle-general-forms">
                Valoración de Salud</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionYesNo = [
								'' => 'Elegir',
								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							$optionDiscapacidad = array(
								'' => 'Elegir',
								'No' => 'No presenta',
								'Física' => 'Física',
								'Auditiva' => 'Auditiva',
								'Visual' => 'Visual',
								'Sordoceguera' => 'Sordoceguera',
								'Cognitiva o intelectual' => 'Cognitiva o intelectual',
								'Metal' => 'Mental',

							);
							echo $this->Form->input('discapacidad', array(
								'label' => '¿Presenta alguna de las siguientes discapacidades?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',

								'style' => 'height:30px;  font-size: 15px ; width:100%', 
								'options' => $optionDiscapacidad
							));
							?>

                            <button type="button" id="ayudaButton" class="btn btn-success rounded-circle"
                                data-toggle="popover" data-placement="top" data-content="Físicas: Limitaciones o dificultades en la movilidad o funcionamiento físico.

                                        Auditivas: Dificultades o limitaciones en la capacidad de escuchar o procesar el sonido.

                                        Visuales: Limitaciones o dificultades en la visión.

                                        Sordoceguera: Condición en la que una persona tiene tanto discapacidad auditiva como discapacidad visual.

                                        Cognitivas o intelectuales: Limitaciones en el funcionamiento del cerebro que afectan el procesamiento, comprensión, aprendizaje y memoria de la información.

                                        Mentales: Limitaciones en las habilidades cognitivas, emocionales y de comportamiento.
                                        "
                                style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 5px; margin-left: 15px;">
                                ?
                            </button>

                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

							echo $this->Form->input('peso', array(
								'label' => 'Registre Peso en Kg.',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'id' => 'peso',
							));
							?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

							echo $this->Form->input('talla', array(
								'label' => 'Registre talla en cm',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'id' => 'talla',
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <button class="my-button" style="margin-left: 5px;" id="calcularIMC">Calcular IMC</button>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('indicemasacorporal', array(
								'label' => 'Indice de masa corporal',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'readonly' => 'readonly',
								'id' => 'indicemasacorporal',
							)); ?>

                            <p id="mensajeIMC"></p>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('tensionarterial', array(
								'label' => 'Registre Tensión arterial 0/0',
								'class' => 'form-control tension-arterial-input',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => ''

							)); ?>
                            <p id="mensaje-tension-arterial"></p>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionCronica = array(
								'' => 'Elegir',
								'No' => 'No',
								'Hipertensión' => 'Hipertensión',
								'Diabetes' => 'Diabetes',
								'Hipertiroidismo' => 'Hipertiroidismo',
								'Hipotiroidismo' => 'Hipotiroidismo',
								'Dislipidemia' => 'colesterol, triglicéridos elevados',
								'Neurologica' => 'Neurológica',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabólica' => 'Metabólica',
								'Endocrinológica' => 'Endocrinológica',
								'Gastrointestinal' => 'Gastrointestinal',
								'renal o de otro tipo' => 'renal o de otro tipo',
								'No informa' => 'Desconoce la información',
								'SD' => 'Sin dato',
							);
							echo $this->Form->input('condicioncronica', array(
								'label' => '¿Presenta alguna de las siguientes enfermedades crónicas?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'condicioncronica',
								'onChange' => 'cronica(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript

							)); ?>
                        </div>

                        <div id="Cronica" class="form-group col-md-6">

                            <?php
							$optionCronica1 = array(
								'No aplica ' => 'Elegir',
								'No' => 'No aplica',
								'Hipertensión' => 'Hipertensión',
								'Diabetes' => 'Diabetes',
								'Hipertiroidismo' => 'Hipertiroidismo',
								'Hiportiroidismo' => 'Hiportiroidismo',
								'Dislipidemia' => 'colesterol, triglicéridos elevados',
								'Neurologica' => 'Neurológica',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabolica' => 'Metabólica',
								'Endocrinológica' => 'Endocrinológica',
								'Gastrointestinal' => 'Gastrointestinal',
								'renal o de otro tipo' => 'renal o de otro tipo',
								'No informa' => 'Desconoce la información',
								'SD' => 'Sin dato',
							);
							echo $this->Form->input('condicioncronica1', array(
								'label' => '¿Presenta alguna de las siguientes enfermedades crónicas?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica1,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'condicioncronica1',


							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionVacuna = array(
								'' => 'Elegir',
								'No' => 'No',
								'Toxoide tétanico' => 'Toxoide tétanico',
								'Covid' => 'Vacuna Covid-19',
								'Influenza' => 'Influenza Estacional',
								'Fiebre Amarilla' => 'Fiebre Amarilla',
								'No informa' => 'Desconoce la información',
								'SD' => 'Sin dato',

							);
							echo $this->Form->input('esquemavacunacion', array(
								'label' => '¿Le han aplicado alguna de las siguientes vacunas en el último año? ',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionVacuna,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'esquemavacunacion'

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('desparasitacion', array(
								'label' => '¿Se ha desparasitado en los últimos seis meses?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionYesNo,
								'placeholder' => '',
								'id' => 'desparasitacion',
							)); ?> </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionValoracionMedica = array(
								'' => 'Elegir',
								'Consulta Morbilidad' => 'Consulta de Morbilidad',
								'Consulta Cronicos' => 'Consulta de Crónicos',
								'Consulta PYP' => 'Consulta Promoción y prevención',
								'Consulta Urgencias' => 'Consulta Urgencias',
								'No asistido' => 'No ha asistido',
								'No informa' => 'No informa',
								'SD' => 'Sin Dato',

							);
							echo $this->Form->input('valoracionmedica', array(
								'label' => '¿Ha asistido a Valoración Médica en el ultimo año?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'options' => $optionValoracionMedica,
							)); ?>
                        </div>




                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('saludoral', array(
								'label' => '¿Asistió a consulta de odontología en el último año?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionYesNo,
								'placeholder' => '',
								'id' => 'saludoral',
							)); ?>
                        </div>
                    </div>
                </div>
            </div>





            <h2 class="subtitle-general-forms ">Salud
                Sexual y Reproductiva</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">
            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">

                            <?php
							$optionVidaSexual = [
								'No aplica ' =>  'Elegir',
								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('iniciovidasexual', array(
								'label' => '¿Usted ha iniciado su vida sexual?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionVidaSexual,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'iniciovidasexual(this.value); mujer(this.value);', // Combina ambas funciones en una sola función onchange
							)); ?>
                        </div>


                    </div>
                    <div id="yess" class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionAnticonceptivos = [
								'No aplica ' => 'Elegir',
								'No' => 'No',
								'Sin pareja' => 'No tiene pareja en el momento',
								'Si control' => 'Si, con supervisión',
								'Si No control' => 'Si, sin supervisión',
								'Responsabilidad Pareja' => 'Deja la responsabilidad a la pareja',
								'Vasectomía' => 'Vasectomía',
								'Pomeroy' => 'Pomeroy',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => '¿Utiliza algún método de planificación familiar?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionAnticonceptivos,
								'placeholder' => '',
								'id' => 'metodosanticonceptivos'

							)); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionits = [
								'No aplica ' =>  'Elegir',
								'No' => 'No',
								'Si' => 'Si',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('infeccionestransmisionsexual', array(
								'label' => '¿Le han diagnosticado alguna Infección de transmisión Sexual?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionits,
								'placeholder' => '',
								'id' => 'infeccionestransmisionsexual'

							)); ?>
                        </div>



                    </div>
                </div>
            </div>


            <div id="yesss">
                <div id="si" class="grow justify-content-center" display="none" style="margin-top:20px">
                    <h2 class="subtitle-general-forms " style="margin-bottom: 10px;">Salud de la Mujer</h2>
                    <hr style=" border:0.1px solid rgba(0,0,0,.125);margin-bottom: 20px;">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                        <div class="form-group row">
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$optionCitologia = [
									'No aplica ' =>  'Elegir',
									'No' => 'No',
									'Citologia VPH' => 'Si, Citología VPH',
									'Citologia convencional' => 'Si, Citología convencional',
									'No informa' => 'No informa',
									'No aplica' => 'No aplica',
									'SD' => 'Sin dato',


								];
								echo $this->Form->input('tomacitologia', array(
									'label' => '¿Se ha realizado el exámen de citología de acuerdo a esquema?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionCitologia,
									'placeholder' => '',
									'id' => 'tomacitologia'
								)); ?>
                                <p class="help-block"> Esquema: Citología convencional esquema 1-3-3 edad 25 a 29 años y
                                    Citología VPH
                                    1-5-5 edad de 30 a 65 años, Esquemas ante resultado negativo</p>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">

                                <?php
								$optionYesNo1 = [
									'No aplica ' => 'Elegir',
									'Si' => 'Si',
									'No' => 'No',
									'No informa' => 'No informa',
									'No aplica' => 'No aplica',
									'SD' => 'Sin dato',

								];

								echo $this->Form->input('mamografia', array(
									'label' => 'Le han realizado Mamografía en los 5 últimos años (Mujer de 50 y más años)',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionYesNo1,
									'placeholder' => ''
								)); ?>
                            </div>
                        </div>
                    </div>

                    <h2 class="subtitle-general-forms " style="margin-bottom: 10px;">Antecedentes ginecológicos
                        /obsetétricos</h2>
                    <hr style=" border:0.1px solid rgba(0,0,0,.125);margin-bottom: 20px;">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                        <div class="form-group row">
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php

								echo $this->Form->input('antecedenteginecologico', array(
									'label' => '¿Le han realizado alguna cirugia ginecológica?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionYesNo1,
									'placeholder' => ''
								)); ?>
                                <p class="help-block"> Procedimientos en el sistema reproductivo, ovarios, útero,
                                    trompas de
                                    Falopio, cuello uterino </p>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$optionGinecologico = [
									'No aplica ' => 'Elegir',
									'No' => 'No',
									'No embarazos' => 'No ha tenido embarazos',
									'Antecedente de abortos' => 'Antecedente de 2 o más abortos',
									'Muerte perinatal' => 'Muerte perinatal',
									'Bajo peso al nacer' => 'Recien nacido con Bajo peso al nacer',
									'Prematurez' => 'Recien nacido Prematuro',
									'Multiparidad' => 'Multiparidad (5 o más partos)',
									'Edad Materna Avanzada' => 'Embarazo mujer mayor de 35 años',
									'Preclampsia' => 'Antecendente de Preclampsia',
									'Eclampsia' => 'Antecendente de eclampsia',
									'No aplica' => 'No Aplica',
									'SD' => 'Sin dato',

								];
								echo $this->Form->input('antecedenteginecologico', array(
									'label' => '¿Ha presentado alguna de las siguientes situaciones en el embarazo? ',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionGinecologico,
									'placeholder' => ''
								)); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la
                                    opción
                                    'No ' </p>
                                <?php
								echo $this->Form->input('ancedenteginecologico1', array(
									'label' => '¿Ha presentado alguna de las siguientes situaciones en el embarazo? ',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionGinecologico,
									'placeholder' => ''
								)); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$gestanteOption = [
									'No aplica ' => 'Elegir',
									'No' => 'No',
									'Si' => 'Si',
								];
								echo $this->Form->input('gestacion', [
									'label' => '¿Mujer en embarazo?',
									'class' => 'form-control',
									'placeholder' => '',
									'type' => 'select',
									'options' => $gestanteOption,
									'style' => 'height:30px;  font-size: 15px ; width:100%',

									'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
									'onChange' => 'gestacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
								]);
								?>
                                <p class="help-block"> Registre infomración de mujer en gestación o puerperio</p>
                            </div>
                        </div>
                    </div>

                    <div id="yes">
                        <h2 class="subtitle-general-forms " style="margin-bottom: 10px;">Gestación</h2>
                        <hr style=" border:0.1px solid rgba(0,0,0,.125);margin-bottom: 20px;">
                        <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$optionControlPrenatal = [
									'No aplica ' =>  'Elegir',
									'No inscrita' => 'No inscrita en control de embarazo',
									'Asistente CPN' => 'Si, Control al día',
									'Inasistente CPN' => 'Si, inasistente a último control',
									'Puerperio' => 'En etapa de puerperio',
									'No informa' => 'No sabe/No informa',
									'SD' => 'Sin dato',
								];
								echo $this->Form->input('controlprenatal', array(
									'label' => '¿Esta inscrita en control prenatal?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionControlPrenatal,
									'placeholder' => '',

								)); ?>

                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$optionRiesgoEmbarazo = [
									'No aplica ' =>  'Elegir',
									'Bajo' => 'Bajo',
									'Alto' => 'Alto',
									'No informa' => 'No informa',
									'SD' => 'Sin dato',


								];
								echo $this->Form->input('riesgoembarazo', array(
									'label' => '¿El riesgo del embarazo es?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionRiesgoEmbarazo,
									'placeholder' => '',


								)); ?>

                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$optionAlarmaEmbarazo = [
									'No aplica ' =>  'Elegir',
									'No' => 'No',
									'Dolor de Cabeza' => 'Dolor de cabeza',
									'Mareo_zumbido' => 'Mareo/zumbido en el oido',
									'Dolor del vientre' => 'Dolor del vientre tipo contracción',
									'Disminucion o ausencia de movimientos del bebe' => 'Disminución o ausencia de movimientos del bebé',
									'Hinchazon de cara y extremidades' => 'Hinchazón de manos, cara, piernas y pies',
									'Visión borrosa o luces parpadeantes' => 'Visión borrosa o luces parpadeantes',
									'Visión borrosa o luces parpadeantes' => 'Visión borrosa o luces parpadeantes',
									'Sangrado vaginal' => 'Sangrado vaginal',
									'No informa' => 'No informa',
									'SD' => 'Sin dato',


								];
								echo $this->Form->input('signoAlarma', array(
									'label' => '¿En el momento presenta alguno de los siguientes signos o síntomas de alarma?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionAlarmaEmbarazo,
									'placeholder' => '',
									'id' => 'riesgoembarazo'

								)); ?>

                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">

                                <?php
								$optionCursoVida = [
									'No aplica ' => 'Elegir',
									'Juventud' => 'Juventud',
									'Adultez' => 'adultez',
								];

								echo $this->Form->input('cursovida', array(
									'label' => '¿El curso de vida de la gestante es?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionCursoVida,
									'placeholder' => ''
								)); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								$optionAlternativa = [
									'No aplica ' => 'Elegir',
									'No refiere' => 'No refiere',
									'Medicina indigena' => 'Medicina Tradicional/indigena',
									'Homeopatía' => 'Homeopatía',
									'Medicina tradicional china' => 'Medicina tradicional china',
									'Acupuntura' => 'Acupuntura',
									'Quiropraxia' => 'Quiropraxia',
									'Otro' => 'Otro',
									'SD' => 'Sin dato'
								];
								echo $this->Form->input('saludalternativa', [
									'label' => '¿Hacen uso de otras opciones para el cuidado de su salud durante su embarazo?',
									'class' => 'form-control',
									'type' => 'select',
									'options' => $optionAlternativa,
									'style' => 'height:30px;  font-size: 15px ; width:100%',
								]);
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <h2 class="subtitle-general-forms ">Riesgo
                Psicosocial</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionEstudio = [
								'' => 'Elegir',
								'No' => 'No',
								'Institucion educativa' => 'Institución educativa',
								'Educacion por ciclos' => 'Educación por ciclos',
								'Instituto tecnico' => 'Instituto técnico',
								'No estudia' => 'No estudia',
								'Centro Dia' => 'Centro Día',
								'Centro Vida' => 'Centro Vida',
								'SENA' => 'SENA',
								'Universidad' => 'Universidad',
								'No aplica' => 'No aplica',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('estudio', array(
								'label' => '¿Asiste a una institución educativa o de cuidado?',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionEstudio,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionOcupacion = [
								'' => 'Elegir',
								'Estudia' => 'Estudia',
								'Oficios Hogar y cuidado' => 'Oficios del hogar y/o de cuidado',
								'Trabajo formal' => 'Trabajo formal',
								'Trabajo informal' => 'Trabajo informal',
								'Independiente' => 'Independiente/microempresario',
								'Sin ocupación' => 'Sin ocupación',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato'
							];
							echo $this->Form->input('ocupacion', array(
								'label' => '¿Cúal es la ocupación actual?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionOcupacion,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'class' => 'form-control select-search'
							));
							?></div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionConsumospa = [
								'No aplica ' =>  'Elegir',
								'No' => 'No',
								'Cigarrillo' => 'Cigarrillo',
								'Licor' => 'Licor',
								'Licor_cigarrillo' => 'Licor/Cigarrillo',
								'Sustancias Psicoactivas' => 'Marihuana, basuco, otras',
								'Uso indebido de Medicamentos' => 'Medicamentos sin prescripción médica(Opioides,Depresores,Estimulantes)',
								'SD' => 'Sin dato',
								'No aplica' => 'No aplica',

							];

							echo $this->Form->input('consumospa', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionConsumospa,
								'placeholder' => '',
								'id' => 'consumospa',
								'onChange' => 'spa(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							)); ?>
                        </div>
                        <div id="Consumospa" class="form-group col-md-6">
                            <?php
							echo $this->Form->input('consumospa1', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionConsumospa,
								'placeholder' => '',
								'id' => 'consumospa1'

							)); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionConflictos = [
								'No aplica ' => 'Elegir',
								'No' => 'No refiere',
								'Difucultades Economicas' => 'Dificultad económica para suplir necesidades básicas',
								'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
								'Conflictos entre hermanos' => 'Conflictos entre hermanos',
								'Conflictos entre Familia' => 'Conflictos entre Familia',
								'Violencias de género' => 'Violencias de género',
								'Problemas o Transtornos mentales diagnosticados' => 'Problemas o Transtornos mentales diagnosticados',
								'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('riesgopsicosocial', [
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el último mes?',
								'class' => 'form-control',
								'type' => 'select',
								'options' => $optionConflictos,

								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'riesgopsicosocial',
								'onChange' => 'psicosocial(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							]);
							?>
                        </div>
                        <div id="Psicosocial" class="form-group col-md-6">
                            <p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
                                'No refiere' </p>
                            <?php
							echo $this->Form->input('riesgopsicosocial1', array(
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionConflictos,
								'placeholder' => '',
								'id' => 'riesgopsicosocial1'
							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionTiposViolencia = [
								'' => 'Elegir',
								'No' => 'No se identifica',
								'Sospecha Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
								'Sospecha Violencia Emocional' => 'Persona retraida, timida o agresiva',
								'sospecha Violencia Sexual' => 'Tocamientos de personas, relaciones sexuales sin consentimiento ',
								'Sospecha Abondono_Negligencia' => 'Falta de atención a necesidades básicas(alimentación, salud, educación)',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('sopechamaltrato', array(
								'label' => '¿Sospecha de algún tipo de vulneración o violencia?',
								'class' => 'form-control',
								'placeholder' => '',

								'options' => $optionTiposViolencia,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'sopechamaltrato'


							)); ?>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="subtitle-general-forms ">Plan de
                Atención integral</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionCanlizacion = [
								'No aplica ' => 'Elegir',
								'No' => 'No',
								'Vacunacion ' => 'Vacunación ',
								'Atencion de PyM Medico' => 'Atención en salud de promoción y mantenimiento por médico',
								'Atencion medicina general' => ' Atención en salud por medicina general',
								'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
								'Salud oral' => 'profilaxis y remoción de placa bacteriana y/o detartraje supragingival.',
								'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',
								'Prueba rapida treponemica' => 'Prueba rápida treponémica',
								'Prueba rapida para VIH' => 'Prueba rápida para VIH',
								'Asesoria pre y post test VIH' => 'Asesoría pre y post test VIH',
								'Prueba rápida hepatitis B' => 'Prueba rápida de hepatitis B',
								'Prueba rápida hepatitis C' => 'Prueba rápida de hepatitis C',
								'Prueba de embarazo' => 'Prueba de embarazo',
								'Asesoría en anticoncepcion' => 'Asesoría en anticoncepción por médico o enfermera',
								'Tamizaje de riesgo cardiovascular' => 'Tamizaje de riesgo cardiovascular',
								'Citologia' => 'Tamizaje de cáncer de cuello uterino (citología)',
								'Suministro de anticonceptivos  ' => 'Suministro de anticonceptivos  ',
								'Suministro de preservativos' => 'Suministro de preservativos',
								'Asesoria en anticoncepcion' => 'Asesoría en anticoncepción',
								'Tamizaje para cancer de mama' => 'Tamizaje para cáncer de mama',
								'Tamizaje para cancer de prostata ' => 'Tamizaje para cáncer de próstata (PSA)',
								'Tamizaje para cancer de colon' => 'Tamizaje para cáncer de colon',

							];

							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'canalizacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							)); ?>
                        </div>


                    </div>
                    <div id="Canalizacion" class="form-group row">
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',


							));
							?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

							echo $this->Form->input('canalizaciontres', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionEducacion = [
								'No aplica ' => 'Elegir',
								'No aplica' => 'No aplica',
								'Educacion individual' => 'Educación para la salud individual',
								'Educacion familiar' => 'Educación para la salud familiar',
								'Educacion grupal' => 'Educación para la salud grupal',

							];
							echo $this->Form->input('educacion', array(
								'label' => 'Refiera el tipo de Educación a desarrollar',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'options' => $optionEducacion,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('canalizacion_id', array(
								'label' => 'Enlace de canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'class' => 'form-control select-search',
								'placeholder' => '',
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>

                        <?php
						echo $this->Form->input('fechaRegistro', array(

							'type' => 'hidden',
						)); ?>

                    </div>

                </div>
            </div>

        </fieldset>
        <button class="my-button">
            Guardar<?php echo $this->Form->end(); ?>
        </button>
    </div>

</body>




<!--div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
			</li>
			<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
			</li>
			<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
			</li>
			<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
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



document.addEventListener('DOMContentLoaded', function () {
        var aseguradoraSelect = document.getElementById('aseguradora');
        var otraAseguradoraDiv = document.getElementById('otraAseguradoraDiv');

        aseguradoraSelect.addEventListener('change', function () {
            var selectedOption = aseguradoraSelect.value;

            if (selectedOption === 'otra') {
                otraAseguradoraDiv.style.display = 'block';
                document.getElementById('otraAseguradora').removeAttribute('disabled');
            } else {
                otraAseguradoraDiv.style.display = 'none';
                document.getElementById('otraAseguradora').setAttribute('disabled', 'disabled');
            }
        });

        // Verifica el estado inicial
        if (aseguradoraSelect.value === 'otra') {
            otraAseguradoraDiv.style.display = 'block';
            document.getElementById('otraAseguradora').removeAttribute('disabled');
        } else {
            otraAseguradoraDiv.style.display = 'none';
            document.getElementById('otraAseguradora').setAttribute('disabled', 'disabled');
        }

    });


function agregarOpcionSeleccion() {



    $("#JuventudadultoCanalizacionId").prepend(
        "<option value='00' selected='selected'>Seleccione</option>");


}


/*function gestacion(id) {
    if (id == "yes") {
        $("#yes").show();
        $("#not").hide();


    } else if (id == "not") {
        $("#yes").hide();
        $("#not").show();


    }
}*/


document.getElementById('calcularIMC').addEventListener('click', function() {
    var peso = parseFloat(document.getElementById('peso').value);
    var talla = parseFloat(document.getElementById('talla').value);

    if (!isNaN(peso) && !isNaN(talla) && talla > 0) {
        var altura = talla / 100; // Convertir de cm a m
        var imc = peso / (altura * altura);

        // Mostrar el IMC calculado en el campo indicemasacorporal
        var imcField = document.getElementById('indicemasacorporal');
        imcField.value = imc.toFixed(2); // Redondear a 2 decimales

        // Determinar el mensaje y el color según el rango del IMC
        var mensaje = '';
        if (imc < 18.5) {
            mensaje = 'Peso insuficiente';
            imcField.style.color = 'red'; // Cambiar el color del texto a rojo
        } else if (imc >= 18.5 && imc <= 24.9) {
            mensaje = 'Peso normal o saludable';
            imcField.style.color = 'green'; // Cambiar el color del texto a verde
        } else if (imc >= 25.0 && imc <= 29.9) {
            mensaje = 'Sobrepeso';
            imcField.style.color = 'orange'; // Cambiar el color del texto a naranja
        } else {
            mensaje = 'Obesidad';
            imcField.style.color = 'red'; // Cambiar el color del texto a rojo
        }

        // Mostrar el mensaje en el elemento mensajeIMC
        var mensajeIMC = document.getElementById('mensajeIMC');
        mensajeIMC.textContent = mensaje;
    } else {
        alert('Por favor, ingrese valores válidos para peso y talla.');
    }
});
$(function() {
    $('#ayudaButton').popover();
});
</script>