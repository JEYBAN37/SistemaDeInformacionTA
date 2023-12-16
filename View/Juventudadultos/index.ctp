<?php $this->layout = 'default_familia' ?>
<!--h3><a><img src="../../img/ciudad.png" width="40" height="auto"></a> Atención Primaria en Salud </h3-->
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco"
        style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Listado de Juvenud Adultos
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
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ID de familia</th>
                                        <th>ID de Persona</th>
                                        <th>Discapacidad</th>
                                        <th>Peso</th>
                                        <th>Talla</th>
                                        <!--Dato de tabla sociambiental junto con direccion , apellidos familia,encuestador,fecha y numero familia :) -->
                                        <th>Indice de Masa Corporal</th>
                                        <th>Tencion Arterial</th>
                                        <th>Condicion Cronica N°1</th>
                                        <th>Condicion Cronica N°2</th>
                                        <th>Acendente Ginecologico</th>
                                        <th>Esquema de Vacunacion</th>
                                        <th>Desparasitacion</th>
                                        <th>Valoracion Medica</th>
                                        <th>valoracionrias</th>
                                        <th>valoracionrias</th>
                                        <th>valoracionrias</th>
                                        <th>Salud Horal</th>
                                        <th>Higiene Horal</th>
                                        <th>inicio Vida Sexual</th>
                                        <th>Medotos Anticoncenptivos</th>
                                        <th>Infeccion de Transmision Sexual</th>
                                        <th>Consumo Sustancias N°1</th>
                                        <th>Consumo Sustancias N°2</th>
                                        <th>Riesgo Psicosocial N°1</th>
                                        <th>Riesgo Psicosocial N°2</th>
                                        <th>Estudio</th>
                                        <th>Rendimiento Escolar</th>
                                        <th>Sospecha Maltrato</th>
                                        <th>Canalizacion N°1 </th>
                                        <th>Canalizacion N°2 </th>
                                        <th>Educacion N°1 </th>
                                        <th>Educacion N°2 </th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($juventudadultos as $juventudadulto) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1">
                                            <?php echo ($juventudadulto['Juventudadulto']['id']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($juventudadulto['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $juventudadulto['Persona']['id'])); ?>
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['discapacidad']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['peso']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['talla']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['tensionarterial']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['condicioncronica']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['condicioncronica1']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['ancededenteginecologico']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['desparasitacion']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['valoracionmedica']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['valoracionrias']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['valoracionrias1']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['tomacitologia']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['saludoral']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['higieneoral']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['consumospa']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['consumospa1']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['estudio']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['rendimientoescolar']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['canalizacionuno']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['canalizaciondos']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['eduacionuno']); ?>&nbsp;</td>
                                        <td><?php echo ($juventudadulto['Juventudadulto']['educaciondos']); ?>&nbsp;
                                        </td>
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
															echo $this->Html->link(('Agregar menor de 2 años'),
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
                                                    <li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
																array(
																	'controller' => 'Infantils',
																	'action' => 'add?infantils=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
                                                    </li>
                                                    <li>
                                                        <?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
																array(
																	'controller' => 'Adolescencias',
																	'action' => 'add?adolescencias=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>

                                                    <li><?php echo $this->Html->link(('Agregar adulto de 18 a 28 años'),
																array(
																	'controller' => 'Juventudadultos',
																	'action' => 'add?juventudadultos=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un adulto de 18 a 28 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
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