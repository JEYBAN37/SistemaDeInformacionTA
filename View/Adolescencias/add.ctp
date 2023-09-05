<div>

	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Adolescencia'); ?>
		<fieldset>

			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Adolescencia</h1>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">


						<?php $idAux = $_GET['Adolecencias'];
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
							<?php echo $this->Form->input('persona_id', array(
								'label' => 'Docuemento/Nombre del Menor/Edad',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
							)); ?>
						</div>
					</div>
				</div>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Valoracion de Salud</h2>
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
								'label' => 'Indice de mas corporal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('tensionarterial', array(
								'label' => 'Registre Tensión arterial',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('esquemavacunacion', array(
								'label' => 'Esquema de vacunacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('condicioncronica', array(
								'label' => 'Condicion Cronica',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('desparasitacion', array(
								'label' => 'Desparasitacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('valoracionmedica', array(
								'label' => 'Valoracion Medica',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('saludoral', array(
								'label' => 'Salud Oral',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('higieneoral', array(
								'label' => 'Higiene Corporal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('iniciovidasexual', array(
								'label' => 'Inicio de vida Sexual',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => 'Metodo anticonceptivo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('infeccionestransmisionsexual', array(
								'label' => 'Infecciones de transmicion Sexual',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => 'Metodo anticonceptivo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => 'Metodo anticonceptivo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa', array(
								'label' => 'Consumo de sustancias Psicoactivas',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa1', array(
								'label' => 'Consumo de sustancias Psicoactivas ll',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgopsicosocial', array(
								'label' => 'riesgopsicosocial',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgopsicosocial1', array(
								'label' => 'riesgopsicosocial ll',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('estudio', array(
								'label' =>  'Estudios',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('rendimientoescolar', array(
								'label' => 'Rendimiento Escolar',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('sopechamaltrato', array(
								'label' => 'Riesgo de maltrato',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalizacion Uno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'canalizaciondos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('eduacionuno', array(
								'label' => 'eduacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('educaciondos', array(
								'label' => 'eduacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
					</div>
				</div>
			</div>

		</fieldset>
		<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>
</div>













<?php echo $this->Html->link(('List Adolescencias'), array('action' => 'index')); ?>
<?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
<?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
<?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
<?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>

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