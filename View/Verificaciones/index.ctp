


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
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'verificaciones', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link(('Nuevo registro'),  array('controller' => 'verificaciones', 'action' => 'add')); ?>
                            
                        </li>
                         <li class="divider"></li>
                         <li><a href=""><i></i> <?= $usr = $this->Session->read("usr");
                                                    echo $this->Html->link("Cerrar Sesión", "/users/salir", array());
                                                    ?> </a>
                         </li>
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
                                            <th >Instrumento/Criterio</th >
                                            <th>% asignado</th>
                                            <th>% alcanzado</th>
                                            <th ># historias</th >
                                            <th >Observacion</th >
                                            <th >Responsable</th>
                                            <th >Creado</th >
                                            
                                            <th >Acciones</th >
                                            <th >Puntaje total hcl_1</th >
                                            <th >Puntaje total hcl_2</th >
                                            <th >Puntaje total hcl_3</th >
                                            <th >Puntaje total hcl_4</th >
                                            <th >Puntaje total hcl_5</th >
                                            <th >Puntaje total hcl_6</th >
                                            <th >Puntaje total hcl_7</th >
                                            <th >Puntaje total hcl_8</th >
                                            <th >Puntaje total hcl_9</th >
                                            <th >Puntaje total hcl_10</th >
                                            <th >Puntaje total hcl_11</th >
                                            <th >Puntaje total hcl_12</th >
                                            <th >Puntaje total hcl_13</th >
                                            <th >Puntaje total hcl_14</th >
                                            <th >Puntaje total hcl_15</th >
                                            <th >Puntaje total CheckList_1</th >
                                            <th >Puntaje total CheckList_2</th >
                                            <th >Puntaje total CheckList_3</th >
                                            <th >Puntaje total CheckList_4</th >
                                            <th >Puntaje total CheckList_5</th >
                                           
                                             
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php foreach ($verificaciones as $verificacion) : ?>
                                            <tr class="gradeA odd" >

                                                <td class="sorting_1"><?php echo ($verificacion['Verificacion']['id']); ?> 
                                                </td>

                                                <td> <?php echo $this->Html->link($verificacion['Dimension']['nombre_dimension'], array('controller' => 'dimensiones', 'action' => 'view', $verificacion['Dimension']['id'])); ?></td>

                                                 <!--td><?php echo $this->Html->link($verificacion['Instrumento']['nombre_instrumento'], array('controller' => 'instrumentos', 'action' => 'view', $verificacion['Instrumento']['id'])); ?>&nbsp;</td-->

                                               
                                                <td class="center"><?php echo $this->Html->link($verificacion['Criterio']['criterio'], array('controller' => 'criterios', 'action' => 'view', $verificacion['Criterio']['id'])); ?></td>

                                                 <!--td class="center"><?php echo $this->Html->link($verificacion['Criterio']['porcentajeasignado'], array('controller' => 'criterios', 'action' => 'view', $verificacion['Criterio']['id'])); ?></td-->

                                                     <td><?php echo h($verificacion['Verificacion']['porcentajeprogramado']); ?>&nbsp;</td>
                                                 <td>
                                                    <div>
                                                        <p>
                                                            <span class="pull-right text-muted"><?php echo ($verificacion['Verificacion']['porcentajealcanzado']); ?>%</span>
                                                        </p>
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar  progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($verificacion['Verificacion']['porcentajealcanzado']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($verificacion['Verificacion']['porcentajealcanzado']); ?>%">
                                                                <span class="sr-only"><?php echo ($verificacion['Verificacion']['porcentajealcanzado']); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                 
                                                   
                                              

                                              
                                                
                                                <td><?php echo h($verificacion['Verificacion']['numero_historias']); ?>&nbsp;</td>
                                                 

                                                  <td><?php echo h($verificacion['Verificacion']['observacion']); ?>&nbsp;</td>
                                                  <td><?php echo $this->Html->link($verificacion['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $verificacion['Responsable']['id'])); ?>&nbsp;</td>
                                                  <td><?php echo h($verificacion['Verificacion']['created']); ?>&nbsp;</td>
                                                


                                             
                                                <td class="actions">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <!--li><?php echo $this->Html->link(('Ver'), array('action' => 'view', $verificacion['Verificacion']['id'])); ?></li-->
                                                            <li><?php echo $this->Html->link(('Editar'), array('action' => 'edit', $verificacion['Verificacion']['id'])); ?></li>
                                                           
                                                        </ul>
                                                    </div>
                                                </td>
                                                
                                              
                                                <td><?php echo h($verificacion['Verificacion']['historia1']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia2']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia3']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia4']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia5']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia6']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia7']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia8']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia9']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia10']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia11']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia12']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia13']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia14']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['historia15']); ?>&nbsp;</td>
												<td><?php echo h($verificacion['Verificacion']['valorchecklist1']); ?>&nbsp;</td>
                                                <td><?php echo h($verificacion['Verificacion']['valorchecklist2']); ?>&nbsp;</td>
                                                <td><?php echo h($verificacion['Verificacion']['valorchecklist3']); ?>&nbsp;</td>
                                                <td><?php echo h($verificacion['Verificacion']['valorchecklist4']); ?>&nbsp;</td>
                                                <td><?php echo h($verificacion['Verificacion']['valorchecklist5']); ?>&nbsp;</td>
                                             							
												                                                                                               
                                            
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





