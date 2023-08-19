<div  class="form-group row">
	<div class="form-group col-lg-8">
		<?php echo $this->Form->create('Primerainfancia'); ?>
			<fieldset>

			<legend class="card-header  text-left">
				<?php echo __('Modulo Primera infancia 0 a 5 años 11 meses 29 días'); ?>
			</legend>

			<div class="card">
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Datos personales</h5>
				</div></br>

						
				<div class="form-group col-md-6"><?php echo $this->Form->input('familia_id', array('label'=>'ID_Familia/N° Hogar/Nombres','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-6"><?php echo $this->Form->input('persona_id', array('label'=>'Docuemento/Nombre del Menor/Edad','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Valoración de salud</h5>
				</div></br>
				<div class="form-group col-md-4"><?php 
				$option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No');
				echo $this->Form->input('prematuro', array('label'=>'El menor nacio prematuro','class' => 'form-control', 'placeholder'=>"", 'type' => 'select','options' => $option, 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php 
				$option = array('' => 'Elegir', 'No presenta' => 'No presenta', 'Fisica' => 'Fisica', 'Cognitiva' => 'Cognitiva','Sensorial'=>'Sensorial');
				echo $this->Form->input('discapacidad', array('label'=>'Presenta alguna de las sigientes discapacidades','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('peso', array('label'=>'Registre su Peso en Kg.','class' => 'form-control', 'placeholder'=>"",  ));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('talla', array('label'=>'Registre su talla en cm','class' => 'form-control', 'placeholder'=>"",  ));?></div>
				<div class="form-group col-md-4"><?php 
				$option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No');
				echo $this->Form->input('bajopeso', array('label'=>'Antecedente de bajo peso al nacer','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $option,'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('perímetrocefalico', array('label'=>'Registre su perimetro cefalico en cm','class' => 'form-control', 'placeholder'=>""));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('perímetrobraquial', array('label'=>'Registre su perimetro bronquial','class' => 'form-control', 'placeholder'=>""));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('perimetrocintura', array('label'=>'Registre perimetro cintura','class' => 'form-control', 'placeholder'=>""));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('perimetrocadera', array('label'=>'Registre perimetro cadera','class' => 'form-control', 'placeholder'=>""));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('tensionarterial', array('label'=>'Regristre Tension arterial','class' => 'form-control', 'placeholder'=>""));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('lactanciamaterna', array('label'=>'Mantiene lactancia exclusiva','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('condicioncronica', array('label'=>'Presenta una enfermedad cronica','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('anomaliacongenita', array('label'=>'Presenta una anomalia congenita','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Atención en salud</h5>
				</div></br>
				<div class="form-group col-md-4"><?php echo $this->Form->input('esquemavacunacion', array('label'=>'Esquema de vacunacion al dia para su edad','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('desparasitacion', array('label'=>'Desparasitado en los ultimos seis meses','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('crecimientoydesarrollo', array('label'=>'Asistie a control de Crecimiento y desarollo','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('desnutricion', array('label'=>'Informa sobre diagnostico de desnutricion','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('higieneoral', array('label'=>'Asistio a consulta de odontolgia en los ultimos seis meses','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('desarrolloinfantil', array('label'=>'Informa sobre alguna dificultad del desarrollo','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Condiciones de vulnerabilidad</h5>
				</div></br>
				<div class="form-group col-md-4"><?php echo $this->Form->input('eda', array('label'=>'En momento presenta algun signo EDA','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('era', array('label'=>'El momento presenta algun signo de IRA','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('cuidador', array('label'=>'El cuidado de menor esta a cargo principalmente de','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('saludalternativa', array('label'=>'La familia refiere el uso de medicina alternativa o ancestral','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('padresconsumo', array('label'=>'Hijo de padres (especialmente la madre) con consumo de sustancias psicoactivas','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('sospechaviolencia', array('label'=>'Indicios de menor víctima de vulneración o violencia','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('cudadorpermanente', array('label'=>'El cuidado de menor esta a cargo principalmente de','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Plan de Atención integral</h5>
				</div></br>
				<div class="form-group col-md-4"><?php echo $this->Form->input('canalizacionuno', array('label'=>'Se canaliza a ','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('canalizaciondos', array('label'=>'Se canaliza a','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('eduacionuno', array('label'=>'Se requiere plan de atención en','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
				<div class="form-group col-md-4"><?php echo $this->Form->input('educaciondos', array('label'=>'Se requiere plan de atención en','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?></div>
			
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li> <?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li> <?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>