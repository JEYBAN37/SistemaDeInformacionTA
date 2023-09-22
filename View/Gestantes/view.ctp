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
														<td><?php echo ($gestante['Gestante']['id']); ?> </td>


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

															<td colspan="6"><?php echo $this->Html->link($gestante['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $gestante['Persona']['id'])); ?></td>
															<td colspan="6"><?php echo $this->Html->link($gestante['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $gestante['Persona']['id'])); ?> <?php echo $this->Html->link($gestante['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $gestante['Familia']['id'])); ?></td>

														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Valoracion En Salud</td>

														</tr>

														<tr>
															<td style=""><?php echo __('Proposito'); ?></td>
															<td colspan="6"></td>
														</tr>
														<tr>
															<td style="">Proposito</td>
															<td colspan="6"></td>
														</tr>

														<tr>
															<td>Lugar</td>

															<td></td>
															<td></td>

															<td colspan="4"></td>

														</tr>

														<tr>
															<td colspan="8">PERSONAS QUE INTERVIENEN EN LA REUNIÓN</td>

														</tr>


														<tr>

															<td colspan="2">NOMBRE</td>
															<td colspan="2">CARGO</td>
															<td colspan="2">INSTITUCION</td>
															<td colspan="2">FIRMA</td>
														</tr>

														<tr>
															<td colspan="2">1.</td>
															<td colspan="2"></td>
															<td colspan="2"></td>
															<td colspan="2"></td>

														</tr>
														<tr>
															<td colspan="2">2.</td>
															<td colspan="2"></td>
															<td colspan="2"></td>
															<td colspan="2"></td>

														</tr>
														<tr>
															<td colspan="2">3.</td>
															<td colspan="2"></td>
															<td colspan="2"></td>
															<td colspan="2"></td>

														</tr>
														<tr>
															<td colspan="8">Anexo registro de asistencia demás participantes</td>


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
															<td colspan="8">ORDEN DEL DÍA</td>
														</tr>

														<tr>
															<td>

															</td>
														</tr>

														<td>COMPROMISOS PREVIOS</td>

														<tr>


															<td>

															</td>
														</tr>


														<td>DESARROLLO DE LA REUNIÓN</td>

														<tr>
															<td>

															</td>
														</tr>

														<td>COMPROMISOS</td>


														<tr>
															<td>


															</td>
														</tr>

														<tr>
															<td>PRÓXIMA CONVOCATORIA</td>
														</tr>
														<tr>
															<td></td>
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



															<td colspan="8">Anexo: </td>

														</tr>

														<tr>

															<td>Responsable de elaboración del acta: </td>
															<td>Dimensión:</td>



														</tr>
														<tr>
															<td>Producto:</td>
															<td>Entorno:</td>

														</tr>
														<tr>
															<td colspan="8">Tarea:</td>
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
															<td></td>
															<td></td>
															<td><a href="javascript:window.print();">Imprimir</a></td>
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


















<div class="gestantes view">
	<h2><?php echo __('Gestante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>

			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gestante['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $gestante['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gestante['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $gestante['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursovida'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['cursovida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controprenatal'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['controprenatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgomaterno'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['riesgomaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionmedica'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['valoracionmedica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paraclinicos'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['paraclinicos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['riesgopsicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eduacionuno'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['eduacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educaciondos'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['educaciondos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gestante'), array('action' => 'edit', $gestante['Gestante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gestante'), array('action' => 'delete', $gestante['Gestante']['id']), array(), __('Are you sure you want to delete # %s?', $gestante['Gestante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gestantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gestante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>