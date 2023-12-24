<?php $this->layout = 'default_familia' ?>


<body style="font-size: 14px;">
	<div>
		<?php echo $this->Form->create('Primerainfancia'); ?>
		<div class="form-group col-sm-12">

			<fieldset>
				<div class="col-12 text-center">
					<h1 class="title-general-forms">Reporte Canalización menor de cinco años
					</h1>
				</div>
				<h2 class="subtitle-general-forms ">Datos Personales</h2>
				<hr style=" border:0.1px solid rgba(0,0,0,.125);">

				<div class="grow justify-content-center" display="none" style="margin-top:20px">
					<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">


						<div class="form-group row">


							<?php echo $this->Form->input('id'); ?>



							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php

								echo $this->Form->input('tipodocumento', array(
									'label' => 'Tipo de Documento:',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => '',
									'readOnly',

								));
								?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('numerodoc', [
									'label' => 'N° de documento',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'readOnly',
								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('primerapellido', [
									'label' => 'Primer Apellido',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'readOnly',
								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('segundoapellido', [
									'label' => 'Segundo Apellido',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'readOnly',
								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('primernombre', [
									'label' => 'Primer Nombre',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'readOnly',

								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('segundonombre', [
									'label' => 'Segundo Nombre',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'readOnly',
								]);  ?>
							</div>



							<div class="form-group col-md-6" style="margin-top: 20px;">
								<!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
								<?php echo $this->Form->input('edad', [
									'label' => 'Edad en meses',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'id' => 'edad', // Agrega este identificador al campo de edad
									'readonly' => true, // Hace que el campo de edad sea de solo lectura
									'type' => 'number',



								]); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php

								echo $this->Form->input('sexo', [
									'label' => 'Sexo',
									'class' => 'form-control',
									'placeholder' => '',

									'readOnly',

									'style' => 'height:30px;  font-size: 15px ; width:100%',
								]); ?>
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
									'PROINSALUD' => 'PRONISALUD',
									'Fondo UNDENAR' => 'Fondo UDENAR',
									'Medicina Prepagada' => 'Medicina Prepagada',
									'Sin afiliacion' => 'Sin afiliación',
									'SD' => 'Sin dato',

								];
								echo $this->Form->input('aseguradora', [
									'label' => 'Aseguradora',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'options' => $aseguradoraOption,
								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
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
						</div>
					</div>

				</div>



				<h2 class="subtitle-general-forms">
					Reporte</h2>
				<hr style=" border:0.1px solid rgba(0,0,0,.125);">

				<div class="grow justify-content-center" display="none" style="margin-top:20px">
					<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">


						<div class="form-group row">

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionEstado = [
									'' => 'Elegir',
									'Canalización Efectiva' => 'Canalización Efectiva',
									'Canalización en proceso' => 'Canalización en proceso',
									'Canalización Pendiente' => 'Canalización Pendiente',
									'Canalización No efectiva' => 'Canalización No efectiva',

								];
								echo $this->Form->input('estadocanalizacion', array(
									'label' => 'Estado de la canalización',
									'class' => 'form-control',
									'placeholder' => '',
									'type' => 'select',
									'options' => $optionEstado,
									'style' => 'height:30px;  font-size: 15px ; width:100%',

								));
								?>
							</div>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								echo $this->Form->input('observacioncanalizacion', array(
									'label' => 'Observación Canalización',
									'style' => 'height:30px;  font-size: 15px ; width:100%',

									'placeholder' => '',


								)); ?>
							</div>

							<?php
							echo $this->Form->input('registroCanalizacion', array(

								'readOnly',
							)); ?>

						</div>




					</div>

				</div>
		</div>


		</fieldset>
		<button class="my-button">
			Guardar<?php echo $this->Form->end(); ?>
		</button>
	</div>

	</div>
</body>

<!--div class="actions">
    <?php echo ('Actions'); ?>



    <ul>

        <li>
            <?php echo $this->Html->link(('List Primerainfancias'), array('action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
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


		$("#PrimerainfanciaCanalizacionId").prepend(
			"<option value='' selected='selected'>Seleccione</option>");
	}

	$(function() {
		$('#ayudaButton').popover();
	});

	$("#switch-label").change(function() {
		var switchValue = this.checked ? "si" : "no";
		mostrar(switchValue);
	});


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