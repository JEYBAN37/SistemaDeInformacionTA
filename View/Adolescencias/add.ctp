<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<div>

	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Adolescencia'); ?>
		<fieldset>

			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Adolescencia</h1>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">
						<?php
						$idAux = $_GET['adolescencias'];
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
								'style' => 'font-size: 12px',
							]);
							?>
							</div-->

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('persona_id', [
								'label' => 'Documento/Nombre/Edad',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',

							]);
							?>
						</div>

						<div class="form-group col-md-3">
							<label for="status">Seleccione el Sexo:</label>

							<select id="status" name="status" required onChange="mostrar(this.value);" required class="form-control" style="font-size: 12px;">
								<option value="">Elegir</option>
								<option value="no">Masculino</option>
								<option value="si">Femenino</option>
							</select>
							<p class="help-block"> Por favor realice la selección de la persona le permite mostar o
								ocultar preguntas de acuerdo al Sexo</p>
						</div>



						<div class="form-group col-md-3">
							<h5><?php echo $this->Html->link(('Agregar Persona'), array('controller' => 'Personas', 'action' => 'add', 'style' => 'color: blue; font-size: 16px; font-weight: bold')); ?>
							</h5>
							<p class="help-block"> Si la persona no aparece en la lista desplegables de personas ir a la
								opción "agregar personas"</p>
						</div>
					</div>
				</div>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Valoracion de Salud</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
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
								'label' => 'Indice de masa corporal',
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
							$optionVacuna = array(
								'' => 'Elegir',
								'Incompleto' => 'Esquema incompleto a su edad',
								'Completo' => 'Esquema al día a su edad con refuerzo adicionales',
								'No informa' => 'Desconoce la información/no presenta carnet de vacuanas',
								'SD' => 'Sin dato',

							);
							echo $this->Form->input('esquemavacunacion', array(
								'label' => '¿Le han aplicado las vacunas correspondientes a la edad? ',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionVacuna,
								'style' => 'font-size: 12px',

							)); ?>

						</div>
						<div class="form-group col-md-6">
							<?php
							$optionCronica = array(
								'' => 'Elegir',
								'No' => 'No',
								'Neurológica' => 'Neurológica',
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
								'' => 'Elegir',
								'Consulta Morbilidad' => 'Consulta de Morbilidad',
								'Consulta PYP' => 'Consulta Promoción y prevención',
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
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('saludoral', array(
								'label' => '¿Asistió a consulta de odontología en los últimos seis meses?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => ''
							)); ?>
						</div>
					</div>
				</div>
			</div>
			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Salud Sexual y Reproductiva</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">
						<div class="form-group col-md-6">

							<?php
							$optionVidaSexual = [
								'' =>  'Elegir',
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
								'' =>  'Elegir',
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
					<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

					<div class="form-group row">

						<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Antecedentes
							ginecológicos/obsetétricos</h2>


						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('antecedenteginecologico', array(
								'label' => '¿Le han realizado alguna cirugia ginecológica?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionYesNo,
								'placeholder' => ''
							)); ?>
							<p class="help-block"> Procedimientos en el sistema reproductivo, ovarios, útero, trompas de
								Falopio, cuello uterino </p>
						</div>
						<div class="form-group col-md-6">
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
								'No aplica ' =>  'Elegir',
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
								'No aplica ' =>  'Elegir',
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

								'Juventud' => 'Adolescencia',

							];

							echo $this->Form->input('cursovida', array(
								'label' => '¿El curso de vida de la gestante es?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'type' => 'select',
								'options' => $optionCursoVida,
								'placeholder' => '',


							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							$optionAlternativa = [
								'No aplica ' => 'Elegir',
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

				<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Riesgo Psicosocial</h2>
				<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

				<div class="grow justify-content-center" display="none" style="margin-top:20px">
					<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

						<div class="form-group row">

							<div class="form-group col-md-6">
								<?php
								$optionConsumospa = [
									'' =>  'Elegir',
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
									'' => 'Elegir',
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
								<p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la
									opción
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
									'' => 'Elegir',
									'Institucion educativa' => 'Institución educativa',
									'Educacion por ciclos' => 'Educacion por ciclos',
									'Instituto tecnico' => 'Instituto técnico',
									'SENA' => 'SENA',
									'Universidad' => 'Universidad',
									'No estudia' => 'No estudia',
									'Pronico' => 'Proinco',
									'ICBF' => 'ICBF',
									'Descercion escolar ' => 'Se retiro de estudiar',
									'No informa' => 'No informa',
									'Trabajo informal' => 'Trabajo informal',
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
							<div class="form-group col-md-6">
								<?php
								$optionRendimientoEstudio = [
									'' => 'Elegir',
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
									'id' => 'sopechamaltrato'


								)); ?>
							</div>
						</div>
					</div>
				</div>

				<h2 class="titulo-general-pwa-govco col-md-12  " style="color: e#3366CC; margin-left: 5px;margin-top: 20px; ">Plan de Atención integral</h2>
				<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

				<div class="grow justify-content-center" display="none" style="margin-top:20px">
					<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

						<div class="form-group row">


							<div class="form-group col-md-6">
								<?php
								$optionCanlizacion = [
									'' => 'Elegir',
									'Vacunacion ' => 'Vacunación ',
									'Atencion de PyM Medico' => 'Atención en salud de PyM por médico',
									'Atencion de PyM Enfermera' => 'Atención en salud de PyM por enfermeria',
									'Atencion medicina general' => ' Atención en salud por medicina general',
									'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
									'Atencion odontologia' => 'Atención en salud bucal',
									'Salud oral' => 'profilaxis y remoción de placa bacteriana y/o detartraje supragingival.',
									'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',
									'Prueba rapida treponemica' => 'Prueba rápida treponémica',
									'Prueba rapida para VIH' => 'Prueba rápida para VIH',
									'Asesoria pre y post test VIH' => 'Asesoría pre y post test VIH',
									'Prueba de embarazo' => 'Prueba de embarazo',
									'Asesoría en anticoncepcion' => 'Asesoría en anticoncepción por médico o enfermera',
									'Tamizaje de riesgo cardiovascular' => 'Tamizaje de riesgo cardiovascular',
									'Asesoria en anticoncepcion' => 'Asesoría en anticoncepción',

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
								echo $this->Form->input('educacionuno', array(
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
<!--div>

<?php echo $this->Html->link(('List Adolescencias'), array('action' => 'index')); ?>
<?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
<?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
<?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
<?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
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

		$("#AdolescenciaFamiliaId").prepend(
			"<option value='' selected='selected'>Seleccione</option>");
		$("#AdolescenciaPersonaId").prepend(
			"<option value='' selected='selected'>Seleccione</option>");
		$("#AdolescenciaCanalizacionId").prepend(
			"<option value='' selected='selected'>Seleccione</option>");


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
</script>