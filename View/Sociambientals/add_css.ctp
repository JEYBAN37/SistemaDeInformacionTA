
<div class="container">
  <div >
    <div class="card-header bg-info text-center">
      <h5 style="color:white">FICHA FAMILIAR</h5>
    </div>
    <div class="card-body  border border-info">
      <form class="text-center">
        <div class="form-group row justify-content-center">
		<div class="form-group row, card-body  border border-info">


				<div class="form-group col-lg-12" >	


						<?php echo $this->Form->create('Sociambiental'); ?>
							<fieldset>
								<legend><?php echo __('Modulo Socioambiental'); ?></legend>

					
								<div class="form-group col-md-3">
									
									
									<?php
									$option = array(
										'label' => 'Fecha registro: ',
										'dateFormat' => 'DMY',
										'minYear' => date('Y') - 0,
										'maxYear' => date('Y') + 0,
										'empty' => array(
											'day' => 'Día',
											'month' => 'Mes',
											'year' => 'Año',
											'class' => 'form-control', 'class' => 'form-control select-search'
										)
									);
									
									echo $this->Form->input('fecha', $option);?></div>
									
									<div class="form-group col-md-3"><?php
								echo $this->Form->input('responsable_id',array('label' => 'Responsable diligenciamiento Encuesta','class' => 'form-control','type' => 'select','class' => 'form-control select-search'));?></div>
									
									
										<div class="form-group col-md-3"><?php 
										echo $this->Form->input('ubicacion_id',array('label' => 'Territorio','class' => 'form-control','type' => 'select', 'class' => 'form-control select-search'));
								?></div>
									<div class="col-md-3"><?php
										echo $this->Form->input('direccion',array('label' => 'Dirección','class' => 'form-control', 'class' => 'form-control select-search'));
						?></div> 
									

							
						
						
							<div class="col-md-6"><?php
								$option = array('' => 'Elegir', '1' => '1', '2' => '2');
								echo $this->Form->input('estrato', array('class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
								echo $this->Form->input('numerohabitantes', array('label' => 'No. Habitantes en la residencia','class' => 'form-control', 'placeholder'=>""));
						?></div>
							<div class="col-md-6">
							
								<?php
							echo $this->Form->input('numerohogares', array('label' => 'No. Hogares en la residencia','class' => 'form-control', 'placeholder'=>"")); 
						?><p class="help-block">'El hogar xxxxxx'</p> </div>
				
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Bloque,cemento,ladrillo' => 'Bloque,cemento,ladrillo');
							echo $this->Form->input('pared', array('label'=>'¿Cuál es el material predominante de las paredes?', 'options' => $option,'class' => 'form-control', 'placeholder'=>"")); 
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Buen estado' => 'Buen estado', 'Descascaramiento, humedad' => 'Descascaramiento, humedad');
							echo $this->Form->input('estadoparedes',array('label' => '¿El estado de las paredes es?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Cemento, gravilla' => 'Cemento, gravilla', 'Ceramica' => 'Ceramica', 'Piso flotante'=>'piso flotante');
							echo $this->Form->input('piso',array('label' => 'Cuál es el material predominante del piso de la vivienda','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', ' Concreto' => ' Concreto', 'Eternit' => 'Eternit');
							echo $this->Form->input('techo',array('label' => 'Cuál es el material predominante del techo','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Buen estado' => 'Buen estado', 'Agrietamiento, goteras o fisuras' => 'Agrietamiento, goteras o fisuras');
							echo $this->Form->input('estadotecho',array('label' => '¿Cuál es el estado en general del techo?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4','5' => '5');
							echo $this->Form->input('hacinamiento',array('label' => 'Cuantas personas duermen por habitación','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Malos olores' => 'Malos olores', 'Ratones, cucarachas' => 'Ratones, cucarachas','No se identifica' => 'No se identifica');
							echo $this->Form->input('riesgoexterno',array('label' => 'Identifique en el entorno hay','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', '1' => '1', '2' => '2');
							echo $this->Form->input('otroriesgo',array('label' => 'Otro riesgo interno o externo','class' => 'form-control'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No');
							echo $this->Form->input('actividad',array('label' => 'Actividad economica','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Transporte' => 'Transporte', 'Espacios deportivos' => 'Espacios deportivos','Servicios Educativos'=>'Servicios Educativos','Servicios Salud'=>'Servicios Salud','Ninguno'=>'Ninguno');
							echo $this->Form->input('acceso',array('label' => 'En su sector es dificil acceder fácilmente a: ','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
						<div class="col-md-6"><?php			 
						echo $this->Form->input('apellidosfamilia',array('label' => 'Apellidos de la familia','class' => 'form-control', 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Moto' => 'Moto', 'Carro' => 'Carro', 'Bus' => 'Bus','bicicleta'=>'Bicicleta','Caminar'=>'Caminar');
						echo $this->Form->input('transporte',array('label' => 'Medio de tranporte predominante','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Objetos cortantes ' => 'Objetos cortantes ', 'Sustancias qimicas_aseo a la vista' => 'Sustancias quimicas_aseo a la vista', 'Medicamentos a la vista' => 'Medicamentos a la vista','Uso de Velas'=>'Uso de Velas','Conexiones Electricas inadecuadas'=>'Conexiones Electricas inadecuadas','Ninguno'=>'Ninguno');
						echo $this->Form->input('riesgo',array('label' => 'Se identifican algunos riesgo de accidente en la vivienda','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							
						echo $this->Form->input('otroriesgohogar',array('label' => 'Otro riesgo adicional','class' => 'form-control', 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Empopasto' => 'Empopasto', 'Acueducto Comunitario' => 'Acueducto Comunitario','Agua enbasada'=>'Agua enbasada');
						echo $this->Form->input('aguaservicio',array('label' => 'Principal fuente de abastecimiento de agua para consumo','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Directamente del grifo' => 'Directamente del grifo', 'Hirve' => 'Hierve','Filta'=>'Filtra','Ozonifica'=>'Ozonifica', 'Desinfección con cloro'=>'Desinfección con cloro ');
						echo $this->Form->input('aguatratamiento',array('label' => 'Realiza algun tratamiento al agua para el consumo','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Premanentemente' => 'Premanentemente', 'Intermitente' => 'Interminente', 'Razonamientos prolongados'=>'Razonamientos prolongados');
						echo $this->Form->input('aguasiministro',array('label' => '¿Cuenta con suministro de agua?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'No tiene tanque' => 'No tiene tanque', 'Mensual' => 'Mensual', 'Semestral' => 'Semestral', 'No realiza lavado' => 'No realiza lavado');
						echo $this->Form->input('aguaalmacenamiento',array('label' => 'lavado del tanque de almacenamiento de agua','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', 'Sanitario' => 'Sanitario conectado al alcantarillado', 'Campo abierto' => 'Campo abierto','Basenilla,bolsas'=>'Basenilla,Bolsas');
						echo $this->Form->input('diposicionexcretas',array('label' => 'Disposición de excretas en la vivienda','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
								<div class="col-md-6"><?php
								$option = array('' => 'Elegir', 'Conexión alacantarillado' => 'Conexión alcantarillado', 'Campo abierto ' => 'Campo Abierto');
						echo $this->Form->input('aguaresiduales',array('label' => 'Aguas residuales domensticas','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
								<div class="col-md-6"><?php
								$option = array('' => 'Elegir', 'Recolección por Emas' => 'Recolección por Emas', 'Disposición a campo abierto' => 'Disposición a campo abierto');
						echo $this->Form->input('basura',array('label' => ' Disposición final de basura','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
								<div class="col-md-6"><?php
								$option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No','ocasionalmente'=>'Ocasionalmente');
						echo $this->Form->input('reciclaje',array('label' => '¿Se realiza el proceso de separación de los residuos en la fuente?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							
							<div class="col-md-6"><?php
							$option = array('' => 'Elegir', '1' => '1', '2' => '2');
						echo $this->Form->input('mascotas',array('label' => '','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
						<div class="col-md-6"><?php
						$option = array('' => 'Elegir', '1' => '1', '2' => '2');
							echo $this->Form->input('otramascota',array('label' => '','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
						<div class="col-md-6"><?php
						$option = array('' => 'Elegir', '1' => '1', '2' => '2');
							echo $this->Form->input('desparasitamascotas',array('label' => '','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
						<div class="col-md-6"><?php
						$option = array('' => 'Elegir', '1' => '1', '2' => '2');
							echo $this->Form->input('vacunamascotas',array('label' => '','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
						<div class="col-md-6"><?php
						$option = array('' => 'Elegir', '1' => '1', '2' => '2');
							echo $this->Form->input('cuidadomascotas',array('label' => '','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
						<div class="col-md-6"><?php
						$option = array('' => 'Elegir', '1' => '1', '2' => '2');
						echo $this->Form->input('vector',array('label' => '','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?></div>
							</fieldset>

				</div>	

				</div>
          </div>
        </div>
        <div>
		  <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-outline-info btn-rounded btn-block waves-effect z-depth-0')); ?>
        
        </div>
      </form>
    </div>
  </div>
</div>



<div class="actions">
	<h3><?php echo __('Actions',array('label' => 'No. Habitantes en la residencia','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search')); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sociambientals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>




	
