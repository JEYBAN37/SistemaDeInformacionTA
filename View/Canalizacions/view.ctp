<?php $this->layout = 'default_familia';
echo $this->Html->script('validationFamilia'); ?>

<style>
	.negrilla {
		font-size: small;
		font-weight: bold;
	}

	.my-button {
		padding: 10px 20px;
		background-color: #3366CC;
		color: white;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		margin-top: 20px;


	}

	.my-button:hover {
		background-color: #337CCF;
	}

	.my-button:active {
		background-color: #337CCF;
	}
</style>



<div>
	<div class="form-group col-sm-12">
		<fieldset>
			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">Canalizaciones</h1>
			</div>

			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row">
						<div class="col-lg-12">

							<table width="100%" class="table table-responsive table-striped table-bordered  ">
								<tr>
									<td>
										<strong>ID:</strong>
										<?php
										echo ($canalizacion['Canalizacion']['id']); ?>
									</td>



									<td><strong>Tipo:</strong>
										<?php
										echo ($canalizacion['Canalizacion']['tipo']);
										?>
									</td>
									<td>
										<strong>Nombre:</strong>
										<?php echo ($canalizacion['Canalizacion']['nombre']); ?>
									</td>
									<!--td>N° Hogares:
                                        <?php echo ($familia['Sociambiental']['numerohogares']); ?></td-->
								</tr>
								<tr>
									<td><strong>Sede:</strong>
										<?php echo ($canalizacion['Canalizacion']['sede']); ?>
									</td>
									<td colspan="2"> <strong> Tel. Institucional:</strong>
										<?php echo ($canalizacion['Canalizacion']['telefonoInstitucional']); ?>
									</td>


								<tr>

									<td><strong>Enlace Uno:</strong>
										<?php echo ($canalizacion['Canalizacion']['enlaceuno']); ?>
									</td>
									<td colspan="2"><strong>Cargo:</strong>
										<?php echo ($canalizacion['Canalizacion']['cargouno']); ?></td>


								</tr>

								<tr>
									<td><strong>Telefono:</strong>
										<?php echo ($canalizacion['Canalizacion']['telefono1']); ?>
									</td>
									<td colspan="6"><strong>Correo:</strong>
										<?php echo ($canalizacion['Canalizacion']['correo1']); ?>
									</td>
								</tr>

								<tr>

									<td><strong>Enlace Dos:</strong>
										<?php echo ($canalizacion['Canalizacion']['enlacedos']); ?>
									</td>
									<td colspan="6"><strong>Cargo Dos:</strong>
										<?php echo ($canalizacion['Canalizacion']['cargodos']); ?></td>


								</tr>

								<tr>
									<td><strong>Telefono Dos:</strong>
										<?php echo ($canalizacion['Canalizacion']['telefono2']); ?>
									</td>
									<td colspan="6"><strong>Correo:</strong>
										<?php echo ($canalizacion['Canalizacion']['correo2']); ?>
									</td>
								</tr>

							</table>

						</div>
					</div>
				</div>
			</div>
	</div>

	</fieldset>
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Relacion con Infantes</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">

