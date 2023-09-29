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
														<td><?php echo ($primerainfancia['Primerainfancia']['id']); ?> </td>


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

															<td colspan="6"> <?php echo $this->Html->link($primerainfancia['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $primerainfancia['Persona']['id'])); ?></td>
															<td colspan="6"> <?php echo $this->Html->link($primerainfancia['Familia']['id'], array('controller' => 'familias', 'action' => 'view', $primerainfancia['Familia']['id'])); ?></td>

														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Valoracion En Salud</td>

														</tr>

														<tr>
															<td colspan="2"> Talla</td>
															<td colspan="2"> <?php echo ($primerainfancia['Primerainfancia']['talla']); ?></td>
															<td colspan="2">Peso</td>
															<td colspan="2"><?php echo ($primerainfancia['Primerainfancia']['peso']); ?></td>
															<td colspan="2"> Bajo de Peso</td>
															<td colspan="2"><?php echo ($primerainfancia['Primerainfancia']['bajopeso']); ?></td>

														</tr>

														<tr>
															<td colspan="2">Tension Arterial</td>
															<td colspan="0"><?php echo ($primerainfancia['Primerainfancia']['tensionarterial']); ?></td>
															<td colspan="2">Discapacidad</td>
															<td colspan="0"><?php echo ($primerainfancia['Primerainfancia']['discapacidad']); ?></td>
															<td colspan="2">Prematuro</td>
															<td colspan="0"><?php echo ($primerainfancia['Primerainfancia']['prematuro']); ?></td>
															<td colspan="2">Anomalia Congenita</td>
															<td colspan="0"> <?php echo ($primerainfancia['Primerainfancia']['condicioncronica']); ?></td>
														</tr>

														<tr>
															<td colspan="2"> Perimetro Cefalico</td>
															<td colspan=""> <?php echo ($primerainfancia['Primerainfancia']['perimetrocefalico']); ?></td>
															<td colspan="2">Perimetro Branquial</td>
															<td colspan=""><?php echo ($primerainfancia['Primerainfancia']['perimetrobraquial']); ?></td>
															<td colspan="2"> Perimetro Cintura</td>
															<td colspan=""> <?php echo ($primerainfancia['Primerainfancia']['perimetrocintura']); ?></td>
															<td colspan="2"> Perimetro Cadera</td>
															<td colspan=""><?php echo ($primerainfancia['Primerainfancia']['perimetrocadera']); ?></td>

														</tr>

														<tr>
															<td colspan="4">Enfermedad Cronica</td>
															<td colspan="8"> <?php echo ($primerainfancia['Primerainfancia']['condicioncronica']); ?></td>

														</tr>
														<tr>
															<td colspan="4">Alimentacion</td>
															<td colspan="8"><?php echo ($primerainfancia['Primerainfancia']['lactanciamaterna']); ?></td>
														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Atencion En Salud</td>

														</tr>
														<tr>
															<td colspan="6" style="text-align: center;">Esquema de Vacunacion</td>
															<td colspan="6" style="text-align: center;"> Asistencia a crecimiento y Desarrollo</td>

														</tr>
														<tr>
															<td colspan="6"> <?php echo ($primerainfancia['Primerainfancia']['esquemavacunacion']); ?></td>
															<td colspan="6"> <?php echo ($primerainfancia['Primerainfancia']['crecimientoydesarrollo']); ?></td>
														</tr>
														<tr>
															<td colspan="2">Salud Oral</td>
															<td colspan="2"> <?php echo ($primerainfancia['Primerainfancia']['higieneoral']); ?></td>
															<td colspan="2">Desparasitacion</td>
															<td colspan="2"> <?php echo ($primerainfancia['Primerainfancia']['desparasitacion']); ?></td>
															<td colspan="2"> Diag Desnutricion</td>
															<td colspan="2"><?php echo ($primerainfancia['Primerainfancia']['desnutricion']); ?></td>
														</tr>
														<tr>
															<td colspan="4">Dificultad en Desarrollo</td>
															<td colspan="8">>
																<?php echo ($primerainfancia['Primerainfancia']['desarrolloinfantil']); ?></td>
														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Condiciones de Vulnerabilidad</td>

														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Plan de Atencion Integral</td>

														</tr>

														<tr>
															<td colspan="3">Canalizacion</td>
															<td colspan="3"> <?php echo ($primerainfancia['Primerainfancia']['canalizacionuno']); ?></td>
															<td colspan="3">Canalizacion dos</td>
															<td colspan="3"> <?php echo ($primerainfancia['Primerainfancia']['canalizaciondos']); ?></td>
														</tr>
														<tr>
															<td colspan="2">Otro...</td>
															<td colspan="10"><?php echo ($primerainfancia['Primerainfancia']['canalizaciontres']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Educacion</td>
															<td colspan="10"><?php echo ($primerainfancia['Primerainfancia']['eduacionuno']); ?></td>
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






























<dt><?php echo __('Eda'); ?></dt>
<dd>
	<?php echo ($primerainfancia['Primerainfancia']['eda']); ?>
	&nbsp;
</dd>
<dt><?php echo __('Era'); ?></dt>
<dd>
	<?php echo ($primerainfancia['Primerainfancia']['era']); ?>
	&nbsp;
</dd>