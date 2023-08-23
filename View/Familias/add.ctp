<div class="form-group row">

	<div class="form-group col-lg-8">


		<?php echo $this->Form->create('Familia'); ?>


		<fieldset>

		<h1  class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 120px;  ">Modulo Familia</h1>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos de Encuestado</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">


<div class="form-group row">
    <div class="form-group col-md-4">
        <?php echo $this->Form->input('nombres', [
            'label' => 'Nombres',
            'class' => 'form-control',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php echo $this->Form->input('apellidos', [
            'label' => 'Apellidos',
            'class' => 'form-control',
            'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php 
        $generoOption = [
            ' ' => 'Elegir',
            'Hombre' => 'Hombre',
            'Mujer' => 'Mujer',
            'Otro' => 'Otro'
        ];
        echo $this->Form->input('genero', [
            'label' => 'Género',
            'class' => 'form-control',
            'placeholder' => '',
            'type' => 'select',
            'options' => $generoOption,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php 
        $rolOption = [
            ' ' => 'Elegir',
            'Padre' => 'Padre',
            'Madre' => 'Madre',
            'Hijo_a' => 'Hijo/Hija',
            'Abuelo_a' => 'Abuelo/Abuela',
            'Otro familiar' => 'Otro familiar'
        ];
        echo $this->Form->input('rol', [
            'label' => 'Quién atiende la visita es',
            'class' => 'form-control',
            'placeholder' => '',
            'type' => 'select',
            'options' => $rolOption,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php echo $this->Form->input('celular', [
            'label' => 'Número celular de contacto',
            'class' => 'form-control',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php echo $this->Form->input('correo', [
            'label' => 'Correo electrónico',
            'class' => 'form-control',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>
</div>

			</div>
		 </div>

		 <h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px; ">Vivienda</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

			
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

				<div class="form-group row">
    <div class="form-group col-md-4">
        <?php echo $this->Form->input('sociambiental_id', [
            'label' => 'Familia',
            'class' => 'form-control',
            'placeholder' => '',
            'type' => 'select',
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php
        $option = ['' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'];
        echo $this->Form->input('hogar', [
            'label' => 'Número de hogar',
            'class' => 'form-control',
            'placeholder' => '',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="form-group col-md-4">
        <?php
        $viviendaOptions = ['' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado'];
        echo $this->Form->input('vivienda', [
            'label' => '¿Su núcleo familiar vive en?',
            'class' => 'form-control',
            'placeholder' => '',
            'type' => 'select',
            'options' => $viviendaOptions,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Propia pagando' => 'Propia pagando', 'Propia paganda' => 'Propia paganda', 'Anticres' => 'Anticres', 'Arriendo' => 'Arriendo', 'Subarriendo' => 'Subarriendo', 'Prestada' => 'Prestada sin costo'];
        echo $this->Form->input('tenencia', [
            'label' => '¿Tenencia de la Vivienda es?',
            'class' => 'form-control',
            'placeholder' => '',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Electricidad' => 'Electricidad', 'Cilindro de Gas' => 'Cilindro de Gas', 'Gas domiciliario' => 'Gas domiciliario', 'Gas domiciliario' => 'Gas domiciliario', 'Carbon, leña' => 'Carbon, leña', 'Gasolina' => 'Gasolina'];
        echo $this->Form->input('combustible', [
            'label' => '¿Cuál fuente de energía o combustible que se usa para cocinar?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Electricidad' => 'Electricidad', 'Cilindro de Gas' => 'Cilindro de Gas', 'Gas domiciliario' => 'Gas domiciliario', 'Gas domiciliario' => 'Gas domiciliario', 'Carbon, leña' => 'Carbon, leña', 'Gasolina' => 'Gasolina'];
        echo $this->Form->input('otrocombustible', [
            'label' => 'Registre otra fuente de combustible si requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]); ?>
    </div>
</div>

			</div>
		</div>
				
		<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px; ">Composición Familiar</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">
		
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
				
				<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Unipersonal' => 'Unipersonal', 'Nuclear' => 'Nuclear', 'Nuclear monoparental' => 'Nuclear monoparental', 'Nuclear unipersonal por adulto mayor' => 'Nuclear unipersonal por adulto mayor', 'Extensa' => 'Extensa', 'Mixta o ampliada' => 'Mixta o ampliada'];
        echo $this->Form->input('tipofamilia', [
            'label' => '¿Cómo está compuesta la familia?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => 'Más de 10'];
        echo $this->Form->input('numeropersonas', [
            'label' => '¿De cuántas personas está compuesta la familia?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Indígena' => 'Indígena', 'Negritudes' => 'Negritudes', 'Víctima conflicto' => 'Víctima del conflicto', 'Discapacidad' => 'Discapacidad', 'Otro' => 'Otro', 'No aplica' => 'No aplica', 'Sin Dato' => 'Sin Dato'];
        echo $this->Form->input('poblacionvulnerable', [
            'label' => '¿Hay personas dentro de la familia que pertenecen a población vulnerable?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px'
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('poblacionvulnerable1', [
            'label' => 'Registre otra población con la cual se identifique si es necesario',
            'class' => 'form-control',
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Formación' => 'Formación', 'Expansión' => 'Expansión', 'Consolidación' => 'Consolidación', 'Apertura' => 'Apertura', 'Nido vacío' => 'Nido vacío', 'Disolución' => 'Disolución'];
        echo $this->Form->input('cursovidafamilia', [
            'label' => 'Curso de vida familia',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = ['' => 'Elegir', 'Si' => 'Si', 'No' => 'No'];
        echo $this->Form->input('lgtbi', [
            'label' => '¿En la familia hay integrantes que pertenezcan a la comunidad LGBTI?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>
			</div>
		</div>
	

				
		<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px; ">Riesgos de salud</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">
		
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
		
				<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Alteraciones mentales : Esquizofrenia, TAB, depresión.' => 'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
            'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.' => 'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.',
            'Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)' => 'Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)',
            'Enfermedad renal ' => 'Enfermedad renal ',
            'Enfermedad respiratoria: Asma/EPOC' => 'Enfermedad respiratoria: Asma/EPOC',
            'Diabetes' => 'Diabetes',
            'Obesidad' => 'Obesidad',
            'Enfermedad renal crónica' => 'Enfermedad renal crónica',
            'Enfermedades huérfanas' => 'Enfermedades huérfanas',
            'No refiere' => 'No refiere'
        ];

        echo $this->Form->input('antecedenteenfermedad', [
            'label' => 'Antecedentes familiares de enfermedad',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('antecedenteenfermedad1', [
            'label' => 'Agregue otro Antecedente enfermedad si requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('antecedenteenfermedad2', [
            'label' => 'Agregue otro Antecedentes enfermedad si requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Sedentarismo' => 'Sedentarismo',
            'Actividad física' => 'Actividad física',
            'Inadecuadas Prácticas alimentarias y nutricionales' => 'Prácticas alimentarias y nutricionales (consumo sal, grasas, carbohidratos, azúcares refinados)'
        ];

        echo $this->Form->input('estilodevidapredominante', [
            'label' => 'Estilos de Vida predominante en el hogar',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>

			</div>
		</div>	

		<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px; ">Dinamica Familiar</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">
		
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
				
				<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Conflictos conyugales' => 'Conflictos conyugales',
            'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
            'Conflictos entre hermanos' => 'Conflictos entre hermanos',
            'Conflictos entre Familia' => 'Conflictos entre Familia',
            'Violencia Intrafamiliar y maltrato' => 'Violencia Intrafamiliar y maltrato',
            'Violencia Intrafamiliar y maltrato contra NNA' => 'Violencia Intrafamiliar y maltrato contra NNA',
            'Violencias de género' => 'Violencias de género',
            'Problemas o Transtornos mentales diangnosticados' => 'Problemas o Transtornos mentales diangnosticados',
            'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
            'No refiere' => 'No refiere'
        ];

        echo $this->Form->input('riesgopsicosocial', [
            'label' => '¿En su familia se ha presentado alguna de las siguientes situaciones en el ultimo mes?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('riesgopsicosocial1', [
            'label' => 'Agregue otra situación si se requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('riesgopsicosocial2', [
            'label' => 'Agregue otra situación si se requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>

			
			</div>
		</div>

		<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px; ">Apoyo Social</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">
		
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
			
				<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'No' => 'No se recibe',
            'Adulto mayor' => 'Bono - Adulto mayor',
            'Bien Nacer' => 'Bien nacer',
            'Familias en acción' => 'Familias en acción',
            'Otro' => 'Otro',
            'No refiere' => 'No refiere'
        ];

        echo $this->Form->input('programasocial', [
            'label' => '¿ Alguien de su familia recibe algún subsidio o aporte de programas sociales?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('programasocial1', [
            'label' => 'Agregue otro subsidio o aporte de programas sociales si requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('programasocial2', [
            'label' => 'Agregue otro subsidio o aporte de programas sociales si requiere',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>



			</div>
		</div>

		<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px; ">Aseo e Higiene</h2>
			<hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">
		
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
				
				<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Si' => 'Si',
            'No' => 'No',
            'SD' => 'Sin dato'
        ];

        echo $this->Form->input('higiene', [
            'label' => '¿Se observan adecuadas condiciones de higiene en el hogar?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('higienealimentos', [
            'label' => '¿Almacenamiento y conservación adecuada de alimentos?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('aseococina', [
            'label' => '¿Procura mantener limpia de la cocina?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Con agua y jabon' => 'Con agua y jabon',
            'Solo agua' => 'Solo Agua',
            'No' => 'No hay hábito de lavado de manos'
        ];

        echo $this->Form->input('lavadomanos', [
            'label' => '¿Es frecuente el hábito del lavado de manos durante el día?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Cepillo de dientes' => 'Cepillo de dientes',
            'Máquina de afeitar' => 'Máquina de afeitar',
            'Toallas' => 'Toallas',
            'No' => 'No se comparte',
            'SD' => 'Sin dato'
        ];

        echo $this->Form->input('elementoshigiene', [
            'label' => '¿Se comparten implementos de higiene personal?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>

    <div class="col-md-4">
        <?php
        echo $this->Form->input('otroelementohigiene', [
            'label' => 'Agregue Otros implementos de higiene que se comparta si requiere',
            'class' => 'form-control',
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <?php
        $option = [
            '' => 'Elegir',
            'Solo con cepillo y crema dental' => 'Solo con cepillo y crema dental',
            'Ademas el uso de Ceda dental' => 'Ademas el uso de Ceda dental',
            'No' => 'No hay hábito de cepillado de dientes',
            'SD' => 'Sin dato'
        ];

        echo $this->Form->input('cepilladodientes', [
            'label' => '¿Existe el hábito de cepillarse los dientes?',
            'class' => 'form-control',
            'type' => 'select',
            'options' => $option,
            'class' => 'form-control select-search',
			'style'=>'font-size: 12px' ,
        ]);
        ?>
    </div>
</div>
			</div>
		</div>
</fieldset>

<?php echo $this->Form->end(__('Guradar'), ['class' => 'btn btn-success']); ?></br>
</div>