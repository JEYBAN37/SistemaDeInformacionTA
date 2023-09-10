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

						<?php
						$idAux = $_GET['juventudadultos'];
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
								'style' => 'font-size: 12px',
							]);
							?>
                        </div-->

						<div class="form-group col-md-6">
							<h5><?php echo $this->Html->link(('Add Persona'), array('controller' => 'Personas', 'action' => 'add')); ?>
							</h5>
						</div>

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
					</div>
				</div>

			</div>

			<h2 class="titulo-general-pwa-govco col-md-6  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
				Valoracion de Salud</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('discapacidad', array(
								'label' => 'Posee alguan discapacidad',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('peso', array(
								'label' => 'Peso',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('talla', array(
								'label' => 'Talla',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'style' => 'font-size: 12px',

							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('indicemasacorporal', array(
								'label' => 'Indice de Masa Corporal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('tensionarterial', array(
								'label' => 'Tension arterial',
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
							echo $this->Form->input('condicioncronica1', array(
								'label' => 'Condicion Cronica ll',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('ancededenteginecologico', array(
								'label' => 'Amcemdeye ginecologico',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('esquemavacunacion', array(
								'label' => 'Esquema de Vacunacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('desparasitacion', array(
								'label' => 'Esquema de Vacunacion',
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
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('tomacitologia', array(
								'label' => 'tomacitologia',
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
								'label' => 'Higiene oral',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('iniciovidasexual', array(
								'label' => 'Inicio vida Sexual',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => 'Metodos Anticonceptivos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('infeccionestransmisionsexual', array(
								'label' => 'Infecciones de transmision Sexual',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa', array(
								'label' => 'Consume de sustancias psicoactivas',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa1', array(
								'label' => 'Consume de sustancias psicoactivas ll',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgopsicosocial', array(
								'label' => 'Riesgo Psicosocial',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgopsicosocial1', array(
								'label' => 'Riesgo Psicosocial ll',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('estudio', array(
								'label' => 'Estudio',
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
								'label' => 'Sospecha de Maltrato',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizacionuno', array(
								'label' => 'canalizacionuno',
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
								'label' => 'eduacion ll',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

					</div>

				</div>
			</div>


			<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>
	</fieldset>
</div>




<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
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