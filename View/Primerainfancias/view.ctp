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

                                                    <table width="100%"
                                                        class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                        <tr>
                                                            <td rowspan="4"
                                                                style="text-align: center; vertical-align: middle;">

                                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWooVnP-ggyJ3x_xZOgBlBAHas5_sVFyR16boEFOv24Q&s"
                                                                    style="display: block; margin: 0 auto;"
                                                                    width="100px" height="auto">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="6">Atención Primaria En Salud</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="6">Nombre de Formato : Registro primera
                                                                infancia
                                                            </td>
                                                        </tr>
                                                        <td>Vigencia 00-00-000</td>
                                                        <td>Version 1.0</td>
                                                        <td>Codigo ID Primera Infancia</td>
                                                        <td><?php echo ($primerainfancia['Primerainfancia']['id']); ?>
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
                                                <div class="col-sm-12">

                                                    <table width="100%"
                                                        class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                            <td colspan="3">Nombre del Menor </td>
                                                            <td colspan="3">Documento </td>
                                                            <td colspan="3">Aseguradora </td>
                                                            <td colspan="3">Familia Asociada </td>
                                                        </tr>
                                                        <tr>

                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['primernombre'] . ' ' . $primerainfancia['Primerainfancia']['segundonombre'] . ' ' . $primerainfancia['Primerainfancia']['primerapellido'] . ' ' . $primerainfancia['Primerainfancia']['segundoapellido']); ?>
                                                            </td>
                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['tipodocumento'] . ' ' . $primerainfancia['Primerainfancia']['numerodoc']); ?>
                                                            </td>
                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['aseguradora'] . ' ' . $primerainfancia['Primerainfancia']['regimen']); ?>
                                                            </td>
                                                            <td colspan="3">
                                                                <?php echo $this->Html->link($primerainfancia['Familia']['nombresFamilia'], array('controller' => 'familias', 'action' => 'view', $primerainfancia['Familia']['id'])); ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="12" style="text-align: center;">Valoración En
                                                                Salud</td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="2" class="title"> Talla</td>
                                                            <td colspan="2">
                                                                <?php echo ($primerainfancia['Primerainfancia']['talla']); ?>
                                                            </td>
                                                            <td colspan="2">Peso</td>
                                                            <td colspan="2">
                                                                <?php echo ($primerainfancia['Primerainfancia']['peso']); ?>
                                                            </td>
                                                            <td colspan="2"> Bajo de Peso</td>
                                                            <td colspan="2">
                                                                <?php echo ($primerainfancia['Primerainfancia']['bajopeso']); ?>
                                                            </td>



                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">Tensión Arterial</td>
                                                            <td colspan="0">
                                                                <?php echo ($primerainfancia['Primerainfancia']['tensionarterial']); ?>
                                                            </td>
                                                            <td colspan="2">Discapacidad</td>
                                                            <td colspan="0">
                                                                <?php echo ($primerainfancia['Primerainfancia']['discapacidad']); ?>
                                                            </td>
                                                            <td colspan="2">Prematuro</td>
                                                            <td colspan="0">
                                                                <?php echo ($primerainfancia['Primerainfancia']['prematuro']); ?>
                                                            </td>
                                                            <td colspan="2"> Condición Congenita</td>
                                                            <td colspan="0">
                                                                <?php echo ($primerainfancia['Primerainfancia']['anomaliacongenita']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">Perímetro Cefálico</td>
                                                            <td colspan="">
                                                                <?php echo ($primerainfancia['Primerainfancia']['perimetrocefalico']); ?>
                                                            </td>
                                                            <td colspan="2">Perímetro Branquial</td>
                                                            <td colspan="">
                                                                <?php echo ($primerainfancia['Primerainfancia']['perimetrobraquial']); ?>
                                                            </td>
                                                            <td colspan="2"> Perímetro Cintura</td>
                                                            <td colspan="">
                                                                <?php echo ($primerainfancia['Primerainfancia']['perimetrocintura']); ?>
                                                            </td>
                                                            <td colspan="2" class="a"> Perímetro Cadera</td>
                                                            <td colspan="">
                                                                <?php echo ($primerainfancia['Primerainfancia']['perimetrocadera']); ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="4">Enfermedad Crónica</td>
                                                            <td colspan="8">
                                                                <?php echo ($primerainfancia['Primerainfancia']['condicioncronica']); ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="4">Alimentación</td>
                                                            <td colspan="8">
                                                                <?php echo ($primerainfancia['Primerainfancia']['lactanciamaterna']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="12" style="text-align: center;">Atención En
                                                                Salud</td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="6" style="text-align: center;">Esquema de
                                                                Vacunación</td>
                                                            <td colspan="6" style="text-align: center;"> Asistencia a
                                                                crecimiento y Desarrollo</td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="6">
                                                                <?php echo ($primerainfancia['Primerainfancia']['esquemavacunacion']); ?>
                                                            </td>
                                                            <td colspan="6">
                                                                <?php echo ($primerainfancia['Primerainfancia']['crecimientoydesarrollo']); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Signos alarma EDA</td>
                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['eda']); ?>
                                                            </td>
                                                            <td colspan="3">Signos alarma ERA</td>
                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['era']); ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Salud Oral</td>
                                                            <td colspan="2">
                                                                <?php echo ($primerainfancia['Primerainfancia']['higieneoral']); ?>
                                                            </td>
                                                            <td colspan="2">Desparasitación</td>
                                                            <td colspan="2">
                                                                <?php echo ($primerainfancia['Primerainfancia']['desparasitacion']); ?>
                                                            </td>
                                                            <td colspan="2"> Diagnóstico Nutricional</td>
                                                            <td colspan="2">
                                                                <?php echo ($primerainfancia['Primerainfancia']['desnutricion']); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4">Dificultad en Desarrollo</td>
                                                            <td colspan="8">
                                                                <?php echo ($primerainfancia['Primerainfancia']['desarrolloinfantil']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="12" style="text-align: center;">Condiciones de
                                                                Vulnerabilidad</td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="12" style="text-align: center;">Plan de
                                                                Atención Integral</td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="3">Canalización uno</td>
                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['canalizacionuno']); ?>
                                                            </td>
                                                            <td colspan="3">Canalización dos</td>
                                                            <td colspan="3">
                                                                <?php echo ($primerainfancia['Primerainfancia']['canalizaciondos']); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Canalización tres</td>
                                                            <td colspan="10">
                                                                <?php echo ($primerainfancia['Primerainfancia']['canalizaciontres']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">Educación</td>
                                                            <td colspan="10">
                                                                <?php echo ($primerainfancia['Primerainfancia']['educacionuno']); ?>
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

                                                    <table width="100%"
                                                        class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                            <td style="text-align: center;"><a
                                                                    href=" javascript:window.print();">
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