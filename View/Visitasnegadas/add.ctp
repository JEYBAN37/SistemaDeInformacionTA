<?php $this->layout = 'default_familia' ?>


<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validationSocioAmbiental'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<body style="font-size: 14px;">


	<div>
		<?php echo $this->Form->create('Visitasnegada'); ?>
		<div class="form-group col-sm-12 center">

			<fieldset>

				<div class="col-12 text-center">
					<h1 class="title-general-forms">No Encuestadas 
					</h1>
				</div>




				<h2 class="subtitle-general-forms">Datos Básicos</h2>
				<hr style=" border:0.1px solid rgba(0,0,0,.125);">

				<div class="grow justify-content-center" display="none" style="margin-top:20px; ">
					<div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
						<div class="form-group row">

							<?php echo $this->Form->input('fecha', array(
								'type' => 'hidden',
							)); ?>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('responsable_id', array(
									'label' => 'Responsable diligenciamiento Encuesta',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'class' => 'select-search'
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('ubicacion_id', array(
									'label' => 'Territorio',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'class' => 'select-search col-md-12'
								)); ?>

								<p class="help-block">Los dos últimos codigos del hacen referencia al numero de la torre
								</p>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								echo $this->Form->input('direccion', array(
									'label' => 'Num. Apartamento',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('direccion', array(
									'label' => 'Dirección',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('nombreshabitante', array(
									'label' => 'Nombre de la Persona Presente',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
							</div>

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
								<?php echo $this->Form->input('numerodocumento', [
									'label' => 'N° de documento',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								echo $this->Form->input('telefono', array(
									'label' => 'telefono de contacto:',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
							
								));
								?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$EstateHome = array(
								'' => 'Elegir',
								'cerrada' => 'Cerrada',
								'vacia' => 'Vacia',
								'no acepto ficha' => 'No acepto ficha',
								'renuente' => 'Renuente',

							);
								echo $this->Form->input('estadocasa', array(
									'label' => 'Estado de la Casa',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
									'options' => $EstateHome,
								));
								?>
							</div>

							<div class="form-group col-md-12" style="margin-top: 20px;">
								<?php
								$numhogaresOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
								echo $this->Form->input('observacion', array(
									'label' => 'Motivo de la cancelacion de la Ficha',
									'class' => 'form-control',
									'style' => 'height:90px; font-size: 15px; ',
								));
								?>
								<p class="help-block">Si todos comen de la misma olla se considera una sola
									familia/hogar</p>
							</div>
						</div>
					</div>
					<?php //echo $this->Form->end(__('Guardar y Listar')); 
				?>
				<?php echo $this->Form->submit('Guardar', [
					'name' => 'btn',
					'class' => 'my-button',
				]); 
				?>
				</div>
			</fieldset>
			
		</div>
	</div>

</body>
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
		$("#SociambientalUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
		$("#SociambientalResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
	}

	$("#switch-label").change(function() {
		var switchValue = this.checked ? "si" : "no";
		mostrar(switchValue);
	});

	$("#switch-label-initial").change(function() {
		var switchValue = this.checked ? "yes" : "nope";
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

		if (id == "yes") {
			$("#yes").show();
			$("#nope").hide();
			$("#validacion").val("si acepto");

		} else if (id == "nope") {
			$("#yes").hide();
			$("#nope").show();
			$("#validacion").val(" ");

		}
	}
</script>








