<?php $this->layout = 'default_familia';
echo $this->Html->script('validationFamilia'); ?>

<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '';
$userS = 'root';
$passS = '';
$bd = 'fichafamiliar';
?>

<style>
    .negrilla {
        font-size: small;
        font-weight: bold;
    }

    .my-button {
        padding: 10px 20px;
        background-color: #3366CC;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;


    }

    .my-button:hover {
        background-color: #337CCF;
    }

    .my-button:active {
        background-color: #337CCF;
    }
</style>

<div>
    <div class="form-group col-sm-12">
        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">Ficha Familiar</h1>
            </div>

            <div class="panel-body">
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  ">
                                <tr>
                                    <td>
                                        <strong>Fecha Registro:</strong>
                                        <?php
                                        echo ($familia['Sociambiental']['fecha']); ?>
                                    </td>



                                    <td><strong>Encuestador:</strong>
                                        <?php
                                        $link = mysqli_connect($serv, $userS, $passS, $bd);
                                        $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                        $result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $familia['Sociambiental']['responsable_id']);
                                        if ($fila = mysqli_fetch_array($result)) {
                                            echo $fila['nombres'];
                                        }
                                        mysqli_free_result($result);
                                        mysqli_close($link);
                                        ?>
                                    </td>





                                    <td>
                                        <strong>ID:</strong>
                                        <?php echo ($familia['Familia']['id']); ?>
                                    </td>
                                    <!--td>N° Hogares:
                                        <?php echo ($familia['Sociambiental']['numerohogares']); ?></td-->
                                </tr>
                                <tr>
                                    <td><strong>Familia:</strong>
                                        <?php echo $this->Html->link($familia['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
                                    </td>
                                    <td> <strong> Representante:</strong>

                                        <?php echo '<strong>' . $familia['Familia']['nombres'] . '</strong> <strong>' . $familia['Familia']['apellidos'] . '</strong>'; ?>
                                    </td>
                                    <td colspan="2"> <strong>Curso de Vida:</strong>
                                        <?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                </tr>

                                <tr>

                                    <td><strong>Ubicación:</strong>
                                        <?php
                                        $link = mysqli_connect($serv, $userS, $passS, $bd);
                                        $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                        $result = mysqli_query($link, "SELECT barrio FROM Ubicaciones WHERE id = " . $familia['Sociambiental']['ubicacion_id']);
                                        if ($fila = mysqli_fetch_array($result)) {
                                            echo $fila['barrio'];
                                        }
                                        mysqli_free_result($result);
                                        mysqli_close($link);
                                        ?>
                                    </td>
                                    <td><strong>Dirección:</strong>
                                        <?php echo ($familia['Sociambiental']['direccion']); ?></td>
                                    <td><strong>Num Hogares:</strong>
                                        <?php echo ($familia['Sociambiental']['numerohogares']); ?>
                                    </td>

                                </tr>


                                <tr>


                                    <td><strong>Num. celular:</strong>
                                        <?php echo ($familia['Familia']['celular']); ?></td>
                                    <td colspan="2"><strong>Email:</strong>
                                        <?php echo ($familia['Familia']['correo']); ?></td>

                                </tr>
                                <tr>
                                    <td colspan=""><strong>Num. integrantes:</strong>
                                        <?php echo ($familia['Familia']['numeropersonas']); ?>
                                    </td>

                                    <td colspan="2"><strong>Población vulnerable:</strong>
                                        <?php echo ($familia['Familia']['poblacionvulnerable']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><strong>VIVIENDA</strong>

                                    </td>



                                </tr>

                                <tr>

                                    <td><strong>vivienda:</strong>
                                        <?php echo ($familia['Familia']['vivienda']); ?></td>
                                    <td><strong>Tenencia:</strong>
                                        <?php echo ($familia['Familia']['tenencia']); ?></td>
                                    <td><strong>Tiempo de residencia:</strong>
                                        <?php echo '<span>' . $familia['Familia']['tiemporesidencia'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>

                                    <td><strong>combustible:</strong>
                                        <?php echo ($familia['Familia']['combustible']); ?></td>
                                    <td><strong>otrocombustible:</strong>
                                        <?php echo ($familia['Familia']['otrocombustible']); ?></td>
                                    <td><strong>Actividad económica:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['actividad'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;">
                                        <strong>CARACTERISTICAS DE LA FAMILIA</strong>
                                    </td>



                                </tr>

                                <tr>

                                    <td><strong>Tipo familia:</strong>
                                        <?php echo ($familia['Familia']['tipofamilia']); ?></td>
                                    <td><strong>Curso vida familia:</strong>
                                        <?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                    <td><strong>Personas LGTBIQ+:</strong>
                                        <?php echo '<span>' . $familia['Familia']['lgtbi'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Estilo de vida:</strong>
                                        <?php echo ($familia['Familia']['estilodevidapredominante']); ?></td>
                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo ($familia['Familia']['antecedenteenfermedad']); ?></td>
                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo '<span>' . $familia['Familia']['antecedenteenfermedad1'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo ($familia['Familia']['antecedenteenfermedad2']); ?></td>
                                    <td><strong>Enfermedad transmible::</strong>
                                        <?php echo ($familia['Familia']['enfermedadtransmible']); ?></td>
                                    <td><strong>Enfermedad transmible:</strong>
                                        <?php echo '<span>' . $familia['Familia']['enfermedadtransmible1'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Lavado de manos:</strong>
                                        <?php echo ($familia['Familia']['lavadomanos']); ?></td>
                                    <td><strong>Comparte elementos aseo personal:</strong>
                                        <?php echo ($familia['Familia']['elementoshigiene']); ?></td>
                                    <td><strong>Cultura de cepillado de dientes:</strong>
                                        <?php echo '<span>' . $familia['Familia']['cepilladodientes'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>

                                    <td><strong>Riesgo Psicosocial:</strong>
                                        <?php echo ($familia['Familia']['riesgopsicosocial']); ?></td>
                                    <td><strong>Riesgo Psicosocial:</strong>
                                        <?php echo ($familia['Familia']['riesgopsicosocial1']); ?></td>
                                    <td><strong>Riesgo Psicosocial:</strong>
                                        <?php echo '<span>' . $familia['Familia']['riesgopsicosocial2'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Salud alternativa:</strong>
                                        <?php echo ($familia['Familia']['saludalternativa']); ?></td>
                                    <td><strong>Cuidador permante:</strong>
                                        <?php echo ($familia['Familia']['cuidadorpermante']); ?></td>
                                    <td><strong>Programa social:</strong>
                                        <?php echo '<span>' . $familia['Familia']['programasocial'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="1"><strong>Programa social:</strong>
                                        <?php echo ($familia['Familia']['programasocial1']); ?></td>
                                    <td colspan="1"><strong>Programa social:</strong>
                                        <?php echo ($familia['Familia']['programasocial2']); ?></td>
                                </tr>


                                <tr>
                                    <td colspan="6" style="text-align: center;"><strong>HABITABILIDAD</strong>

                                    </td>



                                </tr>

                                <tr>

                                    <td><strong>Paredes:</strong>
                                        <?php echo ($familia['Sociambiental']['estadoparedes']); ?></td>
                                    <td><strong>Techo:</strong>
                                        <?php echo ($familia['Sociambiental']['estadotecho']); ?></td>
                                    <td id="hacinamiento"><strong>Hacinamiento:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['hacinamiento'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Riesgo externo:</strong>
                                        <?php echo ($familia['Sociambiental']['riesgoexterno']); ?>
                                    </td>
                                    <td><strong>Riesgo externo:</strong>
                                        <?php echo ($familia['Sociambiental']['otroriesgo']); ?>
                                    </td>
                                    <td><strong>Riesgo hogar:</strong>
                                        <?php echo ($familia['Sociambiental']['riesgo']); ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td><strong>Riesgo hogar:</strong>
                                        <?php echo ($familia['Sociambiental']['otroriesgohogar']); ?></td>
                                    <td><strong>Dificil acceso a:</strong>
                                        <?php echo ($familia['Sociambiental']['acceso']); ?> -
                                        <?php echo ($familia['Sociambiental']['accesoDos']); ?></td>
                                    <td><strong>Servicio de agua:</strong>
                                        <?php echo ($familia['Sociambiental']['aguaservicio']); ?></td>
                                    </td>
                                </tr>
                                <tr>


                                    <td><strong>Higiene en el hogar:</strong>
                                        <?php echo '<span>' . $familia['Familia']['higiene'] . '</span>'; ?>
                                    </td>
                                    <td><strong>Aseo cocina:</strong>
                                        <?php echo ($familia['Familia']['aseococina']); ?></td>
                                    <td><strong>Higiene alimentos:</strong>
                                        <?php echo ($familia['Familia']['higienealimentos']); ?></td>

                                </tr>

                                <tr>
                                    <td><strong>Tratamiento agua:</strong>
                                        <?php echo ($familia['Sociambiental']['aguatratamiento']); ?></td>
                                    <td><strong>Limpieza Tanque se agua:</strong>
                                        <?php echo ($familia['Sociambiental']['aguaalmacenamiento']); ?></td>

                                    <td><strong>Diposicion excretas:</strong>
                                        <?php echo ($familia['Sociambiental']['diposicionexcretas']); ?></td>

                                </tr>
                                <tr>
                                    <td><strong>agua residual:</strong>
                                        <?php echo ($familia['Sociambiental']['aguaresiduales']); ?></td>
                                    <td><strong>Limpieza Tanque se agua:</strong>
                                        <?php echo ($familia['Sociambiental']['basura']); ?></td>

                                    <td><strong>Reciclaje:</strong>
                                        <?php echo ($familia['Sociambiental']['reciclaje']); ?></td>

                                </tr>

                                <tr>
                                    <td colspan="6" style="text-align: center;"><strong>MASCOTAS EN EL HOGAR</strong>

                                    </td>



                                </tr>
                                <tr>

                                    <td><strong>Num. Perros:</strong>
                                        <?php echo ($familia['Sociambiental']['numeroPerros']); ?></td>
                                    <td><strong>Num.Gatos:</strong>
                                        <?php echo ($familia['Sociambiental']['numeroGatos']); ?></td>
                                    <td><strong>Num. otras mascotas:</strong>
                                        <?php echo ($familia['Sociambiental']['otramascota']); ?></td>
                                </tr>
                                <tr>

                                    <td><strong>Perros:</strong>
                                        <?php echo ($familia['Sociambiental']['numeroPerros']); ?></td>
                                    <td id="desparasitacion"><strong>desparasitación:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['desparasitamascotas'] . '</span>'; ?>
                                    </td>
                                    <td id="vacunacion"><strong>Vacunacion:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['vacunamascotas'] . '</span>'; ?>
                                    </td>

                                </tr>

                            </table>

                            <button class="my-button">
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
                                        'style' => 'color: white; font-size: 16px; font-weight: bold;'
                                    )
                                );
                                ?>
                            </button>
                            <button class="my-button">

                                <?php echo $this->Html->link(
                                    __('Editar información Familiar'),
                                    array('action' => 'edit', $familia['Familia']['id']),
                                    array(
                                        'onclick' => "return confirm('¿Estás seguro de editar la información del hogar de " .  $familia['Familia']['nombres'] . ' ' . $familia['Familia']['apellidos'] . "?');",
                                        'style' => 'color: white; font-size: 16px; font-weight: bold;'
                                    )
                                ); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Personas en la Familia</h3>
            <hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">


            <div class="row" style="margin: 5px;">
                <div class="col-lg-12" style="justify-items: center; ">
                    <div class="panel panel-default">



                        <!-- /.panel-heading -->
                        <div class="table-responsive" style="justify-items: center; margin-top: 5px; ">
                            <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                <div class=" row">
                                    <div class="col-sm-12">
                                        <div class="panel-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-pills">
                                                <li class="active"><a href="#home-pills" data-toggle="tab">Primera
                                                        infancia 0 a 5 años</a>
                                                </li>
                                                <li><a href="#profile-pills" data-toggle="tab">Infancia 6 a 11 años</a>
                                                </li>
                                                <li><a href="#messages-pills" data-toggle="tab">Adolescencia 12 a 17
                                                        años</a>
                                                </li>
                                                <li><a href="#settings-pills" data-toggle="tab">Personas mayores de 18
                                                        años</a>
                                                </li>
                                                <li><a href="#actas-pills" data-toggle="tab">Observación</a>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>




                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>

                    <div class="panel-body">
                        <!-- Nav tabs -->

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home-pills">

                                <div class="col-12 text-center">
                                    <h3 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">
                                        Menores de 0 a 5 años
                                    </h3>
                                </div>

                                <button class="my-button"> <?php
                                                            echo $this->Html->link(('Agregar menor de 2 años'),
                                                                array(
                                                                    'controller' => 'Primerainfancias',
                                                                    'action' => 'add?primerainfancia=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'color: white; font-size: 16px; font-weight: bold;'
                                                                )
                                                            ); ?>
                                </button>




                                <button class="my-button"> <?php
                                                            echo $this->Html->link(('Agregar menor entre 2 años a 5 años'),
                                                                array(
                                                                    'controller' => 'Primerainfancias',
                                                                    'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'color: white; font-size: 16px; font-weight: bold;'
                                                                )
                                                            ); ?>
                                </button>


                                <div class="card-body">
                                    <?php if (!empty($familia['Primerainfancia'])) : ?>

                                        <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                                            <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                                <div class=" row">
                                                    <div class="col-sm-12">
                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Acciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Institucion</th>
                                                                    <th>enlace</th>
                                                                    <th>celular</th>
                                                                    <th>correo</th>
                                                                    <th>Prematuro </th>
                                                                    <th>Discapacidad </th>
                                                                    <th>Peso </th>
                                                                    <th>Talla </th>
                                                                    <th>Bajopeso </th>

                                                                    <th>Lactanciamaterna </th>
                                                                    <th>Condicioncronica </th>
                                                                    <th>Anomaliacongenita </th>
                                                                    <th>Esquemavacunacion </th>
                                                                    <th>Desparasitacion </th>
                                                                    <th>Crecimientoydesarrollo </th>
                                                                    <th>Desnutricion </th>
                                                                    <th>Higieneoral </th>
                                                                    <th>Desarrolloinfantil </th>
                                                                    <th>Eda </th>
                                                                    <th>Era </th>


                                                                    <th>Padresconsumo </th>
                                                                    <th>Sospechaviolencia </th>
                                                                    <th>Cudadorpermanente </th>



                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Primerainfancia'] as $primerainfancia) :
                                                                    if (!empty($primerainfancia['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $primerainfancia['id']; ?></td>
                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../primerainfancias/view/" . $primerainfancia['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../primerainfancias/edit/" . $primerainfancia['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'primerainfancias',
                                                                                                    'action' => 'delete', $primerainfancia['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $primerainfancia['id'] . ' ' . $primerainfancia['primernombre'] . ' ' . $primerainfancia['primerapellido'] . ' de la familia de con id # ' .  $primerainfancia['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $primerainfancia['primernombre'] ?>
                                                                                <?php echo $primerainfancia['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $primerainfancia['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['canalizacionuno']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['canalizaciondos']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT nombre FROM Canalizaciones WHERE id = " . $primerainfancia['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['nombre'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT enlaceuno FROM Canalizaciones WHERE id = " . $primerainfancia['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['enlaceuno'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $adolescencia['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT telefono1 FROM Canalizaciones WHERE id = " . $primerainfancia['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['telefono1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $adolescencia['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT correo1 FROM Canalizaciones WHERE id = " . $primerainfancia['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['correo1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>

                                                                            <td><?php echo $primerainfancia['prematuro']; ?></td>
                                                                            <td><?php echo $primerainfancia['discapacidad']; ?></td>
                                                                            <td><?php echo $primerainfancia['peso']; ?></td>
                                                                            <td><?php echo $primerainfancia['talla']; ?></td>
                                                                            <td><?php echo $primerainfancia['bajopeso']; ?></td>
                                                                            <td><?php echo $primerainfancia['lactanciamaterna']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['condicioncronica']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['anomaliacongenita']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['esquemavacunacion']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['desparasitacion']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['crecimientoydesarrollo']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['desnutricion']; ?></td>
                                                                            <td><?php echo $primerainfancia['higieneoral']; ?></td>
                                                                            <td><?php echo $primerainfancia['desarrolloinfantil']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['eda']; ?></td>
                                                                            <td><?php echo $primerainfancia['era']; ?></td>
                                                                            <td><?php echo $primerainfancia['padresconsumo']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['sospechamaltrato']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['cuidador']; ?></td>


                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="profile-pills">

                                <div class="col-12 text-center">
                                    <h3 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">
                                        Menores de 6 a 11 años
                                    </h3>
                                </div>

                                <button>
                                    <?php
                                    echo $this->Html->link(('Agregar menor de 6 a 11 años'),
                                        array(
                                            'controller' => 'Infantils',
                                            'action' => 'add?infantils=' . $familia['Familia']['id']
                                        ),
                                        array(
                                            'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                            'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                        )
                                    ); ?></button>

                                <div class="card-body">
                                    <?php if (!empty($familia['Infantil'])) : ?>

                                        <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                                            <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                                <div class=" row">
                                                    <div class="col-sm-12">
                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-infantil">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Acciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Institucion</th>
                                                                    <th>enlace</th>
                                                                    <th>celular</th>
                                                                    <th>correo</th>


                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Infantil'] as $infantil) :
                                                                    if (!empty($infantil['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $infantil['id']; ?></td>
                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../infantils/view/" . $infantil['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../infantils/edit/" . $infantil['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'infantils',
                                                                                                    'action' => 'delete', $infantil['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $infantil['id'] . ' ' . $infantil['primernombre'] . ' ' . $infantil['primerapellido'] . ' de la familia de con id # ' .  $infantil['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $infantil['primernombre'] ?>
                                                                                <?php echo $infantil['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $infantil['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['canalizacionuno']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['canalizaciondos']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT nombre FROM Canalizaciones WHERE id = " . $infantil['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['nombre'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT enlaceuno FROM Canalizaciones WHERE id = " . $infantil['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['enlaceuno'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $adolescencia['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT telefono1 FROM Canalizaciones WHERE id = " . $infantil['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['telefono1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $adolescencia['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT correo1 FROM Canalizaciones WHERE id = " . $infantil['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['correo1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>

                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>





                            </div>


                            <div class="tab-pane fade" id="messages-pills">

                                <div class="col-12 text-center">
                                    <h3 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">
                                        Menores de 12 a 17 años
                                    </h3>
                                </div>
                                <button>
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
                                </button>
                                <div class="card-body">
                                    <?php if (!empty($familia['Adolescencia'])) : ?>
                                        <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                                            <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                                <div class=" row">
                                                    <div class="col-sm-12">
                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-Adolescencia">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Acciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Institucion</th>
                                                                    <th>enlace</th>
                                                                    <th>celular</th>
                                                                    <th>correo</th>


                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Adolescencia'] as $adolescencia) :
                                                                    if (!empty($adolescencia['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $adolescencia['id']; ?></td>
                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../adolescencias/view/" . $adolescencia['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../adolescencias/edit/" . $adolescencia['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'adolescencias',
                                                                                                    'action' => 'delete', $adolescencia['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $adolescencia['id'] . ' ' . $adolescencia['primernombre'] . ' ' . $adolescencia['primerapellido'] . ' de la familia de con id # ' .  $adolescencia['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $adolescencia['primernombre'] ?>
                                                                                <?php echo $adolescencia['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $adolescencia['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['canalizacionuno']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['canalizaciondos']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT nombre FROM Canalizaciones WHERE id = " . $adolescencia['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['nombre'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT enlaceuno FROM Canalizaciones WHERE id = " . $adolescencia['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['enlaceuno'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $adolescencia['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT telefono1 FROM Canalizaciones WHERE id = " . $adolescencia['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['telefono1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $adolescencia['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT correo1 FROM Canalizaciones WHERE id = " . $adolescencia['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['correo1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>

                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>



                                </div>
                            </div>
                            <div class="tab-pane fade" id="settings-pills">
                                <div class="col-12 text-center">
                                    <h3 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">
                                        Mayores de 18 años
                                    </h3>
                                </div>

                                <h4>
                                    <?php echo $this->Html->link(('Agregar persona mayor de 18 años '),
                                        array(
                                            'controller' => 'Juventudadultos',
                                            'action' => 'add?juventudadultos=' . $familia['Familia']['id']
                                        ),
                                        array(
                                            'onclick' => "return confirm('¿Estás seguro de agregar una persona mayor de 18 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                            'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                        )
                                    ); ?>
                                </h4>
                                <div class="card-body">

                                    <?php if (!empty($familia['Juventudadulto'])) : ?>
                                        <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                                            <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                                <div class=" row">
                                                    <div class="col-sm-12">
                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-juventudAdulto">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Acciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Canalización</th>
                                                                    <th>Institucion</th>
                                                                    <th>enlace</th>
                                                                    <th>celular</th>
                                                                    <th>correo</th>


                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Juventudadulto'] as $juventudadulto) :
                                                                    if (!empty($juventudadulto['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $juventudadulto['id']; ?></td>
                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../juventudadultos/view/" . $juventudadulto['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../juventudadultos/edit/" . $juventudadulto['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'juventudadultos',
                                                                                                    'action' => 'delete', $juventudadulto['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $juventudadulto['id'] . ' ' . $juventudadulto['primernombre'] . ' ' . $juventudadulto['primerapellido'] . ' de la familia de con id # ' .  $juventudadulto['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $juventudadulto['primernombre'] ?>
                                                                                <?php echo $juventudadulto['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $juventudadulto['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['canalizacionuno']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['canalizaciondos']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT nombre FROM Canalizaciones WHERE id = " . $juventudadulto['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['nombre'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $link = mysqli_connect($serv, $userS, $passS, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT enlaceuno FROM Canalizaciones WHERE id = " . $juventudadulto['canalizacion_id']);
                                                                                if ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['enlaceuno'];
                                                                                }
                                                                                mysqli_free_result($result);
                                                                                mysqli_close($link);
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $juventudadulto['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT telefono1 FROM Canalizaciones WHERE id = " . $juventudadulto['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['telefono1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                //echo $juventudadulto['responsable_id']; 
                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT correo1 FROM Canalizaciones WHERE id = " . $juventudadulto['canalizacion_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['correo1'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?>
                                                                            </td>

                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                </div>
                            </div>







                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>



            </div>
        </fieldset>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            "pagingType": "simple",
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
    $(document).ready(function() {
        $('#dataTables-infantil').DataTable({
            "pagingType": "simple",
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

    $(document).ready(function() {
        $('#dataTables-juventudAdulto').DataTable({
            "pagingType": "simple",
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
    $(document).ready(function() {
        $('#dataTables-Adolescencia').DataTable({
            "pagingType": "simple",
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

    var vacunacionSpan = document.querySelector('#vacunacion span');
    var vacunacionValue = "<?php echo $familia['Sociambiental']['vacunamascotas']; ?>";

    if (vacunacionValue === "No") {
        vacunacionSpan.style.color = "red";
    } else if (vacunacionValue === "Si") {
        vacunacionSpan.style.color = "green"; // Cambiar el color a azul para "Si"
    }

    var hacinamientoSpan = document.querySelector('#hacinamiento span');
    var hacinamientoValue = "<?php echo $familia['Sociambiental']['hacinamiento']; ?>";

    if (hacinamientoValue === "Si") {
        hacinamientoSpan.style.color = "red";
    } else if (hacinamientoValue === "No") {
        hacinamientoSpan.style.color = "green"; // Cambiar el color a azul para "Si"
    }

    var desparasitacionSpan = document.querySelector('#desparasitacion span');
    var desparasitacionValue = "<?php echo $familia['Sociambiental']['desparasitamascotas']; ?>";

    if (desparasitacionValue === "No") {
        desparasitacionSpan.style.color = "red";
    } else if (desparasitacionValue === "Si") {
        desparasitacionSpan.style.color = "green"; // Cambiar el color a azul para "Si"
    }
</script>

<style>
    /* Estilos para la lista de píldoras */
    .nav-pills {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;

        border-radius: 5px;
        text-align: center;
    }

    .nav-pills li {
        margin: 0 10px;
        justify-content: center;

    }

    .nav-pills a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #3366CC;
        transition: background-color 0.3s ease;

    }

    .nav-pills a:hover {}



    /* Estilos para hacer que la lista de píldoras sea responsiva */
    @media (max-width: 768px) {
        .nav-pills {
            flex-wrap: wrap;
        }

        .nav-pills li {
            flex: 0 0 100%;
            margin: 10px 0;
            justify-content: center;
        }
    }
</style>