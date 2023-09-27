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
                                    <td colspan="8"><?php echo $this->Html->link($familia['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?></td>
                                    <td colspan="2">ID</td>
                                    <td colspan="2"><?php echo ($familia['Familia']['id']); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Representante:</td>
                                    <td colspan="10"><?php echo '<strong>' . $familia['Familia']['nombres'] . '</strong> <strong>' . $familia['Familia']['apellidos'] . '</strong>'; ?></td>
                                </tr>
                                <td colspan="2">Fecha de Registro:</td>
                                <td colspan="10"> <?php
                                                    echo ($familia['Sociambiental']['fecha']); ?></td>

                                </tr>
                                <tr>
                                    <td colspan="2">Curso de Vida:</td>
                                    <td colspan="10"><?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Estilo de Vida:</td>
                                    <td colspan="10"> <?php echo ($familia['Familia']['estilodevidapredominante']); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: -5px; ">Personas en la Familia</h3>
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
                                                <li class="active"><a href="#home-pills" data-toggle="tab">Primera infancia 0 a 5 años</a>
                                                </li>
                                                <li><a href="#profile-pills" data-toggle="tab">Infancia 6 a 11 años</a>
                                                </li>
                                                <li><a href="#messages-pills" data-toggle="tab">Adolecencia</a>
                                                </li>
                                                <li><a href="#settings-pills" data-toggle="tab">Personas mayores de 18 años</a>
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
                    <!-- /.col-lg-12 -->
                </div>






        </fieldset>
    </div>
</div>










<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#home-pills" data-toggle="tab">Primera infancia 0 a 5 años</a>
                            </li>
                            <li><a href="#profile-pills" data-toggle="tab">Infancia 6 a 11 años</a>
                            </li>
                            <li><a href="#messages-pills" data-toggle="tab">Adolecencia</a>
                            </li>
                            <li><a href="#settings-pills" data-toggle="tab">Personas mayores de 18 años</a>
                            </li>
                            <li><a href="#actas-pills" data-toggle="tab">Observación</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home-pills">
                                <h4>Primera infancia 0 a 5 años
                                </h4>
                                <h4>
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
                                    ); ?></h4>
                                <div class="card-body">


                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                                <th>canalización</th>
                                                <th>Canalización</th>



                                            </tr>

                                        <tbody>
                                            <?php foreach ($familia['Primerainfancia'] as $primerainfancia) :
                                                if (!empty($primerainfancia['id'])) {
                                            ?>
                                                    <tr class="gradeA odd">

                                                        <td class="sorting_1"><?php echo $primerainfancia['id']; ?></td>

                                                        <td><?php
                                                            //echo $adolescencia['responsable_id']; 
                                                            $link = mysqli_connect($serv, $userS, $passS);
                                                            mysqli_select_db($link, $bd);
                                                            $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                            $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $primerainfancia['persona_id']);
                                                            while ($fila = mysqli_fetch_array($result)) {
                                                                echo $fila['primernombre'];

                                                                mysqli_close($link);
                                                            }
                                                            ?> <?php
                                                                //echo $adolescencia['responsable_id']; 
                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                mysqli_select_db($link, $bd);
                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                $result = mysqli_query($link, "SELECT primerapellido FROM Personas WHERE id = " . $primerainfancia['persona_id']);
                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                    echo $fila['primerapellido'];

                                                                    mysqli_close($link);
                                                                }
                                                                ?></td>



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
                                                                            array('style' => 'color: blue; font-size: 16px; font-weight: bold;'),
                                                                            __('Are you sure you want to delete # %s?', $primerainfancia['id'])
                                                                        ); ?>
                                                                    </li>





                                                                </ul>
                                                            </div>

                                                        </td>

                                                        <td> <?php echo $primerainfancia['canalizacionuno']; ?></td>
                                                        <td> <?php echo $primerainfancia['canalizaciondos']; ?></td>




                                                    </tr>
                                            <?php }
                                            endforeach; ?>
                                        </tbody>
                                        </thead>
                                    </table>






                                </div>

                            </div>
                            <div class="tab-pane fade" id="profile-pills">

                                <h4>
                                    <?php
                                    echo $this->Html->link(('Agregar menor de 6 a 11 años'),
                                        array(
                                            'controller' => 'Infantils',
                                            'action' => 'add?infantils=' . $familia['Familia']['id']
                                        ),
                                        array(
                                            'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
                                            'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                        )
                                    ); ?></h4>
                                <div class="card-body">


                                    <?php if (!empty($familia['Primerainfancia'])) : ?>
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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

                                                            <td class="sorting_1"><?php echo $infantil['id']; ?></td>


                                                            <!--td> <?php
                                                                    // Conectar a la base de datos
                                                                    $link = mysqli_connect($serv, $userS, $passS);

                                                                    if (!$link) {
                                                                        die("Error en la conexión: " . mysqli_connect_error());
                                                                    }

                                                                    // Configura el juego de caracteres UTF-8
                                                                    mysqli_set_charset($link, "utf8");

                                                                    // Consulta para seleccionar personas menores de 2 años
                                                                    $query = "SELECT primernombre, primerapellido FROM Personas WHERE edad < 2";

                                                                    $resultado = mysqli_query($link, $query);

                                                                    if ($resultado) {
                                                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                                                            echo "Nombre: " . $fila['primernombre'] . ", Apellido: " . $fila['primerapellido'] . "<br>";
                                                                        }
                                                                        mysqli_free_result($resultado);
                                                                    } else {
                                                                        echo "Error en la consulta: " . mysqli_error($link);
                                                                    }

                                                                    // Cierra la conexión a la base de datos
                                                                    mysqli_close($link);
                                                                    ?></td-->


                                                            <td><?php

                                                                $link = mysqli_connect($serv, $userS, $passS);
                                                                mysqli_select_db($link, $bd);
                                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $primerainfancia['persona_id']);
                                                                while ($fila = mysqli_fetch_array($result)) {
                                                                    echo $fila['primernombre'];

                                                                    mysqli_close($link);
                                                                }
                                                                ?> <?php
                                                                    //echo $adolescencia['responsable_id']; 
                                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                                    mysqli_select_db($link, $bd);
                                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                                    $result = mysqli_query($link, "SELECT primerapellido FROM Personas WHERE id = " . $primerainfancia['persona_id']);
                                                                    while ($fila = mysqli_fetch_array($result)) {
                                                                        echo $fila['primerapellido'];

                                                                        mysqli_close($link);
                                                                    }
                                                                    ?></td>




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
                                                                                ('Borrar'),
                                                                                array(
                                                                                    'controller' => 'primerainfancias',
                                                                                    'action' => 'delete', $primerainfancia['id']
                                                                                ),
                                                                                array('style' => 'color: blue; font-size: 16px; font-weight: bold;'),
                                                                                __('Are you sure you want to delete # %s?', $primerainfancia['id'])
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
                            <div class="tab-pane fade" id="messages-pills">

                                <div class="card-body">
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
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-planes">
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
                                                            <td class="sorting_1"><?php echo $adolescencia['id']; ?></td>

                                                            <td><?php echo $adolescencia['familia_id']; ?></td>
                                                            <td><?php echo $adolescencia['indicemasacorporal']; ?></td>
                                                            <td><?php echo $adolescencia['consumospa']; ?></td>
                                                            <td><?php echo $adolescencia['metodosanticonceptivos']; ?></td>
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
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-informes">
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
                                                            <td class="sorting_1"><?php echo $juventudadulto['id']; ?></td>
                                                            <td><?php echo $juventudadulto['indicemasacorporal']; ?></td>
                                                            <td><?php echo $juventudadulto['condicioncronica']; ?></td>
                                                            <td><?php echo $juventudadulto['controlprenatal']; ?></td>
                                                            <td><?php echo $juventudadulto['canalizacionuno']; ?></td>
                                                            <td><?php echo $juventudadulto['canalizaciondos']; ?></td>
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
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-actas">
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
                                                            <td class="sorting_1"><?php echo $acta['id']; ?></td>
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
                    <!-- /.panel-body -->
                </div>




            </div>
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
                responsive: true
            });
        });
        $(document).ready(function() {
            $('#dataTables-actividades').DataTable({
                responsive: true
            });
        });
        $(document).ready(function() {
            $('#dataTables-informes').DataTable({
                responsive: true
            });
        });
        $(document).ready(function() {
            $('#dataTables-planes').DataTable({
                responsive: true
            });
        });
        $(document).ready(function() {
            $('#dataTables-actas').DataTable({
                responsive: true
            });
        });
    </script>>