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
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="p-2 bg-light border">ID:
                    <?php echo ($familia['Familia']['id']); ?> - Fecha:
                    <?php
                    echo ($familia['Sociambiental']['fecha']); ?>
                    Familia:
                    <?php echo $this->Html->link($familia['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $familia['Sociambiental']['id'])); ?>
                    Representante hogar:
                    <?php echo '<strong>' . $familia['Familia']['nombres'] . '</strong> <strong>' . $familia['Familia']['apellidos'] . '</strong>'; ?>
                    Curso de vida del hogar:
                    <?php echo ($familia['Familia']['cursovidafamilia']); ?>

                    Estilo de Vida:
                    <?php echo ($familia['Familia']['estilodevidapredominante']); ?>
                </div>



            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Personas del gurpo familiar
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#home-pills" data-toggle="tab">Primera infancia 0 a 5 años</a>
                        </li>
                        <li><a href="#profile-pills" data-toggle="tab">Infancia 6 a 11 años</a>
                        </li>
                        <li><a href="#messages-pills" data-toggle="tab">Adolecencia</a>
                        </li>
                        <li><a href="#settings-pills" data-toggle="tab">Juventud</a>
                        </li>
                        <li><a href="#actas-pills" data-toggle="tab">Adulto Mayor</a>
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


                                <table width="100%" class="table table-striped table-bordered table-hover"
                                    id="dataTables-example">
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
                                                        //echo $plsesion['responsable_id']; 
                                                        $link = mysqli_connect($serv, $userS, $passS);
                                                        mysqli_select_db($link, $bd);
                                                        $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                        $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $primerainfancia['persona_id']);
                                                        while ($fila = mysqli_fetch_array($result)) {
                                                            echo $fila['primernombre'];

                                                            mysqli_close($link);
                                                        }
                                                        ?> <?php
                                                            //echo $plsesion['responsable_id']; 
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
                                                    <button type="button" class="btn btn-default dropdown-toggle"
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
                            <h4>Infancia menor de 6 a 11 años</h4>
                            <h4>
                                <?php
                                echo $this->Html->link(('Agregar menor de dos a 5 años'),
                                    array(
                                        'controller' => 'Primerainfancias',
                                        'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
                                    ),
                                    array(
                                        'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                    )
                                ); ?></h4>
                            <div class="card-body">


                                <?php if (!empty($familia['Primerainfancia'])) : ?>
                                <table width="100%" class="table table-striped table-bordered table-hover"
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
                                                            //echo $plsesion['responsable_id']; 
                                                            $link = mysqli_connect($serv, $userS, $passS);
                                                            mysqli_select_db($link, $bd);
                                                            $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                            $result = mysqli_query($link, "SELECT primernombre FROM Personas WHERE id = " . $primerainfancia['persona_id']);
                                                            while ($fila = mysqli_fetch_array($result)) {
                                                                echo $fila['primernombre'];

                                                                mysqli_close($link);
                                                            }
                                                            ?> <?php
                                                            //echo $plsesion['responsable_id']; 
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
                                                    <button type="button" class="btn btn-default dropdown-toggle"
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
                            <h4>Planes de sesión</h4>
                            <div class="card-body">


                                <?php if (!empty($producto['Plsesion'])) : ?>
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
                                        <?php foreach ($producto['Plsesion'] as $plsesion) :
                                                if (!empty($plsesion['id'])) {
                                            ?>
                                        <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $plsesion['id']; ?></td>

                                            <td><?php echo $plsesion['fecha']; ?></td>
                                            <td><?php echo $plsesion['tema']; ?></td>
                                            <td><?php echo $plsesion['intension']; ?></td>
                                            <td><?php echo $plsesion['dimension']; ?></td>
                                            <td><?php
                                                            //echo $plsesion['responsable_id']; 
                                                            $link = mysqli_connect($serv, $userS, $passS);
                                                            mysqli_select_db($link, $bd);
                                                            $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                            $result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $plsesion['responsable_id']);
                                                            while ($fila = mysqli_fetch_array($result)) {
                                                                echo $fila['nombres'];

                                                                mysqli_close($link);
                                                            }
                                                            ?></td>

                                            <td class="actions">
                                                <?php //echo $this->Html->link(('Ver'), array('target' => '_blank','controller' => 'plsesiones', 'action' => 'view', $plsesion['id'])); 
                                                            echo $this->Html->link("Ver", "../plsesiones/view/" . $plsesion['id'], array('target' => '_blank'));
                                                            ?>
                                                <?php //echo $this->Html->link(('Editar'), array('controller' => 'plsesiones', 'action' => 'edit', $plsesion['id'])); 
                                                            echo $this->Html->link("Editar", "../plsesiones/edit/" . $plsesion['id'], array('target' => '_blank'));
                                                            ?>
                                            </td>
                                        </tr>
                                        <?php }
                                            endforeach; ?>
                                    </tbody>
                                </table>
                                <?php endif; ?>

                                <div class="actions">
                                    <ul>
                                        <li><?php echo $this->Html->link(('Nuevo Plan de Sesión'), array('controller' => 'plsesiones', 'action' => 'add')); ?>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings-pills">
                            <h4>Informes eventos</h4>
                            <div class="card-body">

                                <?php if (!empty($producto['Infoevento'])) : ?>
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
                                        <?php foreach ($producto['Infoevento'] as $infoevento) :
                                                if (!empty($infoevento['id'])) {
                                            ?>
                                        <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $infoevento['id']; ?></td>
                                            <td><?php echo $infoevento['fecha']; ?></td>
                                            <td><?php echo $infoevento['tema']; ?></td>
                                            <td><?php echo $infoevento['tipo']; ?></td>
                                            <td><?php echo $infoevento['anexo']; ?></td>
                                            <td><?php echo $infoevento['observacion']; ?></td>
                                            <td><?php
                                                            //echo $plsesion['responsable_id']; 
                                                            $link = mysqli_connect($serv, $userS, $passS);
                                                            mysqli_select_db($link, $bd);
                                                            $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                            $result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $infoevento['responsable_id']);
                                                            while ($fila = mysqli_fetch_array($result)) {
                                                                echo $fila['nombres'];

                                                                mysqli_close($link);
                                                            }
                                                            ?></td>

                                            <td class="actions">
                                                <?php //echo $this->Html->link(('Ver'), array('target' => '_blank','controller' => 'plsesiones', 'action' => 'view', $plsesion['id'])); 
                                                            echo $this->Html->link("Ver", "../infoeventos/view/" . $infoevento['id'], array('target' => '_blank'));
                                                            ?>
                                                <?php //echo $this->Html->link(('Editar'), array('controller' => 'plsesiones', 'action' => 'edit', $plsesion['id'])); 
                                                            echo $this->Html->link("Editar", "../infoeventos/edit/" . $infoevento['id'], array('target' => '_blank'));
                                                            ?>
                                            </td>
                                        </tr>
                                        <?php }
                                            endforeach; ?>
                                    </body>
                                </table>
                                <?php endif; ?>

                                <div class="actions">
                                    <ul>
                                        <li><?php echo $this->Html->link(('Nuevo informe'), array('controller' => 'infoeventos', 'action' => 'add')); ?>
                                        </li>
                                    </ul>
                                </div>
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