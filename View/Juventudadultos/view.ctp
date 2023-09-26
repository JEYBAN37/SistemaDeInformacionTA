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
														<td>Codigo ID Adultos</td>
														<td><?php echo ($juventudadulto['Juventudadulto']['id']); ?></td>
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

															<td colspan="6"><?php echo $this->Html->link($juventudadulto['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $juventudadulto['Persona']['id'])); ?></td>
															<td colspan="6"> <?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?></td>

														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Valoracion En Salud</td>

														</tr>

														<tr>
															<td colspan="2"> Talla</td>
															<td colspan="2"> <?php echo ($juventudadulto['Juventudadulto']['talla']); ?></td>
															<td colspan="2">Peso</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['peso']); ?></td>
															<td colspan="2">Indice de Masa Corporal</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['indicemasacorporal']); ?></td>

														</tr>

														<tr>
															<td colspan="2">Tension Arterial</td>
															<td colspan="4"><?php echo ($juventudadulto['Juventudadulto']['tensionarterial']); ?></td>
															<td colspan="2">Discapacidad</td>
															<td colspan="4"><?php echo ($juventudadulto['Juventudadulto']['discapacidad']); ?></td>

														</tr>



														<tr>
															<td colspan="2">Enfermedad Cronica</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['condicioncronica']); ?></td>
															<td colspan="2">otro...</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['condicioncronica1']); ?></td>
															<td colspan="2">Antecedente Ginecologico</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['ancededenteginecologico']); ?></td>
														</tr>
														<tr>

															<td colspan="2">Valoracion Medica</td>
															<td colspan="10"><?php echo ($juventudadulto['Juventudadulto']['valoracionmedica']); ?></td>
														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Atencion En Salud</td>

														</tr>
														<tr>
															<td colspan="6" style="text-align: center;">Esquema de Vacunacion</td>
															<td colspan="6" style="text-align: center;">Desparasitacion</td>

														</tr>
														<tr>
															<td colspan="6"><?php echo ($juventudadulto['Juventudadulto']['esquemavacunacion']); ?></td>
															<td colspan="6"><?php echo ($juventudadulto['Juventudadulto']['desparasitacion']); ?></td>
														</tr>
														<tr>
															<td colspan="2">Salud Oral</td>
															<td colspan="4"><?php echo ($juventudadulto['Juventudadulto']['higieneoral']); ?></td>
															<td colspan="2">Higiene Oral</td>
															<td colspan="4"><?php echo ($juventudadulto['Juventudadulto']['saludoral']); ?></td>

														</tr>
														<tr>
															<td colspan="2">Valoracionrias</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['valoracionrias']); ?></td>
															<td colspan="2">Tomacitologia</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['tomacitologia']); ?></td>
															<td colspan="2">otro..</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['valoracionrias1']); ?></td>
														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Salud Sexual y Reproductiva</td>

														</tr>

														<tr>
															<td colspan="2">Inicio vida Sexual</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['iniciovidasexual']); ?></td>
															<td colspan="2">Metodods Anticonceptivos</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?></td>
															<td colspan="2">Infecciones de trasmision Sexual</td>
															<td colspan="2"><?php echo ($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?></td>
														</tr>


														<tr>
															<td colspan="12" style="text-align: center;">Condiciones de Vulnerabilidad</td>

														</tr>
														<tr>
															<td colspan="4">Riesgo de Maltrato</td>
															<td colspan="8"><?php echo ($juventudadulto['Juventudadulto']['sopechamaltrato']); ?></td>
														</tr>


														<tr>
															<td colspan="3">Riesgo Psicosocial</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?></td>
															<td colspan="3">otro..</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?></td>
														</tr>
														<tr>
															<td colspan="3">Consume sustancias Psicoactivas</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['consumospa']); ?></td>
															<td colspan="3">otro..</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['consumospa1']); ?></td>
														</tr>
														<tr>
															<td colspan="3">Estudio</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['estudio']); ?></td>
															<td colspan="3">Rendimineto Escolar</td>
															<td colspan="3"> <?php echo ($juventudadulto['Juventudadulto']['rendimientoescolar']); ?></td>
														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Plan de Atencion Integral</td>

														</tr>

														<tr>
															<td colspan="3">Canalizacion</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['canalizacionuno']); ?></td>
															<td colspan="3">otro..</td>
															<td colspan="3"><?php echo ($juventudadulto['Juventudadulto']['canalizaciondos']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Educacion</td>
															<td colspan="10"><?php echo ($juventudadulto['Juventudadulto']['eduacionuno']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Otro...</td>
															<td colspan="10"><?php echo ($juventudadulto['Juventudadulto']['educaciondos']); ?></td>
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
<li><?php echo $this->Html->link(__('Edit Juventudadulto'), array('action' => 'edit', $juventudadulto['Juventudadulto']['id'])); ?> </li>