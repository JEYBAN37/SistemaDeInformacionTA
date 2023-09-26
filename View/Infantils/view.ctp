<div class="row" style="justify-content: center;">
	<div class="col-lg-10">
		<div class="panel panel-default">



			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row" style="justify-content: center;">
						<div class=" col-sm-11">

							<table width="100%" class="table table-striped table-bordered table-hover">

								<thead>

									<div class="panel-body">
										<div class="dataTable_wrapper">

											<div class="row">
												<div class="col-sm-11">

													<table width="100%" class="table table-striped table-bordered table-hover">
														<tr>
														<tr>
															<td rowspan="4"><img src="../../img/escudosms.png" width="100" height="auto"></td>
														</tr>
														<tr>
															<td colspan="6">Atencion Primaria En Salud</td>
														</tr>
														<tr>
															<td colspan="6">Nombre de Formato : Datos de Gestantes</td>
														</tr>
														<td>Vigencia 00-00-000</td>
														<td>Version 1.0</td>
														<td>Codigo ID Gestante</td>
														<td><?php echo ($infantil['Infantil']['id']); ?></td>


														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>


									<div class="panel-body">
										<div class="dataTable_wrapper">

											<div class="row" style="justify-content: center;">
												<div class="col-sm-11">

													<table width="100%" class="table table-striped table-bordered table-hover">
														<tr>
															<td colspan="6">Nombre del Menor</td>
															<td colspan="6">Familia Asociada</td>
														</tr>
														<tr>

															<td colspan="6"><?php echo $this->Html->link($infantil['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $infantil['Persona']['id'])); ?></td>
															<td colspan="6"> <?php echo $this->Html->link($infantil['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $infantil['Familia']['id'])); ?></td>

														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Valoracion En Salud</td>

														</tr>

														<tr>
															<td colspan="2"> Talla</td>
															<td colspan="2"> <?php echo ($infantil['Infantil']['talla']); ?></td>
															<td colspan="2">Peso</td>
															<td colspan="2"><?php echo ($infantil['Infantil']['peso']); ?></td>
															<td colspan="2">Indice de Masa Corporal</td>
															<td colspan="2"><?php echo ($infantil['Infantil']['indicemasacorporal']); ?></td>

														</tr>

														<tr>
															<td colspan="2">Tension Arterial</td>
															<td colspan="0"><?php echo ($infantil['Infantil']['tensionarterial']); ?></td>
															<td colspan="2">Discapacidad</td>
															<td colspan="0"><?php echo ($infantil['Infantil']['discapacidad']); ?></td>
															<td colspan="2">Anomalia Congenita</td>
															<td colspan="0"></td>
														</tr>



														<tr>
															<td colspan="4">Enfermedad Cronica</td>
															<td colspan="8"><?php echo ($infantil['Infantil']['condicioncronica']); ?></td>

														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Atencion En Salud</td>

														</tr>
														<tr>
															<td colspan="6" style="text-align: center;">Esquema de Vacunacion</td>
															<td colspan="6" style="text-align: center;"> Asistencia a crecimiento y Desarrollo</td>

														</tr>
														<tr>
															<td colspan="6"> <?php echo ($infantil['Infantil']['esquemavacunacion']); ?></td>
															<td colspan="6"> <?php echo ($infantil['Infantil']['crecimientoydesarrollo']); ?></td>
														</tr>
														<tr>
															<td colspan="2">Salud Oral</td>
															<td colspan="2"> <?php echo ($infantil['Infantil']['higieneoral']); ?></td>
															<td colspan="2">Desparasitacion</td>
															<td colspan="2"><?php echo ($infantil['Infantil']['desparasitacion']); ?></td>
															<td colspan="2"> Diag Desnutricion</td>
															<td colspan="2"><?php echo ($infantil['Infantil']['desnutricion']); ?></td>
														</tr>
														<tr>
															<td colspan="4">Dificultad en Desarrollo</td>
															<td colspan="8">
																<?php echo ($infantil['Infantil']['desarrolloinfantil']); ?></td>
														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Condiciones de Vulnerabilidad</td>

														</tr>
														<tr>
															<td colspan="4">Riesgo de Maltrato</td>
															<td colspan="8"><?php echo ($infantil['Infantil']['sopechamaltrato']); ?></td>
														</tr>
														<tr>
															<td colspan="3">Estudio</td>
															<td colspan="3"><?php echo ($infantil['Infantil']['estudio']); ?></td>
															<td colspan="3">Rendimineto Escolar</td>
															<td colspan="3"><?php echo ($infantil['Infantil']['rendimientoescolar']); ?></td>
														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Plan de Atencion Integral</td>

														</tr>

														<tr>
															<td colspan="3">Canalizacion</td>
															<td colspan="3"><?php echo ($infantil['Infantil']['canalizacionuno']); ?></td>
															<td colspan="3">otro..</td>
															<td colspan="3"><?php echo ($infantil['Infantil']['canalizaciondos']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Educacion</td>
															<td colspan="10"><?php echo ($infantil['Infantil']['eduacionuno']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Otro...</td>
															<td colspan="10"><?php echo ($infantil['Infantil']['educaciondos']); ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>



									<div class="panel-body">
										<div class="dataTable_wrapper">

											<div class="row" style="justify-content: center;">
												<div class="col-sm-11">

													<table width="100%" class="table table-striped table-bordered table-hover">
														<tr>
															<td style="text-align: center;"><a href=" javascript:window.print();">
																	Imprimir
																</a></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>

									<thead>

							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>



<?php
/*$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://code.jquery.com/jquery-3.2.1.min.js',
    'https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);*/
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('textarea').eac(function() {
			this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		}).on('input', function() {
			this.style.height = 'auto';
			this.style.height = (this.scrollHeight) + 'px';
		});

	});
</script>