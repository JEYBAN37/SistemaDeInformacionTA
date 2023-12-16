<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<div>
	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Juventudadulto'); ?>
		<fieldset>


			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Juventud Adultos
				</h1>

			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">
						<?php echo $this->Form->input('id'); ?>

						<?php
						echo $this->Form->input('familia_id', [
							'label' => 'ID_Familia/N° Hogar/Nombres',
							'class' => 'form-control',
							'placeholder' => '',
							'style' => 'font-size: 12px',
							'type' => 'hidden'
						]);
						?>


						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('persona_id', [
								'label' => 'Docuemento/Nombre/Edad',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
								'disabled' => 'disabled'

							]);
							?>
						</div>
						<div class="form-group col-md-3">
							<label for="status">Seleccione el Sexo:</label>

							<select id="status" name="status" required onChange="mostrar(this.value);" required class="form-control" style="font-size: 12px;">
								<option value="">Elegir</option>
								<option value="no">Hombre</option>
								<option value="si">Mujer</option>
							</select>
							<p class="help-block"> Por favor realice la selección de la persona le permite mostar o
								ocultar preguntas de acuerdo al Sexo</p>
						</div>

					</div>
				</div>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-6  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
				Valoración de Salud</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							$optionYesNo = [

								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							$optionDiscapacidad = array(

								'No presenta' => 'No presenta',
								'Fisica' => 'Fisica',
								'Cognitiva' => 'Cognitiva',
								'Sensorial' => 'Sensorial'
							);
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
								'label' => 'Registre Peso en Kg.',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'id' => 'peso',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('talla', array(
								'label' => 'Registre talla en cm',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'id' => 'talla',
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<button class="btn btn-primary" id="calcularIMC">Calcular IMC</button>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('indicemasacorporal', array(
								'label' => 'Indice de mas corporal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'readonly' => 'readonly',
								'id' => 'indicemasacorporal',
							)); ?>

							<p id="mensajeIMC"></p>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('tensionarterial', array(
								'label' => 'Registre Tensión arterial 0/0',
								'class' => 'form-control tension-arterial-input',
								'style' => 'font-size: 12px',
								'placeholder' => ''

							)); ?>
							<p id="mensaje-tension-arterial"></p>
						</div>

						<div class="form-group col-md-6">
							<?php
							$optionCronica = array(

								'No' => 'No',
								'Hipertension' => 'Hipertensión',
								'Diabetes' => 'Diabetes',
								'Hipertiroidismo' => 'Hipertiroidismo',
								'Hiportiroidismo' => 'Hiportiroidismo',
								'Dislipidemia' => 'colesterol, triglicéridos elevados',
								'Neurologica' => 'Neurológica',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabolica' => 'Metabólica',
								'Endocrinologica' => 'Endocrinológica',
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
								'style' => 'font-size: 12px',
								'id' => 'condicioncronica',

							)); ?>
						</div>

						<div class="form-group col-md-6">
							<p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
								'No ' </p>
							<?php
							echo $this->Form->input('condicioncronica1', array(
								'label' => '¿Presenta alguna de las siguientes enfermedades crónicas?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica,
								'style' => 'font-size: 12px',
								'id' => 'condicioncronica1',


							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							$optionVacuna = array(

								'No' => 'No',
								'Toxoide tetanico' => 'Toxoide tétanico',
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
								'style' => 'font-size: 12px',
								'id' => 'esquemavacunacion'

							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('desparasitacion', array(
								'label' => '¿Se ha desparasitado en los últimos seis meses?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => ''
							)); ?> </div>

						<div class="form-group col-md-6">
							<?php
							$optionValoracionMedica = array(

								'Consulta Morbilidad' => 'Consulta de Morbilidad',
								'Consulta Cronicos' => 'Consulta de Crónicos',
								'Consulta PYP' => 'Consulta Promoción y prevención',
								'Consulta Urgencias' => 'Consulta Urgencias',
								'No asistido' => 'No asisitido',
								'No informa' => 'No informa',
								'SD' => 'Sin Dato',

							);
							echo $this->Form->input('valoracionmedica', array(
								'label' => '¿Ha asistido a Valoración Médica en el ultimo año?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'options' => $optionValoracionMedica,
							)); ?>
						</div>

						<!--div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('valoracionrias', array(
								'label' => 'valoracionrias',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('valoracionrias1', array(
								'label' => 'valoracionrias',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
                        </div-->



						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('saludoral', array(
								'label' => '¿Asistió a consulta de odontología en el último año?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => '',
								'id' => 'saludoral',
							)); ?>
						</div>
					</div>
				</div>
			</div>





			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Salud
				Sexual y Reproductiva</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">
						<div class="form-group col-md-6">

							<?php
							$optionVidaSexual = [

								'No' => 'No inicio vida sexual',
								'Consentido' => 'Si, Consentido',
								'No Consentido' => 'Si, No consentido',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('iniciovidasexual', array(
								'label' => '¿Usted ha iniciado su vida sexual?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionVidaSexual,
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							$optionAnticonceptivos = [

								'No' => 'No',
								'Sin pareja' => 'No tiene pareja en el momento',
								'Si control' => 'Si, con supervisión',
								'Si No control' => 'Si, sin supervisión',
								'Responsabilidad Pareja' => 'Deja la responsabilidad a la pareja',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => '¿Utiliza algún método de planificación familiar?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionAnticonceptivos,
								'placeholder' => '',
								'id' => 'metodosanticonceptivos'

							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('infeccionestransmisionsexual', array(
								'label' => '¿Le han diganosticado alguna Infección de transmición Sexual?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => '',
								'id' => 'infeccionestransmisionsexual'

							)); ?>
						</div>


					</div>
				</div>
			</div>



			<div id="si" class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Salud de la Mujer</h2>
					<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

					<div class="form-group row">
						<div class="form-group col-md-6">
							<?php
							$optionCitologia = [

								'No' => 'No',
								'Citologia VPH' => 'Si, Citología VPH',
								'Citologia convencional' => 'Si, Citología convencional',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',


							];
							echo $this->Form->input('tomacitologia', array(
								'label' => '¿Se ha realizado el examen citología de acuedo a esquema?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionCitologia,
								'placeholder' => '',
								'id' => 'tomacitologia'
							)); ?>
							<p class="help-block"> Esquema: Citología convencional esquema 1-3-3 edad 25 a 29 años y
								Citología VPH
								1-5-5 edad de 30 a 65 años, Esquemas ante resultado negativo</p>
						</div>

						<div class="form-group col-md-6">

							<?php
							$optionYesNo1 = [

								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];

							echo $this->Form->input('mamografia', array(
								'label' => 'Le han realizado Mamografía en 5 últimos años (Mujer de 50 y más años)',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionYesNo1,
								'placeholder' => ''
							)); ?>
						</div>


						<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Antecedentes
							ginecológicos/obsetétricos</h2>


						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('antecedenteginecologico', array(
								'label' => '¿Le han realizado alguna cirugia ginecológica?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionYesNo1,
								'placeholder' => ''
							)); ?>
							<p class="help-block"> Procedimientos en el sistema reproductivo, ovarios, útero, trompas de
								Falopio, cuello uterino </p>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionGinecologico = [

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
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionGinecologico,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
								'No ' </p>
							<?php
							echo $this->Form->input('ancedenteginecologico1', array(
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el embarazo? ',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionGinecologico,
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<label for="status">¿Mujer en embarazo?</label>

							<select id="status" name="status" required onChange="gestacion(this.value);" required class="form-control" style="font-size: 12px;">
								<option value="not">Elegir</option>
								<option value="not">No</option>
								<option value="yes">Si</option>
							</select>
							<p class="help-block"> Registre infomración de mujer en gestación o puerperio</p>
						</div>

					</div>

					<div id="yes" class="form-group row">
						<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Gestación</h2>

						<div class="form-group col-md-6">
							<?php
							$optionControlPrenatal = [

								'No inscrita' => 'No inscrita en control de embarazo',
								'Asistente CPN' => 'Si, Control al dia',
								'Inasistente CPN' => 'Si, inasistente a ultimo control',
								'Puerperio' => 'En etapa de puerperio',
								'No informa' => 'No sabe/No informa',
								'SD' => 'Sin dato',
							];
							echo $this->Form->input('controlprenatal', array(
								'label' => '¿Esta inscrita en control prenatal?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionControlPrenatal,
								'placeholder' => '',

							)); ?>

						</div>
						<div class="form-group col-md-6">
							<?php
							$optionRiesgoEmbarazo = [

								'Bajo' => 'Bajo',
								'Alto' => 'Alto',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',


							];
							echo $this->Form->input('riesgoembarazo', array(
								'label' => '¿El riesgo del embarazo es?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionRiesgoEmbarazo,
								'placeholder' => '',


							)); ?>

						</div>
						<div class="form-group col-md-6">
							<?php
							$optionAlarmaEmbarazo = [


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
								'label' => '¿En el momento presenta alguno de los siguientes signo o síntoma de alarma?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionAlarmaEmbarazo,
								'placeholder' => '',
								'id' => 'riesgoembarazo'

							)); ?>

						</div>

						<div class="form-group col-md-6">

							<?php
							$optionCursoVida = [

								'Juventud' => 'Juventud',
								'Adultez' => 'adultez',
							];

							echo $this->Form->input('cursovida', array(
								'label' => '¿El curso de vida de la gestante es?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionCursoVida,
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							$optionAlternativa = [

								'Medicina indigena' => 'Medicina Tradicional/indigena',
								'Homeopatía' => 'Homeopatía',
								'Medicina tradicional china' => 'Medicina tradicional china',
								'Acupuntura' => 'Acupuntura',
								'Quiropraxia' => 'Quiropraxia',
								'Otro' => 'Otro',
								'No refiere' => 'No refiere',
								'SD' => 'Sin dato'
							];
							echo $this->Form->input('saludalternativa', [
								'label' => '¿Hacen uso de otras opciones para el cuidado de su salud durante su embarazo?',
								'class' => 'form-control',
								'type' => 'select',
								'options' => $optionAlternativa,
								'style' => 'font-size: 12px',
							]);
							?>
						</div>


					</div>
				</div>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Riesgo
				Psicosocial</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							$optionConsumospa = [

								'No' => 'No',
								'Cigarrillo' => 'Cigarrillo',
								'Licor' => 'Licor',
								'Licor_cigarrillo' => 'Licor/Cigarrillo',
								'Sustancias Psicoactivas' => 'Marihuana, basuco, otras',
								'Uso indebido de Medicamentos' => 'Medicamentos sin presciprción medica(Opiodes,Depresores,Estimulantes)',
								'SD' => 'Sin dato',
								'No aplica' => 'No aplica',

							];

							echo $this->Form->input('consumospa', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionConsumospa,
								'placeholder' => '',
								'id' => 'consumospa'
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa1', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionConsumospa,
								'placeholder' => '',
								'id' => 'consumospa1'
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionConflictos = [

								'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
								'Conflictos entre hermanos' => 'Conflictos entre hermanos',
								'Conflictos entre Familia' => 'Conflictos entre Familia',
								'Violencias de género' => 'Violencias de género',
								'Problemas o Transtornos mentales diangnosticados' => 'Problemas o Transtornos mentales diangnosticados',
								'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
								'No' => 'No refiere',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('riesgopsicosocial', [
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
								'class' => 'form-control',
								'type' => 'select',
								'options' => $optionConflictos,

								'style' => 'font-size: 12px',
								'id' => 'riesgopsicosocial'
							]);
							?>
						</div>
						<div class="form-group col-md-6">
							<p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
								'No refiere' </p>
							<?php
							echo $this->Form->input('riesgopsicosocial1', array(
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionConflictos,
								'placeholder' => '',
								'id' => 'riesgopsicosocial1'
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionEstudio = [

								'Institucion educativa' => 'Institución educativa',
								'Educacion por ciclos' => 'Educación por ciclos',
								'Instituto tecnico' => 'Instituto técnico',
								'Centro Dia' => 'Centro Día',
								'Centro Vida' => 'Centro Vida',
								'SENA' => 'SENA',
								'Universidad' => 'Universidad',
								'No' => 'No estudia',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('estudio', array(
								'label' => '¿Asiste a una institución educativa o de cuidado?',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionEstudio,
								'type' => 'select',
								'style' => 'font-size: 12px',

							)); ?>
						</div>
						<!--div class="form-group col-md-6">
                                <?php
								$optionRendimientoEstudio = [

									'Alto' => 'Aprende y es dedicado en sus tareas',
									'Medio' => 'Se le dificulta comprender las tematicas ',
									'Bajo' => 'Tiene bajas notas y no hace tareas',
									'No informa' => 'No informa',
									'No aplica' => 'No aplica',
									'SD' => 'Sin dato'
								];
								echo $this->Form->input('rendimientoescolar', array(
									'label' => '¿Como es el rendiminento escolar?',
									'class' => 'form-control',
									'placeholder' => '',
									'type' => 'select',
									'options' => $optionRendimientoEstudio,
									'style' => 'font-size: 12px',
									'class' => 'form-control select-search'
								));
								?></div-->
						<div class="form-group col-md-6">
							<?php
							$optionTiposViolencia = [

								'No' => 'No se identifica',
								'Sospecha Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
								'Sospecha Violencia Emocional' => 'Persona retarida, timida o agresiva',
								'sospecha Violencia Sexual' => 'Tocamientos de personas, relaciones sexuales sin consentimiento ',
								'Sospecha Abondono_Negligencia' => 'Falta de atencion a necesidades básicas(alimentación, salud, educación)',
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
								'id' => 'sopechamaltrato'


							)); ?>
						</div>
					</div>
				</div>
			</div>
			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Plan de
				Atención integral</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							$optionCanlizacion = [
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
		<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>

</div>




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


	function agregarOpcionSeleccion() {


	}


	function gestacion(id) {
		if (id == "yes") {
			$("#yes").show();
			$("#not").hide();


		} else if (id == "not") {
			$("#yes").hide();
			$("#not").show();


		}
	}


	function mostrar(id) {
		if (id == "si") {
			$("#si").show();
			$("#no").hide();

		} else if (id == "no") {
			$("#si").hide();
			$("#no").hide();

		}
	}
</script>