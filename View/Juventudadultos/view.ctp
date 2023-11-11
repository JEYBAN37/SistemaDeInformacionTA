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
															<td rowspan="4" style="text-align: center; vertical-align: middle;">

																<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWooVnP-ggyJ3x_xZOgBlBAHas5_sVFyR16boEFOv24Q&s" style="display: block; margin: 0 auto;" width="100px" height="auto">

															</td>
														</tr>
														<tr>
															<td colspan="6">Atención Primaria En Salud</td>
														</tr>
														<tr>
															<td colspan="6">Nombre de Formato: Registro Joven-adulto
															</td>
														</tr>
														<td>Vigencia 00-00-000</td>
														<td>Version 1.0</td>
														<td>Codigo ID Adultos</td>
														<td><?php echo ($juventudadulto['Juventudadulto']['id']); ?>
														</td>
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
															<td colspan="3">Nombre del Menor </td>
															<td colspan="3">Documento </td>
															<td colspan="3">Aseguradora </td>
															<td colspan="3">Familia Asociada </td>
														</tr>
														<tr>

															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['primernombre'] . ' ' . $juventudadulto['Juventudadulto']['segundonombre'] . ' ' . $juventudadulto['Juventudadulto']['primerapellido'] . ' ' . $juventudadulto['Juventudadulto']['segundoapellido']); ?>
															</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['tipodocumento'] . ' ' . $juventudadulto['Juventudadulto']['numerodoc']); ?>
															</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['aseguradora'] . ' ' . $juventudadulto['Juventudadulto']['regimen']); ?>
															</td>
															<td colspan="3">
																<?php echo $this->Html->link($juventudadulto['Familia']['nombresFamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
															</td>

														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Valoración En
																Salud</td>

														</tr>

														<tr>
															<td colspan="2"> Talla</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['talla']); ?>
															</td>
															<td colspan="2">Peso</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['peso']); ?>
															</td>
															<td colspan="2">Indice de Masa Corporal</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>
															</td>

														</tr>

														<tr>
															<td colspan="2">Tensión Arterial</td>
															<td colspan="4">
																<?php echo ($juventudadulto['Juventudadulto']['tensionarterial']); ?>
															</td>
															<td colspan="2">Discapacidad</td>
															<td colspan="4">
																<?php echo ($juventudadulto['Juventudadulto']['discapacidad']); ?>
															</td>

														</tr>



														<tr>
															<td colspan="2">Enfermedad Crónica</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['condicioncronica']); ?>
															</td>
															<td colspan="2">Enfermedad Crónica</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['condicioncronica1']); ?>
															</td>
															<td colspan="2">Antecedente Ginecológico</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['antecedenteginecologico']); ?>
															</td>
														</tr>
														<tr>

															<td colspan="2">Valoración Medica</td>
															<td colspan="10">
																<?php echo ($juventudadulto['Juventudadulto']['valoracionmedica']); ?>
															</td>
														</tr>

														<tr>
															<td colspan="12" style="text-align: center;">Atención En
																Salud</td>

														</tr>
														<tr>
															<td colspan="6" style="text-align: center;">Esquema de
																Vacunación</td>
															<td colspan="6" style="text-align: center;">Desparasitación
															</td>

														</tr>
														<tr>
															<td colspan="6">
																<?php echo ($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>
															</td>
															<td colspan="6">
																<?php echo ($juventudadulto['Juventudadulto']['desparasitacion']); ?>
															</td>
														</tr>
														<tr>
															<td colspan="2">Salud Oral</td>
															<td colspan="4">
																<?php echo ($juventudadulto['Juventudadulto']['higieneoral']); ?>
															</td>
															<td colspan="2">Higiene Oral</td>
															<td colspan="4">
																<?php echo ($juventudadulto['Juventudadulto']['saludoral']); ?>
															</td>

														</tr>
														<tr>
															<td colspan="2">Valoración RIAS</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['valoracionrias']); ?>
															</td>

															<td colspan="2">Valoración RIAS</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['valoracionrias1']); ?>
															</td>
															<td colspan="2">Toma citología</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['tomacitologia']); ?>
															</td>
														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Salud Sexual y
																Reproductiva</td>

														</tr>

														<tr>
															<td colspan="2">Inicio vida Sexual</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>
															</td>
															<td colspan="2">Metodos Anticonceptivos</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>
															</td>
															<td colspan="2">Infecciones de trasmision Sexual</td>
															<td colspan="2">
																<?php echo ($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>
															</td>
														</tr>


														<tr>
															<td colspan="12" style="text-align: center;">Condiciones de
																Vulnerabilidad</td>

														</tr>
														<tr>
															<td colspan="4">Riesgo de Maltrato</td>
															<td colspan="8">
																<?php echo ($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>
															</td>
														</tr>


														<tr>
															<td colspan="3">Riesgo Psicosocial</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>
															</td>
															<td colspan="3">otro..</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>
															</td>
														</tr>
														<tr>
															<td colspan="3">Consumo sustancias Psicoactivas</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['consumospa']); ?>
															</td>
															<td colspan="3">Consumo sustancias Psicoactivas</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['consumospa1']); ?>
															</td>
														</tr>
														<tr>
															<td colspan="3">Estudio</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['estudio']); ?>
															</td>
															<td colspan="3">Rendimineto Escolar</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['rendimientoescolar']); ?>
															</td>
														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Plan de
																Atención Integral</td>

														</tr>

														<tr>
															<td colspan="3">Canalización uno</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['canalizacionuno']); ?>
															</td>
															<td colspan="3">Canalización dos</td>
															<td colspan="3">
																<?php echo ($juventudadulto['Juventudadulto']['canalizaciondos']); ?>
															</td>
														</tr>
														<tr>
															<td colspan="2">Canalización tres</td>
															<td colspan="10">
																<?php echo ($juventudadulto['Juventudadulto']['canalizaciontres']); ?>
															</td>
														</tr>

														<tr>
															<td colspan="2">Educación</td>
															<td colspan="10">
																<?php echo ($juventudadulto['Juventudadulto']['educacion']); ?>
															</td>
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