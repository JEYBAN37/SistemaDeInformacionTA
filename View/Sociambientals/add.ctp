<div>

    <div class="form-group col-sm-12">


        <?php echo $this->Form->create('Sociambiental'); ?>


        <fieldset>

            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Sociambiental</h1>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Basicos</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->
                            <?php echo $this->Form->input('fecha', array(
                                'label' => 'Fecha de visita : ',
                                'style' => 'font-size: 12px'
                            ));
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('responsable_id', array(
                                'label' => 'Responsable diligenciamiento Encuesta',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select'
                            )); ?>
                        </div>

                        <div class="form-group col-md-6"> <?php echo $this->Form->input('ubicacion_id', array(
                                                                'label' => 'Territorio',
                                                                'class' => 'form-control',
                                                                'style' => 'font-size: 12px',
                                                                'type' => 'select'
                                                            )); ?>
                        </div>

                        <div class="form-group col-md-6"> <?php echo $this->Form->input('direccion', array(
                                                                'label' => 'Dirección',
                                                                'class' => 'form-control',
                                                                'style' => 'font-size: 12px',
                                                            )); ?>
                        </div>

                        <div class="form-group col-md-6"> <?php echo $this->Form->input('apellidosfamilia', array(
                                                                'label' => 'Apellidos de la familia',
                                                                'class' => 'form-control',
                                                                'style' => 'font-size: 12px',
                                                            )); ?>
                        </div>

                        <div class="form-group col-md-6"> <?php
                                                            $viviendaOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
                                                            echo $this->Form->input('vivienda', array(
                                                                'label' => 'Tipo de vivienda:',
                                                                'class' => 'form-control',
                                                                'style' => 'font-size: 12px;',
                                                                'placeholder' => '',
                                                                'type' => 'select',
                                                                'options' => $viviendaOptions
                                                            ));
                                                            ?>
                        </div>

                        <div class="form-group col-md-6"> <?php
                                                            $estratoOptions = array('' => 'Elegir', '1' => '1', '2' => '2');
                                                            echo $this->Form->input('estrato', array(
                                                                'class' => 'form-control',
                                                                'style' => 'font-size: 12px;',
                                                                'placeholder' => '',
                                                                'type' => 'select',
                                                                'options' => $estratoOptions
                                                            ));
                                                            ?>
                        </div>

                        <div class="form-group col-md-6"> <?php
                                                            $numhabitantesOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => 'Mas de 7');
                                                            echo $this->Form->input('numerohabitantes', array(
                                                                'label' => '¿Cuantas personas habitan en la vivienda',
                                                                'class' => 'form-control',
                                                                'style' => 'font-size: 12px;',
                                                                'placeholder' => '',
                                                                'options' => $numhabitantesOptions
                                                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $numhogaresOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
                            echo $this->Form->input('numerohogares', array(
                                'label' => 'No. Hogares en la residencia',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px;',
                                'placeholder' => '',
                                'options' => $numhogaresOptions
                            )); ?>
                            <p class="help-block"> Si todos comen de la misma olla se considera una sola familia</p>

                        </div>
                    </div>
                </div>
            </div>


            <h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Habitabilidad</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php
                            $option = array('' => 'Elegir', 'Bloque, cemento, ladrillo' => 'Bloque, cemento, ladrillo');
                            echo $this->Form->input('pared', array(
                                'label' => '¿Cuál es el material predominante de las paredes?',
                                'options' => $option,
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'placeholder' => ""
                            ));
                            ?>
                        </div>

                        <div class="form-group col-md-6">

                            <?php $option = array('' => 'Elegir', 'Buen estado' => 'Buen estado', 'Descascaramiento, humedad' => 'Descascaramiento, humedad', 'SD' => 'Sin dato');
                            echo $this->Form->input('estadoparedes', array(
                                'label' => '¿El estado de las paredes es?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $option,
                                'class' => 'form-control select-search'
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $option = array('' => 'Elegir', 'Cemento, gravilla' => 'Cemento, gravilla', 'Ceramica' => 'Ceramica', 'Piso flotante' => 'Piso flotante', 'SD' => 'Sin dato');
                            echo $this->Form->input('piso', array(
                                'label' => '¿Cuál es el material predominante del piso de la vivienda?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $option,
                                'class' => 'form-control select-search'
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $option = array('' => 'Elegir', 'Concreto' => 'Concreto', 'Eternit' => 'Eternit', 'SD' => 'Sin dato');
                            echo $this->Form->input('techo', array(
                                'label' => '¿Cuál es el material predominante del techo?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $option,

                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $option = array('' => 'Elegir', 'Buen estado' => 'Buen estado', 'Agrietamiento, goteras o fisuras' => 'Agrietamiento, goteras o fisuras', 'SD' => 'Sin dato');
                            echo $this->Form->input('estadotecho', array(
                                'label' => '¿Cuál es el estado en general del techo?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $option,

                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $option = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', 'SD' => 'Sin dato');
                            echo $this->Form->input('dormitorios', array(
                                'label' => '¿Cuantos cuartos se utilizan para dormir?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'font-size: 12px',
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php $option = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No', '3' => '3', '4' => '4', '5' => '5', 'SD' => 'Sin dato');
                            echo $this->Form->input('hacinamiento', array(
                                'label' => '¿En algunos de los dormitorios de la vivienda duermen tres o mas personas?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'font-size: 12px',
                            ));
                            ?>
                        </div>

                    </div>
                </div>
            </div>


            <h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Servicios y Riesgos de la vivienda </h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <div class="form-group row">

                        <div class="col-md-6">
                            <?php
                            $externalRiskOptions = [
                                '' => 'Elegir',
                                'Malos olores' => 'Malos olores',
                                'Iluminacion inadecuada' => 'Iluminación inadecuada',
                                'Ventilación inadecuada' => 'Ventilación inadecuada',
                                'No se identifica' => 'No se identifica',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('riesgoexterno', [
                                'label' => 'Identifique en el entorno si hay:',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $externalRiskOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                            <p class="help-block">Refiere el riesgo más evidente</p>
                        </div>

                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('otroriesgo', [
                                'label' => 'Registre otro riesgo interno o externo si considera',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $yesNoOptions = [
                                '' => 'Elegir',
                                'Si' => 'Si',
                                'No' => 'No',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('actividad', [
                                'label' => '¿Hay Actividad productiva en la vivienda?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $yesNoOptions,
                                'class' => 'form-control select-search',
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $accessOptions = [
                                '' => 'Elegir',
                                'Transporte' => 'Transporte',
                                'Espacios deportivos' => 'Espacios deportivos',
                                'Servicios Educativos' => 'Servicios Educativos',
                                'Servicios Salud' => 'Servicios Salud',
                                'Ninguno' => 'Ninguno'
                            ];
                            echo $this->Form->input('acceso', [
                                'label' => '¿En su sector es difícil acceder fácilmente a?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $accessOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $transportOptions = [
                                '' => 'Elegir',
                                'Moto' => 'Moto',
                                'Carro' => 'Carro',
                                'Bus' => 'Bus',
                                'Bicicleta' => 'Bicicleta',
                                'Caminar' => 'Caminar'
                            ];
                            echo $this->Form->input('transporte', [
                                'label' => '¿El Medio de transporte principal que usan en su familia es?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $transportOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $accidentRiskOptions = [
                                '' => 'Elegir',
                                'Objetos cortantes ' => 'Objetos cortantes ',
                                'Sustancias químicas_aseo a la vista' => 'Sustancias químicas_aseo a la vista',
                                'Medicamentos a la vista' => 'Medicamentos a la vista',
                                'Uso de Velas' => 'Uso de Velas',
                                'Conexiones Electricas inadecuadas' => 'Conexiones Electricas inadecuadas',
                                'Ninguno' => 'Ninguno',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('riesgo', [
                                'label' => 'Identifique en el entorno si hay riesgo de accidente en la vivienda',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $accidentRiskOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('otroriesgohogar', [
                                'label' => 'Registre otro riesgo interno o externo si considera',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px'
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $waterSupplyOptions = [
                                '' => 'Elegir',
                                'Empopasto' => 'Empopasto',
                                'Acueducto Comunitario' => 'Acueducto Comunitario',
                                'Agua enbasada' => 'Agua enbasada'
                            ];
                            echo $this->Form->input('aguaservicio', [
                                'label' => '¿Cuál es la principal fuente de abastecimiento de agua para consumo?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $waterSupplyOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $waterTreatmentOptions = [
                                '' => 'Elegir',
                                'Directamente del grifo' => 'Directamente del grifo',
                                'Hirve' => 'Hierve',
                                'Filta' => 'Filtra',
                                'Ozonifica' => 'Ozonifica',
                                'Desinfección con cloro' => 'Desinfección con cloro ',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('aguatratamiento', [
                                'label' => '¿Realiza algún tratamiento al agua para su consumo?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $waterTreatmentOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $waterSupplyStatusOptions = [
                                '' => 'Elegir',
                                'Premanentemente' => 'Premanentemente',
                                'Intermitente' => 'Intermitente',
                                'Razonamientos prolongados' => 'Razonamientos prolongados',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('aguasiministro', [
                                'label' => '¿El suministro de agua es?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $waterSupplyStatusOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $tankCleaningOptions = [
                                '' => 'Elegir',
                                'No tiene tanque' => 'No tiene tanque',
                                'Mensual' => 'Mensual',
                                'Semestral' => 'Semestral',
                                'No realiza lavado' => 'No realiza lavado',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('aguaalmacenamiento', [
                                'label' => '¿Lavado del tanque de almacenamiento de agua?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $tankCleaningOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $excretaDisposalOptions = [
                                '' => 'Elegir',
                                'Inodoro conectado a alcantarillado' => 'Inodoro conectado a alcantarillado',
                                'Campo abierto' => 'Campo abierto',
                                'Basenilla, bolsas' => 'Basenilla, Bolsas'
                            ];
                            echo $this->Form->input('diposicionexcretas', [
                                'label' => 'Disposición de excretas en la vivienda',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $excretaDisposalOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $domesticWaterOptions = [
                                '' => 'Elegir',
                                'Conexión alcantarillado' => 'Conexión alcantarillado',
                                'Campo Abierto ' => 'Campo Abierto'
                            ];
                            echo $this->Form->input('aguaresiduales', [
                                'label' => 'Aguas residuales domésticas',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $domesticWaterOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $garbageDisposalOptions = [
                                '' => 'Elegir',
                                'Recolección por Emas' => 'Recolección por Emas',
                                'Disposición a campo abierto' => 'Disposición a campo abierto'
                            ];
                            echo $this->Form->input('basura', [
                                'label' => 'Disposición final de basura',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $garbageDisposalOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $recyclingOptions = [
                                '' => 'Elegir',
                                'Si' => 'Si',
                                'No' => 'No',
                                'ocasionalmente' => 'Ocasionalmente',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('reciclaje', [
                                'label' => '¿Se realiza el proceso de separación de los residuos en la fuente?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $recyclingOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>




            <h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;">Servicios y Riesgos de la vivienda </h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">




            <!-- Latest compiled and minified CSS S -------------------------------------------------------------------->

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php
                            $externalRiskOptions = [
                                '' => 'Elegir',
                                'Malos olores' => 'Malos olores',
                                'Iluminacion inadecuada' => 'Iluminación inadecuada',
                                'Ventilación inadecuada' => 'Ventilación inadecuada',
                                'No se identifica' => 'No se identifica',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('riesgoexterno', [
                                'label' => 'Identifique en el entorno si hay:',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $externalRiskOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                            <p class="help-block">Refiere el riesgo más evidente</p>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('otroriesgo', [
                                'label' => 'Registre otro riesgo interno o externo si considera',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $yesNoOptions = [
                                '' => 'Elegir',
                                'Si' => 'Si',
                                'No' => 'No',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('actividad', [
                                'label' => '¿Hay Actividad productiva en la vivienda?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $yesNoOptions,
                                'class' => 'form-control select-search',
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $accessOptions = [
                                '' => 'Elegir',
                                'Transporte' => 'Transporte',
                                'Espacios deportivos' => 'Espacios deportivos',
                                'Servicios Educativos' => 'Servicios Educativos',
                                'Servicios Salud' => 'Servicios Salud',
                                'Ninguno' => 'Ninguno'
                            ];
                            echo $this->Form->input('acceso', [
                                'label' => '¿En su sector es difícil acceder fácilmente a?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $accessOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $transportOptions = [
                                '' => 'Elegir',
                                'Moto' => 'Moto',
                                'Carro' => 'Carro',
                                'Bus' => 'Bus',
                                'Bicicleta' => 'Bicicleta',
                                'Caminar' => 'Caminar'
                            ];
                            echo $this->Form->input('transporte', [
                                'label' => '¿El Medio de transporte principal que usan en su familia es?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $transportOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $accidentRiskOptions = [
                                '' => 'Elegir',
                                'Objetos cortantes ' => 'Objetos cortantes ',
                                'Sustancias químicas_aseo a la vista' => 'Sustancias químicas_aseo a la vista',
                                'Medicamentos a la vista' => 'Medicamentos a la vista',
                                'Uso de Velas' => 'Uso de Velas',
                                'Conexiones Electricas inadecuadas' => 'Conexiones Electricas inadecuadas',
                                'Ninguno' => 'Ninguno',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('riesgo', [
                                'label' => 'Identifique en el entorno si hay riesgo de accidente en la vivienda',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $accidentRiskOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('otroriesgohogar', [
                                'label' => 'Registre otro riesgo interno o externo si considera',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px'
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $waterSupplyOptions = [
                                '' => 'Elegir',
                                'Empopasto' => 'Empopasto',
                                'Acueducto Comunitario' => 'Acueducto Comunitario',
                                'Agua enbasada' => 'Agua enbasada'
                            ];
                            echo $this->Form->input('aguaservicio', [
                                'label' => '¿Cuál es la principal fuente de abastecimiento de agua para consumo?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $waterSupplyOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $waterTreatmentOptions = [
                                '' => 'Elegir',
                                'Directamente del grifo' => 'Directamente del grifo',
                                'Hirve' => 'Hierve',
                                'Filta' => 'Filtra',
                                'Ozonifica' => 'Ozonifica',
                                'Desinfección con cloro' => 'Desinfección con cloro ',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('aguatratamiento', [
                                'label' => '¿Realiza algún tratamiento al agua para su consumo?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $waterTreatmentOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $waterSupplyStatusOptions = [
                                '' => 'Elegir',
                                'Premanentemente' => 'Premanentemente',
                                'Intermitente' => 'Intermitente',
                                'Razonamientos prolongados' => 'Razonamientos prolongados',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('aguasiministro', [
                                'label' => '¿El suministro de agua es?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $waterSupplyStatusOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $tankCleaningOptions = [
                                '' => 'Elegir',
                                'No tiene tanque' => 'No tiene tanque',
                                'Mensual' => 'Mensual',
                                'Semestral' => 'Semestral',
                                'No realiza lavado' => 'No realiza lavado',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('aguaalmacenamiento', [
                                'label' => '¿Lavado del tanque de almacenamiento de agua?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $tankCleaningOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $excretaDisposalOptions = [
                                '' => 'Elegir',
                                'Inodoro conectado a alcantarillado' => 'Inodoro conectado a alcantarillado',
                                'Campo abierto' => 'Campo abierto',
                                'Basenilla, bolsas' => 'Basenilla, Bolsas'
                            ];
                            echo $this->Form->input('diposicionexcretas', [
                                'label' => 'Disposición de excretas en la vivienda',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $excretaDisposalOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $domesticWaterOptions = [
                                '' => 'Elegir',
                                'Conexión alcantarillado' => 'Conexión alcantarillado',
                                'Campo Abierto ' => 'Campo Abierto'
                            ];
                            echo $this->Form->input('aguaresiduales', [
                                'label' => 'Aguas residuales domésticas',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $domesticWaterOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $garbageDisposalOptions = [
                                '' => 'Elegir',
                                'Recolección por Emas' => 'Recolección por Emas',
                                'Disposición a campo abierto' => 'Disposición a campo abierto'
                            ];
                            echo $this->Form->input('basura', [
                                'label' => 'Disposición final de basura',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $garbageDisposalOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $recyclingOptions = [
                                '' => 'Elegir',
                                'Si' => 'Si',
                                'No' => 'No',
                                'ocasionalmente' => 'Ocasionalmente',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('reciclaje', [
                                'label' => '¿Se realiza el proceso de separación de los residuos en la fuente?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $recyclingOptions,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;">Mascotas en el hogar </h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="col-md-4">
                <select id="status" name="status" required onChange="mostrar(this.value);" style="margin-left:20px ;font-size:12px;margin-top:auto;border:1px solid #e9ecef; height:30px;width: 200px;overflow: hidden;position:relative;">
                    <option value="no">NO</option>
                    <option value="si">SI</option>

                </select>
            </div>


            <div class="grow justify-content-center" style="margin-top: -10px; font-size: 12px;">
                <div id="si" class="panel panel-default form-group col-md-12" style="margin-left: 15px; display: none;">
                    <div class="col-md-6">
                        <?php
                        $mascotaOption = ['' => 'Elegir', 'No aplica' => 'No tiene', 'Perros' => 'Perros', 'Gatos' => 'Gatos', 'Aves' => 'Aves', 'Cerdos' => 'Cerdos', 'Cuyes_conejos' => 'Cuyes/conejos', 'Otro' => 'Otro'];
                        echo $this->Form->input('mascotas', [
                            'label' => '¿Tienen Mascotas o animales de compañia y/o producción?',
                            'class' => 'form-control',
                            'type' => 'select',
                            'options' => $mascotaOption,
                            'style' => 'font-size: 12px',
                        ]);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $option1 = ['No aplica ' => 'Elegir', 'No aplica' => 'No Aplica', 'Perros' => 'Perros', 'Gatos' => 'Gatos', 'Aves' => 'Aves', 'Otro' => 'Otro'];
                        echo $this->Form->input('otramascota', [
                            'label' => '¿Agregue otras Mascotas o animales de compañia y/o producción si requiere?',
                            'class' => 'form-control',
                            'type' => 'select',
                            'options' => $option1,
                            'style' => 'font-size: 12px',
                        ]);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $cuidadoMascotaOptions = [
                            'No aplica' => 'Elegir',
                            'Si' => 'Si',
                            'No' => 'No',
                            'SD' => 'Sin dato'
                        ];
                        echo $this->Form->input('desparasitamascotas', [
                            'label' => '¿Se desparasita a los animales domésticos?',
                            'class' => 'form-control',
                            'type' => 'select',
                            'options' => $cuidadoMascotaOptions,
                            'style' => 'font-size: 12px',
                        ]);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('vacunamascotas', [
                            'label' => '¿Se ha vacunado a los animales domésticos?',
                            'class' => 'form-control',
                            'type' => 'select',
                            'options' =>  $cuidadoMascotaOptions,
                            'style' => 'font-size: 12px',
                        ]);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('cuidadomascotas', [
                            'label' => '¿Las excretas de los animales de compañía se recogen y disponen adecuadamente? ',
                            'class' => 'form-control',
                            'type' => 'select',
                            'options' => $cuidadoMascotaOptions,
                            'style' => 'font-size: 12px',
                        ]);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $vectoresOption = ['No aplica ' => 'Elegir', 'No aplica' => 'No Aplica', 'Mosicos' => 'Moscos', 'Zancudos' => 'Zancudos', 'Pulgas' => 'Pulgas', 'Piojos' => 'Piojos', 'Ratones' => 'Ratones', 'Cucarachas' => 'Cucarachas'];
                        echo $this->Form->input('vector', [
                            'label' => 'Hay presencia vectores transmisores de enfermedades en la vivienda o en su entorno inmediato?',
                            'class' => 'form-control',
                            'type' => 'select',
                            'options' => $vectoresOption,
                            'style' => 'font-size: 12px',
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </fieldset>
        <?php echo $this->Form->end(__('Guardar'), ['class' => 'btn btn-success']); ?>
    </div>
</div>






<!--div class="actions col-md-2">
	<h3>
		<?php echo __('Actions', array('label' => 'No. Habitantes en la residencia', 'class' => 'form-control', 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search')); ?>
	</h3>
	<ul>

		<li>
			<?php echo $this->Html->link(__('List Sociambientals'), array('action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?>
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
        $("#ActaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

    function mostrarBarrio(id) {
        if (id == "2")
            $("#divActualizarBarrio").show();
        else
            $("#divActualizarBarrio").hide();
    }

    function validar() {
        var todo_correcto = true;

        if (document.getElementById('status').value == '') {
            todo_correcto = false;
        }

        if (!todo_correcto) {
            alert('Algunos campos no están correctos, vuelva a revisarlos');
        }

        return todo_correcto;
    }

    function mostrar(id) {
        if (id == "si") {
            $("#si").show();
            $("#no").hide();

        } else if (id == "no") {
            $("#si").hide();
            $("#no").show();

        }
    }

    function moduloSocioamabiental(id) {
        if (id == "completo") {
            $("#completo").show();
            $("#revisar").hide();

        } else if (id == "revisar") {
            $("#completo").hide();
            $("#revisar").show();

        }
    }
</script>