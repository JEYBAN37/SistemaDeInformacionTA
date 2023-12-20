<?php $this->layout = 'default_familia' ?>

<body style="font-size: 14px;">
	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Observacion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
		<fieldset>
			<div class="col-12 text-center">
				<h1 class="title-general-forms">Modulo de Observaciones
				</h1>
			</div>

			<h2 class="subtitle-general-forms">Detalles</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
					<div class="form-group row">


						<?php $idAux = $_GET['observaciones'];
						echo $this->Form->input('familia_id', array('value' => ''
							. $idAux, 'type' => 'hidden'));
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
							$canalizacion = [
								' ' => 'Elegir',
								'Institución educativa' => 'Institución educativa',
								'Bienestar social' => 'Bienestar social',
								'Otro' => 'Otro'
							];
							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalización a programa social',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $canalizacion,
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización a programa social',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $canalizacion,
							));
							?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('canalizaciontres', array(
								'label' => 'Canalización a programa social',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $canalizacion,
							));
							?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$estado = [
								'' => 'Elegir',
								'Se brinda orientación' => 'Se birnda orientación correpondiente',
								'Se consultará información' => 'Se consultará Infomación',
								'No aplica' => 'No aplica',
							];
							echo $this->Form->input('estado', array(
								'label' => 'Estado de canalizaciones',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $estado,
							));
							?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('fechaseguimiento', array(
								'label' => 'Fecha de seguimiento de canalizaciones',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'type' => 'hidden',
							));
							?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('responsable_id', array(
								'label' => 'Responsable de seguimiento',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('observacion', array(
								'label' => 'Observación general',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->
							<?php echo $this->Form->input('fechados', array(
								'label' => 'Fecha de visita : ',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'type' => 'hidden',
							));
							?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<p class="help-block">Adjuntar anexo ' NOTA: Cargar un archivo tipo imagen o en pdf
								extensión ".jpg, png" o
								".pdf" Nomenclatura de archivo: IdHogar_Apellidofamilia'</p>
							<?php
							echo $this->Form->input('familiograma', array(
								'label' => 'Familiograma',
								'type' => 'file',
								'onchange' => 'validarTamanioSoporte()',
								'class' => 'form-control',
								'style' => 'height:40px;  font-size: 15px ; width:100%',
							));
							echo $this->Form->input(
								'dirfamilograma',
								array(
									'type' => 'hidden',
									'class' => 'form-control',
									'style' => 'height:40px;  font-size: 15px ; width:100%',
								)
							);
							?>
						</div>


					</div>
				</div>
			</div>
		</fieldset>
		<button class="my-button">
			Guardar<?php echo $this->Form->end(); ?>
		</button>
	</div>
</body>

<div class="actions">
	<h3><?php echo ('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('List Observaciones'), array('action' => 'index')); ?></li>
	</ul>
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

	function agregarOpcionSeleccion() {
		$("#ObservacionResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
	}

	function validarTamanioSoporte() {
		var auxFile = document.getElementById('ActaAnexo');
		var sizeF = auxFile.files[0].size;
		if (sizeF > 3000000) {
			alert('El archivo debe ser menor a 3 Mb');
			auxFile.value = '';
		}
	}
</script>