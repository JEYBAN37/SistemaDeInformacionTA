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
                                                            <td colspan="6">Nombre de Formato : Observaciones</td>
                                                        </tr>
                                                        <td>Vigencia 00-00-2023</td>
                                                        <td>Version 1.0</td>
                                                        <td>Codigo ID Gestante</td>
                                                        <td><?php echo ($observacion['Observacion']['id']); ?></td>


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
                                                            <td colspan="6" class="title">Familia Asociada</td>
                                                            <td colspan="6">
                                                                <?php echo ($observacion['Observacion']['familia_id']); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="12" class="title">Riesgos</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="title">Riesgo en Gestantes</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['riesgogestante']); ?>
                                                            </td>
                                                            <td colspan="3" class="title">Riesgo Primera Infancia</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['riesgoprimerainfancia']); ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="3" class="title">Riesgo De Enfermedades Cronicas</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['riesgoenfermedadcronica']); ?>
                                                            </td>
                                                            <td colspan="3" class="title">Riesgo Enfermedades Cronicas</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['riesgosicosocial']); ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="3" class="title">Riesgo en la Familia</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['riesgofamilia']); ?>
                                                            </td>
                                                            <td colspan="3" class="title">Riesgo en la Vivienda</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['riesgovivienda']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2" class="title">Observacion</td>
                                                            <td colspan="12">
                                                                <?php echo ($observacion['Observacion']['observacion']); ?>
                                                            </td>


                                                        </tr>

                                                        <tr>
                                                            <td colspan="3" class="title">Direccion</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['dir']); ?></td>
                                                            <td colspan="3" class="title">Anexo</td>
                                                            <td colspan="3">
                                                                <?php echo ($observacion['Observacion']['anexo']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2" class="title">Fecha de Registro</td>
                                                            <td colspan="10">
                                                                <?php echo ($observacion['Observacion']['observacion']); ?>
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



<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Observacion'), array('action' => 'edit', $observacion['Observacion']['id'])); ?>
        </li>
        <li><?php echo $this->Form->postLink(__('Delete Observacion'), array('action' => 'delete', $observacion['Observacion']['id']), array(), __('Are you sure you want to delete # %s?', $observacion['Observacion']['id'])); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Observaciones'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Observacion'), array('action' => 'add')); ?> </li>
    </ul>
</div>