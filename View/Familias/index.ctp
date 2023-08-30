<?php $this->layout = 'printactividades' ?>

<h3><a><img src="../../img/escudosms.png" width="40" height="auto"></a> Plan de Salud Publica de Intervenciones
    Colectivas </h3>



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
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
                        <!-- <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> -->
                    </ul>
                </div>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-sm-12">

                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <thead>
                                    <tr>


                                        <th>id</th>
                                        <th>Encuestador</th>
                                        <th>Info Socioambiental</th>
                                        <th>N° familia</th>
                                        <th>Apellidos familia</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>celular</th>
                                        <!--Dato de tabla sociambiental junto con direccion , apellidos familia,encuestador,fecha y numero familia :) -->
                                        <th>Direccion</th>
                                        <th>Numero de hogares</th>
                                        <th>fecha</th>
                                        <th>Opciones</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($familias as $familia) : ?>
                                    <tr class="gradeA odd">

                                        <td class="sorting_1"><?php echo ($familia['Familia']['id']); ?>
                                        </td>

                                        <td><?php echo $this->Html->link($familia['Sociambiental']['responsable_id'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
                                        </td>
                                        <td><?php echo $this->Html->link($familia['Sociambiental']['id'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
                                        </td>
                                        <td><?php echo ($familia['Sociambiental']['id']); ?></td>
                                        <td><?php echo ($familia['Sociambiental']['apellidosfamilia']); ?></td>
                                        <td><?php echo ($familia['Familia']['nombres']); ?></td>
                                        <td><?php echo ($familia['Familia']['apellidos']); ?></td>
                                        <td><?php echo ($familia['Familia']['celular']); ?></td>
                                        <td><?php echo ($familia['Sociambiental']['direccion']); ?></td>
                                        <td><?php echo ($familia['Sociambiental']['numerohogares']); ?></td>
                                        <td><?php echo $this->Time->format('d-m-Y h:i A', ($familia['Sociambiental']['fecha'])); ?>
                                        </td>

                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(('New Familia'), array('action' => 'addnew')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('List Discapacidades'), array('controller' => 'discapacidades', 'action' => 'index')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('New Discapacidad'), array('controller' => 'discapacidades', 'action' => 'add')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('List Victimas'), array('controller' => 'victimas', 'action' => 'index')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('New Victima'), array('controller' => 'victimas', 'action' => 'add')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?>
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
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
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

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
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