


<?php $this->layout = 'printactividades' ?>

<h3>Auditorias SMS - Salud Publica</h3>



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Evaluación</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
                        <li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'nuebus')); ?></li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
                    </ul>
                </div>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr >                                       
                                            
                                            <th >id</th >
                                            <th >Dimension</th >
                                            <th >Instrumento</th >
                                            <th >Criterio</th >
                                          
                                            <th ># historias</th >
                                            <th >Observacion</th >
                                            <th >Responsable</th>
                                            <th >Creado</th >
                                            <th >Modificado</th >
                                            <th >Acciones</th >
                                            <th >hcl_1</th >
                                            <th >hcl_2</th >
                                            <th >hcl_3</th >
                                            <th >hcl_4</th >
                                            <th >hcl_5</th >
                                            <th >hcl_6</th >
                                            <th >hcl_7</th >
                                            <th >hcl_8</th >
                                            <th >hcl_9</th >
                                            <th >hcl_10</th >
                                            <th >hcl_11</th >
                                            <th >hcl_12</th >
                                            <th >hcl_13</th >
                                            <th >hcl_14</th >
                                            <th >hcl_15</th >
                                             
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php foreach ($verificaciones as $verificacion) : ?>
                                            <tr class="gradeA odd" >

                                                <td class="sorting_1"><?php echo ($verificacion['Verificacion']['id']); ?> 
                                                </td>

                                                <td> <?php echo $this->Html->link($verificacion['Dimension']['nombre_dimension'], array('controller' => 'dimensiones', 'action' => 'view', $verificacion['Dimension']['id'])); ?></td>

                                                 <td><?php echo $this->Html->link($verificacion['Instrumento']['nombre_instrumento'], array('controller' => 'instrumentos', 'action' => 'view', $verificacion['Instrumento']['id'])); ?>&nbsp;</td>

                                               
                                                <td class="center"><?php echo $this->Html->link($verificacion['Criterio']['criterio'], array('controller' => 'criterios', 'action' => 'view', $verificacion['Criterio']['id'])); ?></td>
                                              

                                              
                                                
                                                <td><?php echo h($verificacion['Verificacion']['numero_historias']); ?>&nbsp;</td>
                                                 

                                                  <td><?php echo h($verificacion['Verificacion']['observacion']); ?>&nbsp;</td>
                                                  <td><?php echo $this->Html->link($verificacion['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $verificacion['Responsable']['id'])); ?>&nbsp;</td>
                                                  <td><?php echo h($verificacion['Verificacion']['created']); ?>&nbsp;</td>
                                                  <td><?php echo h($verificacion['Verificacion']['modified']); ?>&nbsp;</td>


                                             
                                                <td class="actions">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><?php echo $this->Html->link(('Ver'), array('action' => 'view', $verificacion['Verificacion']['id'])); ?></li>
                                                            <li><?php echo $this->Html->link(('Editar'), array('action' => 'edit', $verificacion['Verificacion']['id'])); ?></li>
                                                           
                                                        </ul>
                                                    </div>
                                                </td>
                                                
                                              
                                                <td><?php echo h($verificacion['Verificacion']['hcl_1']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_2']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_3']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_4']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_5']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_6']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_7']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_8']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_9']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_10']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_11']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_12']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_13']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_14']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['hcl_15']); ?>&nbsp;</td>
												
										
												
                                                
                                                
                                            
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
            responsive: true
        });
    });

    
</script>
