<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<div>
	<div class="form-group col-sm-12">

		<?php echo $this->Form->create('Infantil'); ?>

		<fieldset>

			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Infancia 6 a 11
					años</h1>

			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Plan de
				Atención integral</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">
						<div class="form-group col-md-6">
							<?php
							$optionCanlizacion = [
								'' => 'Elegir',
								'No' => 'No',
								'Vacunacion ' => 'Vacunación ',
								'Atencion de PyM Medico' => 'Atención en salud de PyM por médico',
								'Atencion de PyM Enfermera' => 'Atención en salud de PyM por enfermeria',
								'Atencion medicina general' => ' Atención en salud por medicina general',
								'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
								'Atencion odontologia' => 'Atención en salud bucal',
								'Salud oral' => 'profilaxis y remoción de placa bacteriana y/o detartraje supragingival.',
								'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',

							];

							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',

								'readonly' => true, // Hace que el campo de edad sea de solo lectura




							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',

								'readonly' => true, // Hace que el campo de edad sea de solo lectura


							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('canalizaciontres', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura



							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('educacionuno', array(
								'label' => 'Sugerencia de educación en el marco de la RIA ',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura


							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizacion_id', array(
								'label' => 'Enlace de canalizacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',

								'placeholder' => '',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionYesNo = [
								'' => 'Elegir',
								'Si' => 'Si',
								'No' => 'No',
								'Parcialmente' => 'Parcialmente',
								'En Tramite' => 'En Tramite',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('reporte', array(
								'label' => 'Se realizó la canalización efectiva a servicios de salud',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options'  => $optionYesNo,
								'type' => 'select',
								'placeholder' => '',

							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionCanlizacion = [
								'' => 'Elegir',
								'No' => 'No',
								'Vacunacion ' => 'Vacunación ',
								'Atencion de PyM Medico' => 'Atención en salud de PyM por médico',
								'Atencion de PyM Enfermera' => 'Atención en salud de PyM por enfermeria',
								'Atencion medicina general' => ' Atención en salud por medicina general',
								'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
								'Atencion odontologia' => 'Atención en salud bucal',
								'Salud oral' => 'profilaxis y remoción de placa bacteriana y/o detartraje supragingival.',
								'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',

							];

							echo $this->Form->input('atencion', array(
								'label' => 'Atención o servicio ofrecido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',

								'options' => $optionCanlizacion,
								'type' => 'select',



							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('atenciondos', array(
								'label' => 'Atención o servicio ofrecido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',

								'options' => $optionCanlizacion,
								'type' => 'select',

							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('atenciontres', array(
								'label' => 'Atención o servicio ofrecido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'options' => $optionCanlizacion,
								'type' => 'select',


							)); ?>
						</div>


						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('obseracion', array(
								'label' => 'Observaciones del proceso de canlización',
								'class' => 'form-control',
								'style' => 'font-size: 12px',


								'placeholder' => '',

							)); ?>
						</div>

						<?php
						echo $this->Form->input('fechaRegistro', array(

							'type' => 'hiden',
						)); ?>
					</div>
				</div>

			</div>


			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">


						<?php echo $this->Form->input('id');



						?>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',


								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);
							?>
						</div>


						<div class="form-group col-md-6">
							<?php
							$TipoDeDocumentoOptions = array(
								'' => 'Elegir',
								'RC' => 'Registro Civil',
								'TI' => 'Tarjeta de identidad',
								'PPT' => 'Permiso Protección Temporal',

							);
							echo $this->Form->input('tipodocumento', array(
								'label' => 'Tipo de Documento:',
								'class' => 'form-control',
								'style' => 'font-size: 12px;',
								'placeholder' => '',


								'type' => 'hiden',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php echo $this->Form->input('numerodoc', [
								'label' => 'N° de documento',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<?php echo $this->Form->input('primerapellido', [
								'label' => 'Primer Apellido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<?php echo $this->Form->input('segundoapellido', [
								'label' => 'Segundo Apellido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<?php echo $this->Form->input('primernombre', [
								'label' => 'Primer Nombre',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<?php echo $this->Form->input('segundonombre', [
								'label' => 'Segundo Nombre',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<!-- Campo de fecha de nacimiento -->
							<?php echo $this->Form->input('fechanac', [
								'label' => 'Fecha de nacimiento:',
								'type' => 'disamble',

								'style' => 'font-size: 16px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;',
								'type' => 'hiden',

							]); ?>
						</div>

						<div class="form-group col-md-6">
							<!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
							<?php echo $this->Form->input('edad', [
								'label' => 'Edad en meses',
								'style' => 'font-size: 16px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;',

								'readonly' => true, // Hace que el campo de edad sea de solo lectura
								'type' => 'number',
								'class' => 'form-control',



							]); ?>
						</div>

						<div class="form-group col-md-6">
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

								'options' => $generoOption,

								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]); ?>
						</div>

						<div class="form-group col-md-6">
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
								'PROINSALUD' => 'PRONISALUD',
								'Fondo UNDENAR' => 'Fondo UDENAR',
								'Medicina Prepagada' => 'Medicina Prepagada',
								'Sin afiliacion' => 'Sin afiliación',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('aseguradora', [
								'label' => 'Aseguradora',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							$regimenOption = [
								' ' => 'Elegir',
								'Subsidiado' => 'Subsidiado',
								'Contributivo' => 'Contributivo',
								'Regimen especial' => 'Regimen especial',
								'Regimen exepcion' => 'Regimen exepción',
								'Particular' => 'Particular',
								'SD' => 'Sin dato',


							];
							echo $this->Form->input('regimen', [
								'label' => 'Regimen',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $regimenOption,
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
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
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>



						<div class="form-group col-md-6">
							<?php echo $this->Form->input('telefono', [
								'label' => 'Telefono',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
						</div>

						<div class="form-group col-md-6">
							<?php echo $this->Form->input('email', [
								'label' => 'Email',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
							]);  ?>
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






	}
</script>