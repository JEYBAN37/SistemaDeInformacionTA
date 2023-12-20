<?php $this->layout = 'default_familia' ?>

<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
	<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
		Listado Registros Socioambientales
	</h1>
</div>

<div class="row" style="margin: 5px;">
	<div class="col-lg-12" style="justify-items: center; ">
		<div class="panel panel-default">
			<!-- /.panel-heading -->
			<div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
				<div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
					<div class=" row">
						<div class="col-sm-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th></th>
										<th><?php echo $this->Paginator->sort('id'); ?></th>
										<th><?php echo $this->Paginator->sort('fecha'); ?></th>
										<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
										<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
										<th><?php echo $this->Paginator->sort('direccion'); ?></th>
										<th><?php echo $this->Paginator->sort('vivienda'); ?></th>
										<th><?php echo $this->Paginator->sort('estrato'); ?></th>
										<th><?php echo $this->Paginator->sort('numerohabitantes'); ?></th>
										<th><?php echo $this->Paginator->sort('numerohogares'); ?></th>
										<th><?php echo $this->Paginator->sort('pared'); ?></th>
										<th><?php echo $this->Paginator->sort('estadoparedes'); ?></th>
										<th><?php echo $this->Paginator->sort('piso'); ?></th>
										<th><?php echo $this->Paginator->sort('techo'); ?></th>
										<th><?php echo $this->Paginator->sort('estadotecho'); ?></th>
										<th><?php echo $this->Paginator->sort('dormitorios'); ?></th>
										<th><?php echo $this->Paginator->sort('hacinamiento'); ?></th>
										<th><?php echo $this->Paginator->sort('riesgoexterno'); ?></th>
										<th><?php echo $this->Paginator->sort('otroriesgo'); ?></th>
										<th><?php echo $this->Paginator->sort('actividad'); ?></th>
										<th><?php echo $this->Paginator->sort('acceso'); ?></th>
										<th><?php echo $this->Paginator->sort('apellidosfamilia'); ?></th>
										<th><?php echo $this->Paginator->sort('transporte'); ?></th>
										<th><?php echo $this->Paginator->sort('riesgo'); ?></th>
										<th><?php echo $this->Paginator->sort('otroriesgohogar'); ?></th>
										<th><?php echo $this->Paginator->sort('aguaservicio'); ?></th>
										<th><?php echo $this->Paginator->sort('aguatratamiento'); ?></th>
										<th><?php echo $this->Paginator->sort('aguasiministro'); ?></th>
										<th><?php echo $this->Paginator->sort('aguaalmacenamiento'); ?></th>
										<th><?php echo $this->Paginator->sort('diposicionexcretas'); ?></th>
										<th><?php echo $this->Paginator->sort('aguaresiduales'); ?></th>
										<th><?php echo $this->Paginator->sort('basura'); ?></th>
										<th><?php echo $this->Paginator->sort('reciclaje'); ?></th>
										<th><?php echo $this->Paginator->sort('mascotas'); ?></th>
										<th><?php echo $this->Paginator->sort('otramascota'); ?></th>
										<th><?php echo $this->Paginator->sort('desparasitamascotas'); ?></th>
										<th><?php echo $this->Paginator->sort('vacunamascotas'); ?></th>
										<th><?php echo $this->Paginator->sort('cuidadomascotas'); ?></th>
										<th><?php echo $this->Paginator->sort('vector'); ?></th>
										<th>Opciones</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($sociambientals as $sociambiental) : ?>
										<tr class="gradeA odd">
											<td></td>
											<td><?php echo h($sociambiental['Sociambiental']['id']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['fecha']); ?>&nbsp;</td>
											<td>
												<?php echo $this->Html->link($sociambiental['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $sociambiental['Responsable']['id'])); ?>
											</td>
											<td>
												<?php echo $this->Html->link($sociambiental['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $sociambiental['Ubicacion']['id'])); ?>
											</td>
											<td><?php echo h($sociambiental['Sociambiental']['direccion']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['vivienda']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['estrato']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['numerohabitantes']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['numerohogares']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['pared']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['estadoparedes']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['piso']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['techo']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['estadotecho']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['dormitorios']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['hacinamiento']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['riesgoexterno']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['otroriesgo']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['actividad']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['acceso']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['apellidosfamilia']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['transporte']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['riesgo']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['otroriesgohogar']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['aguaservicio']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['aguatratamiento']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['aguasiministro']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['aguaalmacenamiento']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['diposicionexcretas']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['aguaresiduales']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['basura']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['reciclaje']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['mascotas']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['otramascota']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['desparasitamascotas']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['vacunamascotas']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['cuidadomascotas']); ?>&nbsp;</td>
											<td><?php echo h($sociambiental['Sociambiental']['vector']); ?>&nbsp;</td>
											<td class="actions">
												<div class="btn-group">
													<button type="button" class="my-button" data-toggle="dropdown">
														<?php echo ('Acciones'); ?> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><?php echo $this->Html->link(('Ver datos Socioambientales'),
																array('action' => 'view', $sociambiental['Sociambiental']['id']),
																array(
																	'style' => 'font-size: 14px;'
																)
															); ?>
														</li>
														<li><?php echo $this->Html->link(('Editar datos Socioambientales'),
																array('action' => 'edit',  $sociambiental['Sociambiental']['id']),
																array(
																	'style' => 'font-size: 14px;'
																)
															); ?>
														</li>
														<li><?php echo $this->Html->link(('Agregar Familia'),
																array('controller' => 'familias', 'action' => 'add?hogar=' . $sociambiental['Sociambiental']['id']),
																array(
																	'style' => 'font-size: 14px;'
																)
															); ?>
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

	<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				"pagingType": "simple",
				"pageLength": 5,
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

	<style>
		/* Personaliza el botón desplegable en DataTables Responsive */
		table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before {
			
			left: 14px;
		}

	</style>