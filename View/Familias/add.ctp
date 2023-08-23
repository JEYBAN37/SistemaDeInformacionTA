<div class="form-group row">

	<div class="form-group col-lg-8">


		<?php echo $this->Form->create('Familia'); ?>


		<fieldset>
			<legend class="card-header  text-left">
				<?php echo __('Modulo Familia'); ?>
			</legend>

			<div class="card">
			<div class="card-header bg-info text-left">
					<h5 style="color:white">Datos de persona que atiende</h5>
				</div></br>
				<div class="form-group col-md-4">
					<?php echo $this->Form->input('nombres', array('label'=>'Nombres','class' => 'form-control', 'placeholder'=>""));
				  ?>
				</div></br>
				<div class="form-group col-md-4">
					<?php echo $this->Form->input('apellidos', array('label'=>'Apellidos','class' => 'form-control', 'placeholder'=>""));?>
					
					</div>
				<div class="form-group col-md-4">
					
					<?php 
					$generoOption = array(' '=>'Elegir','Hombre'=>'Hombre','Mujer'=>'Mujer','Otro'=>'Otro');
					echo $this->Form->input('genero', array('label'=>'Genero','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $generoOption, 'class' => 'form-control select-search')); ?>
				</div>
				<div class="form-group col-md-4">
					<?php 
					$rolOption = array(' '=>'Elegir','Padre'=>'Padre','Madre '=>'Madre','Hijo_a '=>'Hijo/Hija','Abuelo_a '=>'Abuelo_Abuela','Otro familiar'=>'Otro familiar');
					echo $this->Form->input('rol', array('label'=>'Quien atiende la visita es','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $rolOption, 'class' => 'form-control select-search')); ?>
				</div>
				<div class="form-group col-md-4">
					<?php echo $this->Form->input('celular', array('label'=>'Número celular de contacto','class' => 'form-control', 'placeholder'=>""));?>
				</div>
				<div class="form-group col-md-4">
					<?php echo $this->Form->input('correo', array('label'=>'Correo electrónico','class' => 'form-control', 'placeholder'=>""));?>
				</div>

				<div class="card-header bg-info text-left">
					<h5 style="color:white">Vivienda</h5>
				</div></br>
				<div class="form-group col-md-4">
					<?php echo $this->Form->input('sociambiental_id', array('label'=>'Familia','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'class' => 'form-control select-search'));?>
				</div>

				<div class="form-group col-md-4">
					<?php
					    $option = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
						echo $this->Form->input('hogar', array('label'=>'Numero de hogar','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search')); 
					?>
				</div>
				

				<div class="card-header bg-info text-left">
					<h5 style="color:white"></h5>
				</div></br>

				<div class="form-group col-md-4">
					<?php
					    	$viviendaOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
						echo $this->Form->input('vivienda', array('label'=>'¿Su nucleo familiar vive en:?','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $viviendaOptions, 'class' => 'form-control select-search')); 
					?>
				</div>


				<div class="col-md-4">
					<?php
				         $option = array('' => 'Elegir', 'Propia pagando' => 'Propia pagando', 'Propia paganda' => 'Propia paganda','Anticres' => 'Anticres','Arriendo' => 'Arriendo','Subarriendo' => 'Subarriendo','Prestada' => 'Prestada sin costo',);
						echo $this->Form->input('tenencia', array('label'=>'¿Tenencia de la Vivienda es?','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search')); 
			         ?>
				</div>
				
				<div class="col-md-4">
					<?php
				 $option = array('' => 'Elegir', 'Electricidad' => 'Electricidad', 'Cilndro de Gas' => 'Cilndro de Gas','Gas domiciliario' => 'Gas domiciliario','Gas domiciliario' => 'Gas domiciliario','Carbon,leña'=>'Carbon,leña','Gasolina'=>'Gasolina');
			echo $this->Form->input('combustible',array('label' => '¿Cuál fuente de energía o combustible que se usa para cocinar?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
				 $option = array('' => 'Elegir', 'Electricidad' => 'Electricidad', 'Cilndro de Gas' => 'Cilndro de Gas','Gas domiciliario' => 'Gas domiciliario','Gas domiciliario' => 'Gas domiciliario','Carbon,leña'=>'Carbon,leña','Gasolina'=>'Gasolina');
			echo $this->Form->input('otrocombustible',array('label' => 'Registre otra fuente de combustible si requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
			</br>
				

				<div class="card-header bg-info text-left">
					<h5 style="color:white">Composición Familiar</h5>
					</div></br>
					<div class="card">
				

				<div class="col-md-4">
					<?php
					    $option = array('' => 'Elegir', 'Unipersonal' => 'Unipersonal', 'Nuclear' => 'Nuclear', 'Nuclear monoparental' => 'Nuclear monoparental', 'Nuclear unipersonal por adulto mayor' => 'Nuclear unipersonal por adulto mayor','Extensa'=>'Extensa','Mixta o ampliada'=>'Mixta o ampliada');			 
						echo $this->Form->input('tipofamilia',array('label' => '¿Como esta compuesta la familia?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?>
				</div>
				<div class="col-md-4">
					<?php	
					    $option = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7' ,'8' => '8' ,'9' => '9', '10' => 'Mas de 10');		 
						echo $this->Form->input('numeropersonas',array('label' => '¿De cuantas personas esta compuesta la familia?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?>
				</div>
				<div class="col-md-4">
					<?php	
					    $option = array('' => 'Elegir', 'Indígena' => 'Indígena', 'Negritudes' => 'Negritudes', 'Víctima conflicto' => 'Víctima del conflicto', 'Discapacidad' => 'Discapacidad','Otro' => 'Otro', 'No aplica' => 'No aplica','Sin Dato'=>'Sin Dato');		 
						echo $this->Form->input('poblacionvulnerable',array('label' => '¿Hay personas dentro de la familia que pertencen a población:?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
						?>
				</div>
				<div class="col-md-4">
					<?php	
					    
						echo $this->Form->input('poblacionvulnerable1',array('label' => 'Registre otra población con la cual se identifique si es necesario','class' => 'form-control', 'class' => 'form-control select-search'));
						?>
				</div>
				<div class="col-md-4">
					<?php
					 $option = array('' => 'Elegir', 'Formación' => 'Formación', 'Expansión' => 'Expansión', 'Consolidación' => 'Consolidación', 'Apertura' => 'Apertura','Nido vacío'=>'Nido vacío','Disolución'=>'Disolución');	
					echo $this->Form->input('cursovidafamilia', array('label' => 'Curso de vida familia','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			     ?>
				</div>
				<div class="col-md-4">
					<?php
					 $option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No');
					echo $this->Form->input('lgtbi', array('label' => '¿En la familia hay integrantes que pertenezcan a la comunidad LGBTI? ','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
					
			      ?>
				</div></br>	
				</div>			

				<div class="card-header bg-info text-left">
					<h5 style="color:white">Riesgos de salud</h5>
					</div></br>

				<div class="col-md-4">
					<?php
					    $option = array('' => 'Elegir', 'Sedentarismo' => 'Sedentarismo', 'Actividad física' => 'Actividad física', 'Inadecuadas Prácticas alimentarias y nutricionales' => 'Prácticas alimentarias y nutricionales (consumo sal, grasas, carbohidratos, azucares refinados)');
						echo $this->Form->input('estilodevidapredominante', array('label'=>'Estilos de Vida predominante en el hogar','class' => 'form-control', 'placeholder'=>"", 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search')); 
			?>
				</div>

				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'Alteraciones mentales : Esquizofrenia, TAB, depresión.'=>'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
			 'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia. '=>'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia. ',
			 'Enfermedad cardio- cerebro- vascular: (hipertemsion, infarto agudo al miocardio)'=>'Enfermedad cardio- cerebro- vascular: (hipertemsion, infarto agudo al miocardio)',
			 'Enfermedad renal '=>'Enfermedad renal ',
			 'Enfermedad respiratoria: Asma/EPOC'=>'Enfermedad respiratoria: Asma/EPOC',
			 'Diabetes'=>'Diabetes',
			 'Obesidad'=>'Obesidad',
			 'Enfermedad renal crónica'=>'Enfermedad renal crónica',
			 'Enfermedades huérfanas'=>'Enfermedades huérfanas',
			 'No refiere'=>'No refiere');

				echo $this->Form->input('antecedenteenfermedad',array('label' => 'Antecedentes familiares de enfermedad','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>

				<div class="col-md-4">
					<?php
				$option = array('' => 'Elegir',	'No refiere'=>'No refiere', 'Alteraciones mentales : Esquizofrenia, TAB, depresión.'=>'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
				'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia. '=>'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia. ',
				'Enfermedad cardio- cerebro- vascular: (hipertemsion, infarto agudo al miocardio)'=>'Enfermedad cardio- cerebro- vascular: (hipertemsion, infarto agudo al miocardio)',
				'Enfermedad renal '=>'Enfermedad renal ',
				'Enfermedad respiratoria: Asma/EPOC'=>'Enfermedad respiratoria: Asma/EPOC',
				'Diabetes'=>'Diabetes',
				'Obesidad'=>'Obesidad',
				'Enfermedad renal crónica'=>'Enfermedad renal crónica',
				'Enfermedades huérfanas'=>'Enfermedades huérfanas');

				echo $this->Form->input('antecedenteenfermedad1',array('label' => 'Agregue otro Antecedente enfermedad si requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir','No refiere'=>'No refiere', 'Alteraciones mentales : Esquizofrenia, TAB, depresión.'=>'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
			 'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia. '=>'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia. ',
			 'Enfermedad cardio- cerebro- vascular: (hipertemsion, infarto agudo al miocardio)'=>'Enfermedad cardio- cerebro- vascular: (hipertemsion, infarto agudo al miocardio)',
			 'Enfermedad renal '=>'Enfermedad renal ',
			 'Enfermedad respiratoria: Asma/EPOC'=>'Enfermedad respiratoria: Asma/EPOC',
			 'Diabetes'=>'Diabetes',
			 'Obesidad'=>'Obesidad',
			 'Enfermedad renal crónica'=>'Enfermedad renal crónica',
			 'Enfermedades huérfanas'=>'Enfermedades huérfanas');

				echo $this->Form->input('antecedenteenfermedad2',array('label' => 'Agregue otro Antecedentes enfermedad si requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Dinamica familiar</h5>
					</div></br>
				
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'Conflictos conyugales'=>'Conflictos conyugales',
			 'Conflictos entre padres e hijos'=>'Conflictos entre padres e hijos',
			 'Conflictos entre hermanos'=>'Conflictos entre hermanos',
			 'Conflictos entre Familia'=>'Conflictos entre Familia',
			 'Violencia Intrafamiliar y maltrato'=>'Violencia Intrafamiliar y maltrato',
			 'Violencia Intrafamiliar y maltrato contra NNA'=>'Violencia Intrafamiliar y maltrato contra NNA',
			 'Violencias de género'=>'Violencias de género',
			 'Problemas o Transtornos mentales diangnosticados'=>'Problemas o Transtornos mentales diangnosticados',
			 'Consumo de alcohol o psicoactivos'=>'Consumo de alcohol o psicoactivos',
			 'No refiere'=>'No refiere');

				echo $this->Form->input('riesgopsicosocial',array('label' => '¿En su familia se ha presentado alguna de las siguientes situaciones en el ultimo mes?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir',	'No refiere'=>'No refiere', 'Conflictos conyugales'=>'Conflictos conyugales',
			 'Conflictos entre padres e hijos'=>'Conflictos entre padres e hijos',
			 'Conflictos entre hermanos'=>'Conflictos entre hermanos',
			 'Conflictos entre Familia'=>'Conflictos entre Familia',
			 'Violencia Intrafamiliar y maltrato'=>'Violencia Intrafamiliar y maltrato',
			 'Violencia Intrafamiliar y maltrato contra NNA'=>'Violencia Intrafamiliar y maltrato contra NNA',
			 'Violencias de género'=>'Violencias de género',
			 'Problemas o Transtornos mentales diangnosticados'=>'Problemas o Transtornos mentales diangnosticados',
			 'Consumo de alcohol o psicoactivos'=>'Consumo de alcohol o psicoactivos',
			 );

				echo $this->Form->input('riesgopsicosocial1',array('label' => 'Agregue otra situación si se requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir','No refiere'=>'No refiere', 'Conflictos conyugales'=>'Conflictos conyugales',
			 'Conflictos entre padres e hijos'=>'Conflictos entre padres e hijos',
			 'Conflictos entre hermanos'=>'Conflictos entre hermanos',
			 'Conflictos entre Familia'=>'Conflictos entre Familia',
			 'Violencia Intrafamiliar y maltrato'=>'Violencia Intrafamiliar y maltrato',
			 'Violencia Intrafamiliar y maltrato contra NNA'=>'Violencia Intrafamiliar y maltrato contra NNA',
			 'Violencias de género'=>'Violencias de género',
			 'Problemas o Transtornos mentales diangnosticados'=>'Problemas o Transtornos mentales diangnosticados',
			 'Consumo de alcohol o psicoactivos'=>'Consumo de alcohol o psicoactivos',
			 );

				echo $this->Form->input('riesgopsicosocial2',array('label' => 'Agregue otra situación si se requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>

				</br>
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Apoyo social</h5>
					</div></br>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'No'=>'No se recibe',
			 'Adulto mayor'=>'Bono - Adulto mayor',
			 'Bien Nacer'=>'Bien nacer',
			 'Familias en acción'=>'Familias en acción',
			 'Otro'=>'Otro',			 
			 'No refiere'=>'No refiere');

				echo $this->Form->input('programasocial',array('label' => '¿ Alguien de su familia recibe algún subsidio o aporte de programas sociales?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'No refiere'=>'No refiere', 'No'=>'No se recibe',
			 'Adulto mayor'=>'Bono - Adulto mayor',
			 'Bien Nacer'=>'Bien nacer',
			 'Familias en acción'=>'Familias en acción',
			 'Otro'=>'Otro',			 
			 );

				echo $this->Form->input('programasocial1',array('label' => 'Agregue otro subsidio o aporte de programas sociales si requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'No refiere'=>'No refiere', 'No'=>'No se recibe',
			 'Adulto mayor'=>'Bono - Adulto mayor',
			 'Bien Nacer'=>'Bien nacer',
			 'Familias en acción'=>'Familias en acción',
			 'Otro'=>'Otro'			 
			);

				echo $this->Form->input('programasocial2',array('label' => 'Agregue otro subsidio o aporte de programas sociales si requiere','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				</br>
				<div class="card-header bg-info text-left">
					<h5 style="color:white">Aseo e higiene</h5>
					</div></br>

					<div class="col-md-4">
					<?php
					 $option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No', 'SD' => 'Sin dato');
			echo $this->Form->input('higiene',array('label' => '¿Se observan adecuadas condiciones de higiene en el hogar?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'Siempre' => 'Siempre', 'No siempre' => 'No siempre','Nunca'=>'Nunca', 'SD' => 'Sin dato');
				echo $this->Form->input('higienealimentos',array('label' => '¿Almacenamiento y conservación adecuada de alimentos?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
			 $option = array('' => 'Elegir', 'Siempre' => 'Siempre', 'No siempre' => 'No siempre','Nunca'=>'Nunca', 'SD' => 'Sin dato');
				echo $this->Form->input('aseococina',array('label' => '¿Procura mantener limpia de la cocina?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>	
				
				<div class="col-md-4">
					<?php
				 $option = array('' => 'Elegir', 'Con agua y jabon' => 'Con agua y jabon', 'Solo agua' => 'Solo Agua', 'No'=>'No hay hábito de lavado de manos');
			echo $this->Form->input('lavadomanos',array('label' => ' ¿Es frecuente el hábito del lavado de manos durante el día? ','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>

				<div class="col-md-4">
					<?php
				 $option = array('' => 'Elegir', 'Cepillo de dientes' => 'Cepillo de dientes', 'Máquina de afeitar' => 'Máquina de afeitar','Toallas'=>'Toallas', 'No'=>'No se comparte', 'SD' => 'Sin dato');
			echo $this->Form->input('elementoshigiene',array('label' => '¿Se comparten implementos de higiene personal?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
				 echo $this->Form->input('otroelementohigiene',array('label' => 'Agregue Otros implementos de higiene que se comparta si requiere','class' => 'form-control','class' => 'form-control select-search'));
			?>
				</div>
				<div class="col-md-4">
					<?php
				 $option = array('' => 'Elegir', 'Solo con cepillo y crema dental' => 'Solo con cepillo y crema dental', 'Ademas el uso de Ceda dental' => 'Ademas el uso de Ceda dental', 'No' => 'No hay hábito de cepillado de dientes', 'SD' => 'Sin dato');
			echo $this->Form->input('cepilladodientes',array('label' => '¿Existe el hábito de cepillarse los dientes?','class' => 'form-control','type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
			?>
				</div>

				
				</br>

			</div>

	</div><!--/fielset-->
</div>


</fieldset>



<?php echo $this->Form->end(__('Submit')); ?></button>
</div>