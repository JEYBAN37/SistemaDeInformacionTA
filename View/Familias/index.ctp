<?php $this->layout = 'default_familia' ?>
<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '';
$userS = 'root';
$passS = '';
$bd = 'fichafamiliar';
?>

<!--h3><a><img src="../../img/ciudad.png" width="40" height="auto"></a> Atención Primaria en Salud </h3-->
<div class="col-12 text-center">
    <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Atención Primaria en Salud
    </h1>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--div class="panel-heading">
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
                        < <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> >
            </ul>
            </div>

         </div-->
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
                                        <th>Familia</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>celular</th>
                                        <!--Dato de tabla sociambiental junto con direccion , apellidos familia,encuestador,fecha y numero familia :) -->
                                        <th>Direccion</th>
                                        <th>N° de hogar</th>
                                        <th>Opciones</th>
                                        <th>fecha</th>



                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($familias as $familia) : ?>
                                    <tr class="gradeA odd">

                                        <td class="sorting_1"><?php echo ($familia['Familia']['id']); ?>
                                        </td>

                                        <td><?php
                                                //echo $plsesion['responsable_id']; 
                                                $link = mysqli_connect($serv, $userS, $passS);
                                                mysqli_select_db($link, $bd);
                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                $result = mysqli_query($link, "SELECT nombres FROM responsables WHERE id = " . $familia['Sociambiental']['responsable_id']);
                                                while ($fila = mysqli_fetch_array($result)) {
                                                    echo $fila['nombres'];

                                                    mysqli_close($link);
                                                }
                                                ?></td>

                                        </td>

                                        </td>

                                        <td><?php echo $this->Html->link($familia['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
                                        <td><?php echo ($familia['Familia']['nombres']); ?></td>
                                        <td><?php echo ($familia['Familia']['apellidos']); ?></td>
                                        <td><?php echo ($familia['Familia']['celular']); ?></td>
                                        <td><?php echo ($familia['Sociambiental']['direccion']); ?></td>
                                        <td><?php echo ($familia['Familia']['hogar']); ?></td>


                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(('Ver famlia'),
                                                                array('action' => 'view', $familia['Familia']['id']),
                                                                array(
                                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Editar hogar'),
                                                                array('action' => 'edit',  $familia['Familia']['id']),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Agregar hogar'),
                                                                array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id']),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
                                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li>
                                                        <?php
                                                            echo $this->Html->link(('Agregar mennor de 2 años'),
                                                                array(
                                                                    'controller' => 'Primerainfancias',
                                                                    'action' => 'add?primerainfancia=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                                )
                                                            ); ?>
                                                    </li>



                                                    <li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
                                                                array(
                                                                    'controller' => 'Primerainfancias',
                                                                    'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                                )

                                                            ); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'), array('controller' => 'Infantils', 'action' => 'add?infancia=' . $familia['Familia']['id'])); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Agregar menor de 12 a 17 años'), array('controller' => 'Adolescencias', 'action' => 'add?adolescencia=' . $familia['Familia']['id'])); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Agregar menor de 18 a 28 años'), array('controller' => 'Juventudadultos', 'action' => 'add?juevntud=' . $familia['Familia']['id'])); ?>
                                                    </li>


                                                    <li>
                                                        <?php
                                                            echo $this->Html->link(
                                                                'Editar inf.sociambiental',
                                                                array(
                                                                    'controller' => 'sociambientals',
                                                                    'action' => 'edit',
                                                                    $familia['Sociambiental']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
                                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                                )
                                                            );
                                                            ?>
                                                    </li>


                                                </ul>
                                            </div>
                                        </td>
                                        <td><?php echo $this->Time->format('d-m-Y h:i A', ($familia['Sociambiental']['fecha'])); ?>
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