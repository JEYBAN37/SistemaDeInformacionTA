<?php $this->layout = 'default_familia';
echo $this->Html->script('validationFamilia'); ?>
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












<?php $this->layout = 'default_familia' ?>

<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '';
$userS = 'root';
$passS = '';
$bd = 'fichafamiliar';
?>
<div class="d-grid gap-3 col-md-6">
</div>





<div>
    <div class="form-group col-sm-12">
        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">Familia
                </h1>
            </div>

            <div class="panel-body">
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  ">
                                <tr>
                                    <td>Fecha Registro:
                                        <?php
                                        echo ($familia['Sociambiental']['fecha']); ?></td>



                                    <td>Encuestador:
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





                                    <td>ID:
                                        <?php echo ($familia['Familia']['id']); ?></td>
                                    <!--td>N° Hogares:
                                        <?php echo ($familia['Sociambiental']['numerohogares']); ?></td-->
                                </tr>
                                <tr>
                                    <td>Familia:
                                        <?php echo $this->Html->link($familia['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
                                    </td>
                                    <td>Representante:

                                        <?php echo '<strong>' . $familia['Familia']['nombres'] . '</strong> <strong>' . $familia['Familia']['apellidos'] . '</strong>'; ?>
                                    </td>
                                    <td colspan="2">Curso de Vida:
                                        <?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                </tr>

                                <tr>

                                    <td>Ubicación:
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
                                    <td>Dirección:
                                        <?php echo ($familia['Sociambiental']['direccion']); ?></td>
                                    <td>Num Hogares:
                                        <?php echo ($familia['Sociambiental']['numerohogares']); ?>
                                    </td>

                                </tr>


                                <tr>


                                    <td>Num. celular:
                                        <?php echo ($familia['Familia']['celular']); ?></td>
                                    <td colspan="2">Email:
                                        <?php echo ($familia['Familia']['correo']); ?></td>

                                </tr>
                                <tr>
                                    <td>Num. integrantes:
                                        <?php echo ($familia['Familia']['numeropersonas']); ?>
                                    </td>

                                    <td>Población vulnerable:
                                        <?php echo ($familia['Familia']['poblacionvulnerable']); ?>
                                    </td>
                                    <td>Población vulnerable:
                                        <?php echo ($familia['Familia']['poblacionvulnerable']); ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;">Vivenda

                                    </td>



                                </tr>

                                <tr>

                                    <td>vivienda:
                                        <?php echo ($familia['Familia']['vivienda']); ?></td>
                                    <td>Tenencia:
                                        <?php echo ($familia['Familia']['tenencia']); ?></td>
                                    <td>Tiempo de residencia:
                                        <?php echo '<span>' . $familia['Familia']['tiemporesidencia'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>

                                    <td>combustible:
                                        <?php echo ($familia['Familia']['combustible']); ?></td>
                                    <td>otrocombustible:
                                        <?php echo ($familia['Familia']['otrocombustible']); ?></td>
                                    <td>Actividad económica:
                                        <?php echo '<span>' . $familia['Sociambiental']['actividad'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;">Caracteristicas de la famlia

                                    </td>



                                </tr>

                                <tr>

                                    <td>Tipo familia:
                                        <?php echo ($familia['Familia']['tipofamilia']); ?></td>
                                    <td>Curso vida familia:
                                        <?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                    <td>Personas LGTBIQ+:
                                        <?php echo '<span>' . $familia['Familia']['lgtbi'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Estilo de vida:
                                        <?php echo ($familia['Familia']['estilodevidapredominante']); ?></td>
                                    <td>Antecedente enfermedad:
                                        <?php echo ($familia['Familia']['antecedenteenfermedad']); ?></td>
                                    <td>Antecedente enfermedad:
                                        <?php echo '<span>' . $familia['Familia']['antecedenteenfermedad1'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Antecedente enfermedad:
                                        <?php echo ($familia['Familia']['antecedenteenfermedad2']); ?></td>
                                    <td>Enfermedad transmible:
                                        <?php echo ($familia['Familia']['enfermedadtransmible']); ?></td>
                                    <td>Enfermedad transmible:
                                        <?php echo '<span>' . $familia['Familia']['enfermedadtransmible1'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Lavado de manos:
                                        <?php echo ($familia['Familia']['lavadomanos']); ?></td>
                                    <td>Comparte elementos aseo personal:
                                        <?php echo ($familia['Familia']['elementoshigiene']); ?></td>
                                    <td>Cultura de cepillado de dientes:
                                        <?php echo '<span>' . $familia['Familia']['cepilladodientes'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>

                                    <td>Riesgo Psicosocial:
                                        <?php echo ($familia['Familia']['riesgopsicosocial']); ?></td>
                                    <td>Riesgo Psicosocial:
                                        <?php echo ($familia['Familia']['riesgopsicosocial1']); ?></td>
                                    <td>Riesgo Psicosocial:
                                        <?php echo '<span>' . $familia['Familia']['riesgopsicosocial2'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Salud alternativa:
                                        <?php echo ($familia['Familia']['saludalternativa']); ?></td>
                                    <td>Cuidador permante:
                                        <?php echo ($familia['Familia']['cuidadorpermante']); ?></td>
                                    <td>Programa social:
                                        <?php echo '<span>' . $familia['Familia']['programasocial'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="1">Programa social:
                                        <?php echo ($familia['Familia']['programasocial1']); ?></td>
                                    <td colspan="1">Programa social:
                                        <?php echo ($familia['Familia']['programasocial2']); ?></td>
                                </tr>


                                <tr>
                                    <td colspan="6" style="text-align: center;">Habitabilidad

                                    </td>



                                </tr>

                                <tr>

                                    <td>Paredes:
                                        <?php echo ($familia['Sociambiental']['estadoparedes']); ?></td>
                                    <td>Techo:
                                        <?php echo ($familia['Sociambiental']['estadotecho']); ?></td>
                                    <td id="hacinamiento">Hacinamiento:
                                        <?php echo '<span>' . $familia['Sociambiental']['hacinamiento'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Riesgo externo:
                                        <?php echo ($familia['Sociambiental']['riesgoexterno']); ?>
                                    </td>
                                    <td>Riesgo externo:
                                        <?php echo ($familia['Sociambiental']['otroriesgo']); ?>
                                    </td>
                                    <td>Riesgo hogar:
                                        <?php echo ($familia['Sociambiental']['riesgo']); ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Riesgo hogar:
                                        <?php echo ($familia['Sociambiental']['otroriesgohogar']); ?></td>
                                    <td>Dificil acceso a:
                                        <?php echo ($familia['Sociambiental']['acceso']); ?> -
                                        <?php echo ($familia['Sociambiental']['accesoDos']); ?></td>
                                    <td>Servicio de agua:
                                        <?php echo ($familia['Sociambiental']['aguaservicio']); ?></td>
                                    </td>
                                </tr>
                                <tr>


                                    <td>Higiene en el hogar:
                                        <?php echo '<span>' . $familia['Familia']['higiene'] . '</span>'; ?>
                                    </td>
                                    <td> Aseo cocina:
                                        <?php echo ($familia['Familia']['aseococina']); ?></td>
                                    <td>Higiene alimentos:
                                        <?php echo ($familia['Familia']['higienealimentos']); ?></td>

                                </tr>

                                <tr>
                                    <td>Tratamiento agua:
                                        <?php echo ($familia['Sociambiental']['aguatratamiento']); ?></td>
                                    <td> Limpieza Tanque se agua:
                                        <?php echo ($familia['Sociambiental']['aguaalmacenamiento']); ?></td>

                                    <td>Diposicion excretas:
                                        <?php echo ($familia['Sociambiental']['diposicionexcretas']); ?></td>

                                </tr>
                                <tr>
                                    <td>agua residual:
                                        <?php echo ($familia['Sociambiental']['aguaresiduales']); ?></td>
                                    <td> Limpieza Tanque se agua:
                                        <?php echo ($familia['Sociambiental']['basura']); ?></td>

                                    <td>Reciclaje:
                                        <?php echo ($familia['Sociambiental']['reciclaje']); ?></td>

                                </tr>

                                <tr>
                                    <td colspan="6" style="text-align: center;">Mascotas en el hogar

                                    </td>



                                </tr>
                                <tr>

                                    <td>Num. Perros:
                                        <?php echo ($familia['Sociambiental']['numeroPerros']); ?></td>
                                    <td>Num.Gatos:
                                        <?php echo ($familia['Sociambiental']['numeroGatos']); ?></td>
                                    <td>Num. otras mascotas:
                                        <?php echo ($familia['Sociambiental']['otramascota']); ?></td>
                                </tr>
                                <tr>

                                    <td>Perros:
                                        <?php echo ($familia['Sociambiental']['numeroPerros']); ?></td>
                                    <td id="desparasitacion">desparasitación:
                                        <?php echo '<span>' . $familia['Sociambiental']['desparasitamascotas'] . '</span>'; ?>
                                    </td>
                                    <td id="vacunacion">Vacunacion:
                                        <?php echo '<span>' . $familia['Sociambiental']['vacunamascotas'] . '</span>'; ?>
                                    </td>

                                </tr>














                            </table>

                            <button>

                                <?php echo $this->Html->link(
                                    __('Editar información Familiar'),
                                    array('action' => 'edit', $familia['Familia']['id']),
                                    array(
                                        'onclick' => "return confirm('¿Estás seguro de editar la información del hogar de " .  $familia['Familia']['nombres'] . ' ' . $familia['Familia']['apellidos'] . "?');",
                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                    )
                                ); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: -5px; ">Personas en la Familia</h3>
            <hr
                style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">


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

                                <button> <?php
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
                                </button>




                                <button> <?php
                                            echo $this->Html->link(('Agregar menor entre 2 años a 5 años'),
                                                array(
                                                    'controller' => 'Primerainfancias',
                                                    'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
                                                ),
                                                array(
                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
                                                    'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                )
                                            ); ?>
                                </button>


                                <div class="card-body">

                                    <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                                        <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                            <div class=" row">
                                                <div class="col-sm-12">
                                                    <table width="100%"
                                                        class="table table-striped table-bordered table-hover"
                                                        id="dataTables-example">
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
                                                            <?php foreach ($familia['Primerainfancia'] as $primerainfancia) :
                                                                if (!empty($primerainfancia['id'])) {
                                                            ?>
                                                            <tr class="gradeA odd">

                                                                <td class="sorting_1">
                                                                    <?php echo $primerainfancia['id']; ?></td>
                                                                <td class="actions">

                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-default dropdown-toggle"
                                                                            data-toggle="dropdown">
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
                                </div>

                            </div>
                            <div class="tab-pane fade" id="profile-pills">

                                <div class="col-12 text-center">
                                    <h3 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">
                                        Menores de 6 a 11 años
                                    </h3>
                                </div>

                                <h4>
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
                                    ); ?></h4>
                                <div class="card-body">


                                    <?php if (!empty($familia['Infantil'])) : ?>
                                    <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                                        <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                                            <div class=" row">
                                                <div class="col-sm-12">
                                                    <table width="100%"
                                                        class="table table-striped table-bordered table-hover"
                                                        id="dataTables-example">
                                                        <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nombre</th>
                                                                <th>Edad</th>
                                                                <th>Acciones</th>



                                                            </tr>

                                                        <tbody>
                                                            <?php foreach ($familia['Infantil'] as $infantil) :
                                                                    if (!empty($infantil['id'])) {
                                                                ?>
                                                            <tr class="gradeA odd">

                                                                <td class="sorting_1">
                                                                    <?php echo $infantil['id']; ?>
                                                                </td>


                                                                <td><?php

                                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                                mysqli_select_db($link, $bd);
                                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $infantil['persona_id']);
                                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                                    echo $fila['primernombre'];

                                                                                    mysqli_close($link);
                                                                                }
                                                                                ?> <?php
                                                                                    //echo $adolescencia['responsable_id']; 
                                                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                                                    mysqli_select_db($link, $bd);
                                                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                    $result = mysqli_query($link, "SELECT primerapellido FROM Personas WHERE id = " . $infantil['persona_id']);
                                                                                    while ($fila = mysqli_fetch_array($result)) {
                                                                                        echo $fila['primerapellido'];

                                                                                        mysqli_close($link);
                                                                                    }
                                                                                    ?></td>
                                                                <td> <?php

                                                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                                                    mysqli_select_db($link, $bd);
                                                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                                    $result = mysqli_query($link, "SELECT edad FROM Personas WHERE id = " . $infantil['persona_id']);
                                                                                    while ($fila = mysqli_fetch_array($result)) {
                                                                                        echo $fila['edad'];

                                                                                        mysqli_close($link);
                                                                                    }
                                                                                    ?></td>




                                                                <td class="actions">

                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-default dropdown-toggle"
                                                                            data-toggle="dropdown">
                                                                            Opciones
                                                                        </button>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <li><?php echo $this->Html->link("Ver", "../infantils/view/" . $infantil['id'], array('target' => '_blank')); ?>
                                                                            </li>
                                                                            <li><?php echo $this->Html->link("Editar ", "../infantils/edit/" . $infantil['id'], array('target' => '_blank')); ?>
                                                                            </li>
                                                                            <li><?php echo $this->Form->postLink(
                                                                                                ('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'infantils',
                                                                                                    'action' => 'delete', $infantil['id']
                                                                                                ),
                                                                                                array('style' => 'color: blue; font-size: 16px; font-weight: bold;'),
                                                                                                __('Are you sure you want to delete # %s?', $infantil['id'])
                                                                                            ); ?>
                                                                            </li>





                                                                        </ul>
                                                                    </div>

                                                                </td>





                                                            </tr>
                                                            <?php }
                                                                endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="messages-pills">
                                <div class="card-body">
                                    <div class="col-12 text-center">
                                        <h3 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">
                                            Menores de 12 a 17 años
                                        </h3>
                                    </div>
                                    <h4>
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
                                    </h4>
                                    <?php if (!empty($familia['Adolescencia'])) : ?>
                                    <table width="100%" class="table table-striped table-bordered table-hover"
                                        id="dataTables-planes">
                                        <thead>

                                            <tr>
                                                <th>Id</th>
                                                <th>Fecha</th>
                                                <th>Tema</th>
                                                <th>Intension</th>
                                                <th>Dimension</th>
                                                <th>Responsable</th>

                                                <th class="actions"><?php echo ('Acciones'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($familia['Adolescencia'] as $adolescencia) :
                                                    if (!empty($adolescencia['id'])) {
                                                ?>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">
                                                    <?php echo $adolescencia['id']; ?></td>

                                                <td><?php echo $adolescencia['familia_id']; ?></td>
                                                <td><?php echo $adolescencia['indicemasacorporal']; ?>
                                                </td>
                                                <td><?php echo $adolescencia['consumospa']; ?></td>
                                                <td><?php echo $adolescencia['metodosanticonceptivos']; ?>
                                                </td>
                                                <td><?php
                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                mysqli_select_db($link, $bd);
                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $adolescencia['persona_id']);
                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                    echo $fila['primernombre'];

                                                                    mysqli_close($link);
                                                                }
                                                                ?> <?php
                                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                                    mysqli_select_db($link, $bd);
                                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                    $result = mysqli_query($link, "SELECT primerapellido FROM Personas WHERE id = " . $adolescencia['persona_id']);
                                                                    while ($fila = mysqli_fetch_array($result)) {
                                                                        echo $fila['primerapellido'];

                                                                        mysqli_close($link);
                                                                    }
                                                                    ?>


                                                </td>



                                                <td class="actions">
                                                    <?php //echo $this->Html->link(('Ver'), array('target' => '_blank','controller' => 'plsesiones', 'action' => 'view', $adolescencia['id'])); 
                                                                echo $this->Html->link("Ver", "../adolescentes/view/" . $adolescencia['id'], array('target' => '_blank'));
                                                                ?>
                                                    <?php //echo $this->Html->link(('Editar'), array('controller' => 'plsesiones', 'action' => 'edit', $adolescencia['id'])); 
                                                                echo $this->Html->link("Editar", "../adolecentes/edit/" . $adolescencia['id'], array('target' => '_blank'));
                                                                ?>
                                                </td>
                                            </tr>
                                            <?php }
                                                endforeach; ?>
                                        </tbody>
                                    </table>
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
                                    <table width="100%" class="table table-striped table-bordered table-hover"
                                        id="dataTables-informes">
                                        <thead>
                                            <tr>
                                                <th><?php echo ('Id'); ?></th>
                                                <th><?php echo ('Fecha'); ?></th>
                                                <th><?php echo ('Tema'); ?></th>
                                                <th><?php echo ('Tipo'); ?></th>
                                                <th><?php echo ('anexo'); ?></th>
                                                <th><?php echo ('Observacion'); ?></th>
                                                <th><?php echo ('Responsable'); ?></th>

                                                <th class="actions"><?php echo ('Acciones'); ?></th>
                                            </tr>
                                        </thead>

                                        <body>
                                            <?php foreach ($familia['Juventudadulto'] as $juventudadulto) :
                                                    if (!empty($juventudadulto['id'])) {
                                                ?>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">
                                                    <?php echo $juventudadulto['id']; ?></td>
                                                <td><?php echo $juventudadulto['indicemasacorporal']; ?>
                                                </td>
                                                <td><?php echo $juventudadulto['condicioncronica']; ?>
                                                </td>
                                                <td><?php echo $juventudadulto['controlprenatal']; ?>
                                                </td>
                                                <td><?php echo $juventudadulto['canalizacionuno']; ?>
                                                </td>
                                                <td><?php echo $juventudadulto['canalizaciondos']; ?>
                                                </td>
                                                <td><?php

                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                mysqli_select_db($link, $bd);
                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $juventudadulto['persona_id']);
                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                    echo $fila['primernombre'];

                                                                    mysqli_close($link);
                                                                }
                                                                ?></td>

                                                <td class="actions">
                                                    <?php //echo $this->Html->link(('Ver'), array('target' => '_blank','controller' => 'plsesiones', 'action' => 'view', $adolescencia['id'])); 
                                                                echo $this->Html->link("Ver", "../juventudadultos/view/" . $juventudadulto['id'], array('target' => '_blank'));
                                                                ?>
                                                    <?php //echo $this->Html->link(('Editar'), array('controller' => 'plsesiones', 'action' => 'edit', $adolescencia['id'])); 
                                                                echo $this->Html->link("Editar", "../juventudadultos/edit/" . $juventudadulto['id'], array('target' => '_blank'));
                                                                ?>
                                                </td>
                                            </tr>
                                            <?php }
                                                endforeach; ?>
                                        </body>
                                    </table>
                                    <?php endif; ?>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="actas-pills">
                                <h4>Actas</h4>
                                <div class="card-body">

                                    <?php if (!empty($producto['Acta'])) : ?>
                                    <table width="100%" class="table table-striped table-bordered table-hover"
                                        id="dataTables-actas">
                                        <thead>


                                            <tr>
                                                <th><?php echo ('Id'); ?></th>
                                                <th><?php echo ('Fecha'); ?></th>
                                                <th><?php echo ('Tema'); ?></th>
                                                <th><?php echo ('barrio'); ?></th>
                                                <th><?php echo ('Responsable Id'); ?></th>
                                                <th><?php echo ('Objetivo'); ?></th>
                                                <th><?php echo ('Anexo'); ?></th>
                                                <th class="actions"><?php echo ('Acciones'); ?></th>
                                            </tr>
                                        </thead>

                                        <body>


                                            <?php foreach ($producto['Acta'] as $acta) :

                                                    if (!empty($acta['id'])) {
                                                ?>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1"><?php echo $acta['id']; ?>
                                                </td>
                                                <td><?php echo $acta['fecha']; ?></td>
                                                <td><?php echo $acta['tema']; ?></td>
                                                <td><?php
                                                                //echo $acta['ubicacion_id']; 
                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                mysqli_select_db($link, $bd);
                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                $result = mysqli_query($link, "SELECT barrio FROM Ubicaciones WHERE id = " . $acta['ubicacion_id']);
                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                    echo $fila['barrio'];

                                                                    mysqli_close($link);
                                                                }

                                                                ?></td>
                                                <td><?php
                                                                //echo $acta['responsable_id']; 
                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                mysqli_select_db($link, $bd);
                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                $result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $acta['responsable_id']);
                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                    echo $fila['nombres'];

                                                                    mysqli_close($link);
                                                                }

                                                                ?></td>
                                                <td><?php echo $acta['objactividad']; ?></td>
                                                <td><?php echo $acta['anexo']; ?></td>
                                                <td class="actions">
                                                    <?php echo $this->Html->link("Ver", "../actas/view/" . $acta['id'], array('target' => '_blank')); ?>
                                                    <?php echo $this->Html->link("Editar", "../actas/edit/" . $acta['id'], array('target' => '_blank')); ?>
                                                </td>
                                            </tr>
                                            <?php
                                                    }
                                                endforeach;
                                                ?>
                                        </body>
                                    </table>
                                    <?php endif; ?>

                                    <div class="actions">
                                        <ul>
                                            <li><?php echo $this->Html->link(('../actas/view/'), array('controller' => 'actas', 'action' => 'add')); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <?php echo $this->Html->link(('Add hogar'), array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id'])); ?>



                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>



            </div>

        </fieldset>
    </div>
</div>













<!--div row>




	

	
	<dt><?php echo __('Riesgopsicosocial'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['riesgopsicosocial']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Riesgopsicosocial1'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['riesgopsicosocial1']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Riesgopsicosocial2'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['riesgopsicosocial2']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Programasocial'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['programasocial']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Programasocial1'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['programasocial1']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Programasocial2'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['programasocial2']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Discapacidad'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['discapacidad']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Victima'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['victima']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Vivienda'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['vivienda']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Tenencia'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['tenencia']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Dormitorios'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['dormitorios']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Higiene'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['higiene']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Lavadomanos'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['lavadomanos']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Elementoshigiene'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['elementoshigiene']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Otroelementohigiene'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['otroelementohigiene']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Cepilladodientes'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['cepilladodientes']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Combustible'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['combustible']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Otrocombustible'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['otrocombustible']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Higienealimentos'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['higienealimentos']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Aseococina'); ?></dt>
	<dd>
		<?php echo h($familia['Familia']['aseococina']); ?>
		&nbsp;
	</dd>
	</dl>
</div-->
<!--div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Familia'), array('action' => 'edit', $familia['Familia']['id'])); ?>
        </li>
        <li><?php echo $this->Form->postLink(__('Delete Familia'), array('action' => 'delete', $familia['Familia']['id']), array(), __('Are you sure you want to delete # %s?', $familia['Familia']['id'])); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Familias'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Familia'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Discapacidades'), array('controller' => 'discapacidades', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Discapacidad'), array('controller' => 'discapacidades', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Victimas'), array('controller' => 'victimas', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Victima'), array('controller' => 'victimas', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?>
        </li>
    </ul>
</div-->
<!--div class="related">
	<h3><?php echo __('Related Primerainfancias'); ?></h3>
	<?php if (!empty($familia['Primerainfancia'])) : ?>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Familia Id'); ?></th>
				<th><?php echo __('Persona Id'); ?></th>
				<th><?php echo __('Prematuro'); ?></th>
				<th><?php echo __('Discapacidad'); ?></th>
				<th><?php echo __('Peso'); ?></th>
				<th><?php echo __('Talla'); ?></th>
				<th><?php echo __('Bajopeso'); ?></th>
				<th><?php echo __('Perímetrocefalico'); ?></th>
				<th><?php echo __('Perímetrobraquial'); ?></th>
				<th><?php echo __('Perimetrocintura'); ?></th>
				<th><?php echo __('Perimetrocadera'); ?></th>
				<th><?php echo __('Tensionarterial'); ?></th>
				<th><?php echo __('Lactanciamaterna'); ?></th>
				<th><?php echo __('Condicioncronica'); ?></th>
				<th><?php echo __('Anomaliacongenita'); ?></th>
				<th><?php echo __('Esquemavacunacion'); ?></th>
				<th><?php echo __('Desparasitacion'); ?></th>
				<th><?php echo __('Crecimientoydesarrollo'); ?></th>
				<th><?php echo __('Desnutricion'); ?></th>
				<th><?php echo __('Higieneoral'); ?></th>
				<th><?php echo __('Desarrolloinfantil'); ?></th>
				<th><?php echo __('Eda'); ?></th>
				<th><?php echo __('Era'); ?></th>
				<th><?php echo __('Riesgodetbc'); ?></th>
				<th><?php echo __('Saludalternativa'); ?></th>
				<th><?php echo __('Padresconsumo'); ?></th>
				<th><?php echo __('Sospechaviolencia'); ?></th>
				<th><?php echo __('Cudadorpermanente'); ?></th>
				<th><?php echo __('Canalizacionuno'); ?></th>
				<th><?php echo __('Canalizaciondos'); ?></th>
				<th><?php echo __('Eduacionuno'); ?></th>
				<th><?php echo __('Educaciondos'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($familia['Primerainfancia'] as $primerainfancia) : ?>
				<tr>
					<td><?php echo $primerainfancia['id']; ?></td>
					<td><?php echo $primerainfancia['familia_id']; ?></td>
					<td><?php echo $primerainfancia['persona_id']; ?></td>
					<td><?php echo $primerainfancia['prematuro']; ?></td>
					<td><?php echo $primerainfancia['discapacidad']; ?></td>
					<td><?php echo $primerainfancia['peso']; ?></td>
					<td><?php echo $primerainfancia['talla']; ?></td>
					<td><?php echo $primerainfancia['bajopeso']; ?></td>
					<td><?php echo $primerainfancia['perímetrocefalico']; ?></td>
					<td><?php echo $primerainfancia['perímetrobraquial']; ?></td>
					<td><?php echo $primerainfancia['perimetrocintura']; ?></td>
					<td><?php echo $primerainfancia['perimetrocadera']; ?></td>
					<td><?php echo $primerainfancia['tensionarterial']; ?></td>
					<td><?php echo $primerainfancia['lactanciamaterna']; ?></td>
					<td><?php echo $primerainfancia['condicioncronica']; ?></td>
					<td><?php echo $primerainfancia['anomaliacongenita']; ?></td>
					<td><?php echo $primerainfancia['esquemavacunacion']; ?></td>
					<td><?php echo $primerainfancia['desparasitacion']; ?></td>
					<td><?php echo $primerainfancia['crecimientoydesarrollo']; ?></td>
					<td><?php echo $primerainfancia['desnutricion']; ?></td>
					<td><?php echo $primerainfancia['higieneoral']; ?></td>
					<td><?php echo $primerainfancia['desarrolloinfantil']; ?></td>
					<td><?php echo $primerainfancia['eda']; ?></td>
					<td><?php echo $primerainfancia['era']; ?></td>
					<td><?php echo $primerainfancia['riesgodetbc']; ?></td>
					<td><?php echo $primerainfancia['saludalternativa']; ?></td>
					<td><?php echo $primerainfancia['padresconsumo']; ?></td>
					<td><?php echo $primerainfancia['sospechaviolencia']; ?></td>
					<td><?php echo $primerainfancia['cudadorpermanente']; ?></td>
					<td><?php echo $primerainfancia['canalizacionuno']; ?></td>
					<td><?php echo $primerainfancia['canalizaciondos']; ?></td>
					<td><?php echo $primerainfancia['eduacionuno']; ?></td>
					<td><?php echo $primerainfancia['educaciondos']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'primerainfancias', 'action' => 'view', $primerainfancia['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'primerainfancias', 'action' => 'edit', $primerainfancia['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'primerainfancias', 'action' => 'delete', $primerainfancia['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(('Add menor de año'), array('controller' => 'Primerainfancias', 'action' => 'add?primerainfancia=' . $familia['Familia']['id'])); ?>
			</li>
		</ul>
	</div>
</div-->




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