<div class="row" style="margin: 5px;">
	<div class="col-lg-12" style="justify-items: center; ">
		<div class="panel panel-default">
			<!--div class="panel-heading">
                <p>Anexo tecnico PIC-2020</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?>
                        </li>
                        <li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
                        < <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> >
            </ul>
            </div>

         </div-->

			</ul>
			<!-- /.panel-heading -->
			<div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
				<div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
					<div class=" row">
						<div class="col-sm-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>id</th>
										<th>ID de familia</th>
										<th>ID de Persona</th>
										<th>Discapacidad</th>
										<th>Peso</th>
										<th>Talla</th>
										<!--Dato de tabla sociambiental junto con direccion , apellidos familia,encuestador,fecha y numero familia :) -->
										<th>Indice de Masa Corporal</th>
										<th>Tencion Arterial</th>
										<th>Condicion Cronica</th>
										<th>Esquema de Vacunacion</th>
										<th>Desparasitacion</th>
										<th>Crecimiento y Desarrollo</th>
										<th>Desnutricion</th>
										<th>Higiene Horal</th>
										<th>Desarrollo Infantil</th>
										<th>Estudio</th>
										<th>Sospecha Maltrato</th>
										<th>Rendimiento Escolar</th>
										<th>Canalizacion N°1 </th>
										<th>Canalizacion N°2 </th>
										<th>Opciones</th>

									</tr>
								</thead>
								<tbody>

									<?php foreach ($canalizacion['Infantil'] as $infantil) : ?>

										<tr class="gradeA odd">
											<td class="sorting_1"><?php echo $infantil['id']; ?></td>
											<td><?php echo $infantil['familia_id']; ?></td>
											<td><?php echo $infantil['persona_id']; ?></td>
											<td><?php echo $infantil['discapacidad']; ?></td>
											<td><?php echo $infantil['peso']; ?></td>
											<td><?php echo $infantil['talla']; ?></td>
											<td><?php echo $infantil['indicemasacorporal']; ?></td>
											<td><?php echo $infantil['tensionarterial']; ?></td>
											<td><?php echo $infantil['condicioncronica']; ?></td>
											<td><?php echo $infantil['esquemavacunacion']; ?></td>
											<td><?php echo $infantil['desparasitacion']; ?></td>
											<td><?php echo $infantil['crecimientoydesarrollo']; ?></td>
											<td><?php echo $infantil['desnutricion']; ?></td>
											<td><?php echo $infantil['higieneoral']; ?></td>
											<td><?php echo $infantil['desarrolloinfantil']; ?></td>
											<td><?php echo $infantil['estudio']; ?></td>
											<td><?php echo $infantil['sopechamaltrato']; ?></td>
											<td><?php echo $infantil['rendimientoescolar']; ?></td>
											<td><?php echo $infantil['canalizacionuno']; ?></td>
											<td><?php echo $infantil['canalizaciondos']; ?></td>
											<td class="actions">
												<div class="btn-group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<?php echo ('Acciones'); ?> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><?php echo $this->Html->link(('Ver famlia'),
																array('action' => 'view', $familia['Familia']['id']),
																array(
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li><?php echo $this->Html->link(('Editar hogar'),
																array('action' => 'edit',  $familia['Familia']['id']),
																array(
																	'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li><?php echo $this->Html->link(('Agregar hogar'),
																array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id']),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li>
															<?php
															echo $this->Html->link(('Agregar menor de 2 años'),
																array(
																	'controller' => 'Primerainfancias',
																	'action' => 'add?primerainfancia=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>



														<li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
																array(
																	'controller' => 'Primerainfancias',
																	'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)

															); ?>
														</li>
														<li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
																array(
																	'controller' => 'Infantils',
																	'action' => 'add?infantils=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li>
															<?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
																array(
																	'controller' => 'Adolescencias',
																	'action' => 'add?adolescencias=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>

														<li><?php echo $this->Html->link(('Agregar adulto de 18 a 28 años'),
																array(
																	'controller' => 'Juventudadultos',
																	'action' => 'add?juventudadultos=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un adulto de 18 a 28 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li>
															<?php
															echo $this->Html->link(
																'Editar inf.sociambiental',
																array(
																	'controller' => 'sociambientals',
																	'action' => 'edit',
																	$familia['Sociambiental']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															);
															?>
														</li>


													</ul>
												</div>
											</td>



										</tr>


									<?php endforeach; ?>


								</tbody>
							</table>
						</div>
					</div>

				</div>
				<!-- /.table-responsive -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Relacion con Primeras Infancias</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">

<div class="row" style="margin: 5px;">
	<div class="col-lg-12" style="justify-items: center; ">
		<div class="panel panel-default">
			<!--div class="panel-heading">
                <p>Anexo tecnico PIC-2020</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?>
                        </li>
                        <li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
                        < <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> >
            </ul>
            </div>

         </div-->

			</ul>
			<!-- /.panel-heading -->
			<div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
				<div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
					<div class=" row">
						<div class="col-sm-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-f">
								<thead>
									<tr>
										<th><?php echo ('Id'); ?></th>
										<th><?php echo ('Persona Id'); ?></th>
										<th><?php echo ('Familia Id'); ?></th>
										<th><?php echo ('Tipodocumento'); ?></th>
										<th><?php echo ('Numerodoc'); ?></th>
										<th><?php echo ('Primerapellido'); ?></th>
										<th><?php echo ('Segundoapellido'); ?></th>
										<th><?php echo ('Primernombre'); ?></th>
										<th><?php echo ('Segundonombre'); ?></th>
										<th><?php echo ('Fechanac'); ?></th>
										<th><?php echo ('Edad'); ?></th>
										<th><?php echo ('Sexo'); ?></th>
										<th><?php echo ('Aseguradora'); ?></th>
										<th><?php echo ('Regimen'); ?></th>
										<th><?php echo ('Estadoafiliacion'); ?></th>
										<th><?php echo ('Telefono'); ?></th>
										<th><?php echo ('Email'); ?></th>
										<th><?php echo ('Prematuro'); ?></th>
										<th><?php echo ('Discapacidad'); ?></th>
										<th><?php echo ('Peso'); ?></th>
										<th><?php echo ('Talla'); ?></th>
										<th><?php echo ('Bajopeso'); ?></th>
										<th><?php echo ('Perimetrocefalico'); ?></th>
										<th><?php echo ('Perimetrobraquial'); ?></th>
										<th><?php echo ('Perimetrocintura'); ?></th>
										<th><?php echo ('Perimetrocadera'); ?></th>
										<th><?php echo ('Tensionarterial'); ?></th>
										<th><?php echo ('Lactanciamaterna'); ?></th>
										<th><?php echo ('Condicioncronica'); ?></th>
										<th><?php echo ('Anomaliacongenita'); ?></th>
										<th><?php echo ('Esquemavacunacion'); ?></th>
										<th><?php echo ('Desparasitacion'); ?></th>
										<th><?php echo ('Crecimientoydesarrollo'); ?></th>
										<th><?php echo ('Desnutricion'); ?></th>
										<th><?php echo ('Sospechamaltrato'); ?></th>
										<th><?php echo ('Padresconsumo'); ?></th>
										<th><?php echo ('Cuidador'); ?></th>
										<th><?php echo ('Educacion'); ?></th>
										<th><?php echo ('Higieneoral'); ?></th>
										<th><?php echo ('Desarrolloinfantil'); ?></th>
										<th><?php echo ('Eda'); ?></th>
										<th><?php echo ('Era'); ?></th>
										<th><?php echo ('Canalizacionuno'); ?></th>
										<th><?php echo ('Canalizaciondos'); ?></th>
										<th><?php echo ('Educacionuno'); ?></th>
										<th><?php echo ('Canalizacion Id'); ?></th>
										<th><?php echo ('Canalizaciontres'); ?></th>
										<th>Opciones</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($canalizacion['Primerainfancia'] as $primerainfancia) : ?>
										<td><?php echo $primerainfancia['id']; ?></td>
										<td><?php echo $primerainfancia['persona_id']; ?></td>
										<td><?php echo $primerainfancia['familia_id']; ?></td>
										<td><?php echo $primerainfancia['tipodocumento']; ?></td>
										<td><?php echo $primerainfancia['numerodoc']; ?></td>
										<td><?php echo $primerainfancia['primerapellido']; ?></td>
										<td><?php echo $primerainfancia['segundoapellido']; ?></td>
										<td><?php echo $primerainfancia['primernombre']; ?></td>
										<td><?php echo $primerainfancia['segundonombre']; ?></td>
										<td><?php echo $primerainfancia['fechanac']; ?></td>
										<td><?php echo $primerainfancia['edad']; ?></td>
										<td><?php echo $primerainfancia['sexo']; ?></td>
										<td><?php echo $primerainfancia['aseguradora']; ?></td>
										<td><?php echo $primerainfancia['regimen']; ?></td>
										<td><?php echo $primerainfancia['estadoafiliacion']; ?></td>
										<td><?php echo $primerainfancia['telefono']; ?></td>
										<td><?php echo $primerainfancia['email']; ?></td>
										<td><?php echo $primerainfancia['prematuro']; ?></td>
										<td><?php echo $primerainfancia['discapacidad']; ?></td>
										<td><?php echo $primerainfancia['peso']; ?></td>
										<td><?php echo $primerainfancia['talla']; ?></td>
										<td><?php echo $primerainfancia['bajopeso']; ?></td>
										<td><?php echo $primerainfancia['perimetrocefalico']; ?></td>
										<td><?php echo $primerainfancia['perimetrobraquial']; ?></td>
										<td><?php echo $primerainfancia['perimetrocintura']; ?></td>
										<td><?php echo $primerainfancia['perimetrocadera']; ?></td>
										<td><?php echo $primerainfancia['tensionarterial']; ?></td>
										<td><?php echo $primerainfancia['lactanciamaterna']; ?></td>
										<td><?php echo $primerainfancia['condicioncronica']; ?></td>
										<td><?php echo $primerainfancia['anomaliacongenita']; ?></td>
										<td><?php echo $primerainfancia['esquemavacunacion']; ?></td>
										<td><?php echo $primerainfancia['desparasitacion']; ?></td>
										<td><?php echo $primerainfancia['crecimientoydesarrollo']; ?></td>
										<td><?php echo $primerainfancia['desnutricion']; ?></td>
										<td><?php echo $primerainfancia['sospechamaltrato']; ?></td>
										<td><?php echo $primerainfancia['padresconsumo']; ?></td>
										<td><?php echo $primerainfancia['cuidador']; ?></td>
										<td><?php echo $primerainfancia['educacion']; ?></td>
										<td><?php echo $primerainfancia['higieneoral']; ?></td>
										<td><?php echo $primerainfancia['desarrolloinfantil']; ?></td>
										<td><?php echo $primerainfancia['eda']; ?></td>
										<td><?php echo $primerainfancia['era']; ?></td>
										<td><?php echo $primerainfancia['canalizacionuno']; ?></td>
										<td><?php echo $primerainfancia['canalizaciondos']; ?></td>
										<td><?php echo $primerainfancia['educacionuno']; ?></td>
										<td><?php echo $primerainfancia['canalizacion_id']; ?></td>
										<td><?php echo $primerainfancia['canalizaciontres']; ?></td>
										<td class="actions">
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<?php echo ('Acciones'); ?> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><?php echo $this->Html->link(('Ver famlia'),
															array('action' => 'view', $familia['Familia']['id']),
															array(
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li><?php echo $this->Html->link(('Editar hogar'),
															array('action' => 'edit',  $familia['Familia']['id']),
															array(
																'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li><?php echo $this->Html->link(('Agregar hogar'),
															array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id']),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php
														echo $this->Html->link(('Agregar menor de 2 años'),
															array(
																'controller' => 'Primerainfancias',
																'action' => 'add?primerainfancia=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>



													<li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
															array(
																'controller' => 'Primerainfancias',
																'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)

														); ?>
													</li>
													<li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
															array(
																'controller' => 'Infantils',
																'action' => 'add?infantils=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
															array(
																'controller' => 'Adolescencias',
																'action' => 'add?adolescencias=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>

													<li><?php echo $this->Html->link(('Agregar adulto de 18 a 28 años'),
															array(
																'controller' => 'Juventudadultos',
																'action' => 'add?juventudadultos=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un adulto de 18 a 28 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php
														echo $this->Html->link(
															'Editar inf.sociambiental',
															array(
																'controller' => 'sociambientals',
																'action' => 'edit',
																$familia['Sociambiental']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														);
														?>
													</li>


												</ul>
											</div>
										</td>

										</td>

										</tr>


									<?php endforeach; ?>


								</tbody>
							</table>
						</div>
					</div>

				</div>
				<!-- /.table-responsive -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Relacion con Adolescentes</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">

<div class="row" style="margin: 5px;">
	<div class="col-lg-12" style="justify-items: center; ">
		<div class="panel panel-default">
			<!--div class="panel-heading">
                <p>Anexo tecnico PIC-2020</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?>
                        </li>
                        <li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
                        < <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> >
            </ul>
            </div>

         </div-->

			</ul>
			<!-- /.panel-heading -->
			<div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
				<div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
					<div class=" row">
						<div class="col-sm-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-a">
								<thead>
									<tr>
										<th><?php echo ('Id'); ?></th>
										<th><?php echo ('Familia Id'); ?></th>
										<th><?php echo ('Persona Id'); ?></th>
										<th><?php echo ('Tipodocumento'); ?></th>
										<th><?php echo ('Numerodoc'); ?></th>
										<th><?php echo ('Primerapellido'); ?></th>
										<th><?php echo ('Segundoapellido'); ?></th>
										<th><?php echo ('Primernombre'); ?></th>
										<th><?php echo ('Fechanac'); ?></th>
										<th><?php echo ('Edad'); ?></th>
										<th><?php echo ('Sexo'); ?></th>
										<th><?php echo ('Aseguradora'); ?></th>
										<th><?php echo ('Regimen'); ?></th>
										<th><?php echo ('Estadoafiliacion'); ?></th>
										<th><?php echo ('Telefono'); ?></th>
										<th><?php echo ('Email'); ?></th>
										<th><?php echo ('Discapacidad'); ?></th>
										<th><?php echo ('Peso'); ?></th>
										<th><?php echo ('Talla'); ?></th>
										<th><?php echo ('Indicemasacorporal'); ?></th>
										<th><?php echo ('Tensionarterial'); ?></th>
										<th><?php echo ('Condicioncronica'); ?></th>
										<th><?php echo ('Esquemavacunacion'); ?></th>
										<th><?php echo ('Desparasitacion'); ?></th>
										<th><?php echo ('Valoracionmedica'); ?></th>
										<th><?php echo ('Saludoral'); ?></th>
										<th><?php echo ('Iniciovidasexual'); ?></th>
										<th><?php echo ('Metodosanticonceptivos'); ?></th>
										<th><?php echo ('Infeccionestransmisionsexual'); ?></th>
										<th><?php echo ('Gestacion'); ?></th>
										<th><?php echo ('Consumospa'); ?></th>
										<th><?php echo ('Consumospa1'); ?></th>
										<th><?php echo ('Riesgopsicosocial'); ?></th>
										<th><?php echo ('Riesgopsicosocial1'); ?></th>
										<th><?php echo ('Estudio'); ?></th>
										<th><?php echo ('Rendimientoescolar'); ?></th>
										<th><?php echo ('Sopechamaltrato'); ?></th>
										<th><?php echo ('Canalizacionuno'); ?></th>
										<th><?php echo ('Canalizaciondos'); ?></th>
										<th><?php echo ('Canalizaciontres'); ?></th>
										<th><?php echo ('Canalizacion Id'); ?></th>
										<th><?php echo ('Educacionuno'); ?></th>
										<th>Opciones</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($canalizacion['Adolescencia'] as $adolescencia) : ?>
										<td><?php echo $adolescencia['id']; ?></td>
										<td><?php echo $adolescencia['familia_id']; ?></td>
										<td><?php echo $adolescencia['persona_id']; ?></td>
										<td><?php echo $adolescencia['tipodocumento']; ?></td>
										<td><?php echo $adolescencia['numerodoc']; ?></td>
										<td><?php echo $adolescencia['primerapellido']; ?></td>
										<td><?php echo $adolescencia['segundoapellido']; ?></td>
										<td><?php echo $adolescencia['primernombre']; ?></td>
										<td><?php echo $adolescencia['fechanac']; ?></td>
										<td><?php echo $adolescencia['edad']; ?></td>
										<td><?php echo $adolescencia['sexo']; ?></td>
										<td><?php echo $adolescencia['aseguradora']; ?></td>
										<td><?php echo $adolescencia['regimen']; ?></td>
										<td><?php echo $adolescencia['estadoafiliacion']; ?></td>
										<td><?php echo $adolescencia['telefono']; ?></td>
										<td><?php echo $adolescencia['email']; ?></td>
										<td><?php echo $adolescencia['discapacidad']; ?></td>
										<td><?php echo $adolescencia['peso']; ?></td>
										<td><?php echo $adolescencia['talla']; ?></td>
										<td><?php echo $adolescencia['indicemasacorporal']; ?></td>
										<td><?php echo $adolescencia['tensionarterial']; ?></td>
										<td><?php echo $adolescencia['condicioncronica']; ?></td>
										<td><?php echo $adolescencia['esquemavacunacion']; ?></td>
										<td><?php echo $adolescencia['desparasitacion']; ?></td>
										<td><?php echo $adolescencia['valoracionmedica']; ?></td>
										<td><?php echo $adolescencia['saludoral']; ?></td>
										<td><?php echo $adolescencia['iniciovidasexual']; ?></td>
										<td><?php echo $adolescencia['metodosanticonceptivos']; ?></td>
										<td><?php echo $adolescencia['infeccionestransmisionsexual']; ?></td>
										<td><?php echo $adolescencia['gestacion']; ?></td>
										<td><?php echo $adolescencia['consumospa']; ?></td>
										<td><?php echo $adolescencia['consumospa1']; ?></td>
										<td><?php echo $adolescencia['riesgopsicosocial']; ?></td>
										<td><?php echo $adolescencia['riesgopsicosocial1']; ?></td>
										<td><?php echo $adolescencia['estudio']; ?></td>
										<td><?php echo $adolescencia['rendimientoescolar']; ?></td>
										<td><?php echo $adolescencia['sopechamaltrato']; ?></td>
										<td><?php echo $adolescencia['canalizacionuno']; ?></td>
										<td><?php echo $adolescencia['canalizaciondos']; ?></td>
										<td><?php echo $adolescencia['canalizaciontres']; ?></td>
										<td><?php echo $adolescencia['canalizacion_id']; ?></td>
										<td><?php echo $adolescencia['educacionuno']; ?></td>
										<td class="actions">
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<?php echo ('Acciones'); ?> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><?php echo $this->Html->link(('Ver famlia'),
															array('action' => 'view', $familia['Familia']['id']),
															array(
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li><?php echo $this->Html->link(('Editar hogar'),
															array('action' => 'edit',  $familia['Familia']['id']),
															array(
																'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li><?php echo $this->Html->link(('Agregar hogar'),
															array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id']),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php
														echo $this->Html->link(('Agregar menor de 2 años'),
															array(
																'controller' => 'Primerainfancias',
																'action' => 'add?primerainfancia=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>



													<li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
															array(
																'controller' => 'Primerainfancias',
																'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)

														); ?>
													</li>
													<li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
															array(
																'controller' => 'Infantils',
																'action' => 'add?infantils=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
															array(
																'controller' => 'Adolescencias',
																'action' => 'add?adolescencias=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>

													<li><?php echo $this->Html->link(('Agregar adulto de 18 a 28 años'),
															array(
																'controller' => 'Juventudadultos',
																'action' => 'add?juventudadultos=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un adulto de 18 a 28 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php
														echo $this->Html->link(
															'Editar inf.sociambiental',
															array(
																'controller' => 'sociambientals',
																'action' => 'edit',
																$familia['Sociambiental']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														);
														?>
													</li>


												</ul>
											</div>
										</td>

										</td>

										</tr>


									<?php endforeach; ?>


								</tbody>
							</table>
						</div>
					</div>

				</div>
				<!-- /.table-responsive -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Relacion con Adultos</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">

<div class="row" style="margin: 5px;">
	<div class="col-lg-12" style="justify-items: center; ">
		<div class="panel panel-default">
			<!--div class="panel-heading">
                <p>Anexo tecnico PIC-2020</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?>
                        </li>
                        <li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
                        < <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> >
            </ul>
            </div>

         </div-->

			</ul>
			<!-- /.panel-heading -->
			<div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
				<div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
					<div class=" row">
						<div class="col-sm-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-j">
								<thead>
									<tr>
										<th><?php echo ('Id'); ?></th>
										<th><?php echo ('Familia Id'); ?></th>
										<th><?php echo ('Persona Id'); ?></th>
										<th><?php echo ('Tipodocumento'); ?></th>
										<th><?php echo ('Numerodoc'); ?></th>
										<th><?php echo ('Primerapellido'); ?></th>
										<th><?php echo ('Segundoapellido'); ?></th>
										<th><?php echo ('Primernombre'); ?></th>
										<th><?php echo ('Segundonombre'); ?></th>
										<th><?php echo ('Fechanac'); ?></th>
										<th><?php echo ('Edad'); ?></th>
										<th><?php echo ('Sexo'); ?></th>
										<th><?php echo ('Aseguradora'); ?></th>
										<th><?php echo ('Regimen'); ?></th>
										<th><?php echo ('Estadoafiliacion'); ?></th>
										<th><?php echo ('Telefono'); ?></th>
										<th><?php echo ('Email'); ?></th>
										<th><?php echo ('Discapacidad'); ?></th>
										<th><?php echo ('Peso'); ?></th>
										<th><?php echo ('Talla'); ?></th>
										<th><?php echo ('Indicemasacorporal'); ?></th>
										<th><?php echo ('Tensionarterial'); ?></th>
										<th><?php echo ('Condicioncronica'); ?></th>
										<th><?php echo ('Condicioncronica1'); ?></th>
										<th><?php echo ('Esquemavacunacion'); ?></th>
										<th><?php echo ('Desparasitacion'); ?></th>
										<th><?php echo ('Valoracionmedica'); ?></th>
										<th><?php echo ('Tomacitologia'); ?></th>
										<th><?php echo ('Saludoral'); ?></th>
										<th><?php echo ('Iniciovidasexual'); ?></th>
										<th><?php echo ('Metodosanticonceptivos'); ?></th>
										<th><?php echo ('Infeccionestransmisionsexual'); ?></th>
										<th><?php echo ('Mamografia'); ?></th>
										<th><?php echo ('Antecedenteginecologico'); ?></th>
										<th><?php echo ('Ancedenteginecologico1'); ?></th>
										<th><?php echo ('Gestacion'); ?></th>
										<th><?php echo ('Controlprenatal'); ?></th>
										<th><?php echo ('Riesgoembarazo'); ?></th>
										<th><?php echo ('SignoAlarma'); ?></th>
										<th><?php echo ('Saludalternativa'); ?></th>
										<th><?php echo ('Cursovida'); ?></th>
										<th><?php echo ('Ocupacion'); ?></th>
										<th><?php echo ('Estudio'); ?></th>
										<th><?php echo ('Consumospa'); ?></th>
										<th><?php echo ('Consumospa1'); ?></th>
										<th><?php echo ('Riesgopsicosocial'); ?></th>
										<th><?php echo ('Riesgopsicosocial1'); ?></th>
										<th><?php echo ('Sopechamaltrato'); ?></th>
										<th><?php echo ('Canalizacionuno'); ?></th>
										<th><?php echo ('Canalizaciondos'); ?></th>
										<th><?php echo ('Canalizaciontres'); ?></th>
										<th><?php echo ('Canalizacion Id'); ?></th>
										<th><?php echo ('Educacion'); ?></th>
										<th>Opciones</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($canalizacion['Juventudadulto'] as $juventudadulto) : ?>
										<td><?php echo $juventudadulto['id']; ?></td>
										<td><?php echo $juventudadulto['familia_id']; ?></td>
										<td><?php echo $juventudadulto['persona_id']; ?></td>
										<td><?php echo $juventudadulto['tipodocumento']; ?></td>
										<td><?php echo $juventudadulto['numerodoc']; ?></td>
										<td><?php echo $juventudadulto['primerapellido']; ?></td>
										<td><?php echo $juventudadulto['segundoapellido']; ?></td>
										<td><?php echo $juventudadulto['primernombre']; ?></td>
										<td><?php echo $juventudadulto['segundonombre']; ?></td>
										<td><?php echo $juventudadulto['fechanac']; ?></td>
										<td><?php echo $juventudadulto['edad']; ?></td>
										<td><?php echo $juventudadulto['sexo']; ?></td>
										<td><?php echo $juventudadulto['aseguradora']; ?></td>
										<td><?php echo $juventudadulto['regimen']; ?></td>
										<td><?php echo $juventudadulto['estadoafiliacion']; ?></td>
										<td><?php echo $juventudadulto['telefono']; ?></td>
										<td><?php echo $juventudadulto['email']; ?></td>
										<td><?php echo $juventudadulto['discapacidad']; ?></td>
										<td><?php echo $juventudadulto['peso']; ?></td>
										<td><?php echo $juventudadulto['talla']; ?></td>
										<td><?php echo $juventudadulto['indicemasacorporal']; ?></td>
										<td><?php echo $juventudadulto['tensionarterial']; ?></td>
										<td><?php echo $juventudadulto['condicioncronica']; ?></td>
										<td><?php echo $juventudadulto['condicioncronica1']; ?></td>
										<td><?php echo $juventudadulto['esquemavacunacion']; ?></td>
										<td><?php echo $juventudadulto['desparasitacion']; ?></td>
										<td><?php echo $juventudadulto['valoracionmedica']; ?></td>
										<td><?php echo $juventudadulto['tomacitologia']; ?></td>
										<td><?php echo $juventudadulto['saludoral']; ?></td>
										<td><?php echo $juventudadulto['iniciovidasexual']; ?></td>
										<td><?php echo $juventudadulto['metodosanticonceptivos']; ?></td>
										<td><?php echo $juventudadulto['infeccionestransmisionsexual']; ?></td>
										<td><?php echo $juventudadulto['mamografia']; ?></td>
										<td><?php echo $juventudadulto['antecedenteginecologico']; ?></td>
										<td><?php echo $juventudadulto['ancedenteginecologico1']; ?></td>
										<td><?php echo $juventudadulto['gestacion']; ?></td>
										<td><?php echo $juventudadulto['controlprenatal']; ?></td>
										<td><?php echo $juventudadulto['riesgoembarazo']; ?></td>
										<td><?php echo $juventudadulto['signoAlarma']; ?></td>
										<td><?php echo $juventudadulto['saludalternativa']; ?></td>
										<td><?php echo $juventudadulto['cursovida']; ?></td>
										<td><?php echo $juventudadulto['ocupacion']; ?></td>
										<td><?php echo $juventudadulto['estudio']; ?></td>
										<td><?php echo $juventudadulto['consumospa']; ?></td>
										<td><?php echo $juventudadulto['consumospa1']; ?></td>
										<td><?php echo $juventudadulto['riesgopsicosocial']; ?></td>
										<td><?php echo $juventudadulto['riesgopsicosocial1']; ?></td>
										<td><?php echo $juventudadulto['sopechamaltrato']; ?></td>
										<td><?php echo $juventudadulto['canalizacionuno']; ?></td>
										<td><?php echo $juventudadulto['canalizaciondos']; ?></td>
										<td><?php echo $juventudadulto['canalizaciontres']; ?></td>
										<td><?php echo $juventudadulto['canalizacion_id']; ?></td>
										<td><?php echo $juventudadulto['educacion']; ?></td>
										<td class="actions">
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<?php echo ('Acciones'); ?> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><?php echo $this->Html->link(('Ver famlia'),
															array('action' => 'view', $familia['Familia']['id']),
															array(
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li><?php echo $this->Html->link(('Editar hogar'),
															array('action' => 'edit',  $familia['Familia']['id']),
															array(
																'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li><?php echo $this->Html->link(('Agregar hogar'),
															array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id']),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php
														echo $this->Html->link(('Agregar menor de 2 años'),
															array(
																'controller' => 'Primerainfancias',
																'action' => 'add?primerainfancia=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>



													<li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
															array(
																'controller' => 'Primerainfancias',
																'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)

														); ?>
													</li>
													<li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
															array(
																'controller' => 'Infantils',
																'action' => 'add?infantils=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
															array(
																'controller' => 'Adolescencias',
																'action' => 'add?adolescencias=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>

													<li><?php echo $this->Html->link(('Agregar adulto de 18 a 28 años'),
															array(
																'controller' => 'Juventudadultos',
																'action' => 'add?juventudadultos=' . $familia['Familia']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de agregar un adulto de 18 a 28 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														); ?>
													</li>
													<li>
														<?php
														echo $this->Html->link(
															'Editar inf.sociambiental',
															array(
																'controller' => 'sociambientals',
																'action' => 'edit',
																$familia['Sociambiental']['id']
															),
															array(
																'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																'style' => 'color: blue; font-size: 16px; font-weight: bold;'
															)
														);
														?>
													</li>


												</ul>
											</div>
										</td>

										</td>

										</tr>


									<?php endforeach; ?>


								</tbody>
							</table>
						</div>
					</div>

				</div>
				<!-- /.table-responsive -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>

<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			"pagingType": "simple",
			"pageLength": 4,
			responsive: true,
			dom: 'Bfrtip',
			language: {
				searchBuilder: {
					button: 'Filter',
				}
			},
			buttons: [
				'pageLength',
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'colvis',
				'searchBuilder'
			]
		});



	});

	$(document).ready(function() {
		$('#dataTables-f').DataTable({
			"pagingType": "simple",
			"pageLength": 4,
			responsive: true,
			dom: 'Bfrtip',
			language: {
				searchBuilder: {
					button: 'Filter',
				}
			},
			buttons: [
				'pageLength',
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'colvis',
				'searchBuilder'
			]
		});

	});

	$(document).ready(function() {
		$('#dataTables-a').DataTable({
			"pagingType": "simple",
			"pageLength": 4,
			responsive: true,
			dom: 'Bfrtip',
			language: {
				searchBuilder: {
					button: 'Filter',
				}
			},
			buttons: [
				'pageLength',
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'colvis',
				'searchBuilder'
			]
		});

	});

	$(document).ready(function() {
		$('#dataTables-j').DataTable({
			"pagingType": "simple",
			"pageLength": 4,
			responsive: true,
			dom: 'Bfrtip',
			language: {
				searchBuilder: {
					button: 'Filter',
				}
			},
			buttons: [
				'pageLength',
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'colvis',
				'searchBuilder'
			]
		});

	});




	function fnExcelReport() {
		var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
		var textRange;
		var j = 0;
		tab = document.getElementById('dataTables-example'); // id of table

		for (j = 0; j < tab.rows.length; j++) {
			tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
		}

		tab_text = tab_text + "</table>";

		tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
		tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
		tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");

		if (msie > 0 || !!navigator.userAgent.matc(/Trident.*rv\:11\./)) // If Internet Explorer
		{
			txtArea1.document.open("txt/html", "replace");
			txtArea1.document.write(tab_text);
			txtArea1.document.close();
			txtArea1.focus();
			sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
		} else
			sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

		//return (sa);
	}
</script>