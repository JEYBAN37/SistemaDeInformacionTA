<?php $this->layout = 'default_familia';
echo $this->Html->script('validationFamilia'); ?>
<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '3307';
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
        <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">Seguimiento a
            Canalizaciones</h1>
    </div>

    <div class="panel-body">
        <div class="dataTable_wrapper">

            <div class="row">
                <div class="col-lg-12">

                    <table width="100%" class="table table-responsive table-striped table-bordered  ">
                        <tr>
                            <td>
                                <strong>ID:</strong>
                                <?php
								echo ($canalizacion['Canalizacion']['id']); ?>
                            </td>



                            <td><strong>Tipo de entidad:</strong>
                                <?php
								echo ($canalizacion['Canalizacion']['tipo']);
								?>
                            </td>
                            <td>
                                <strong>Nombre entidad:</strong>
                                <?php echo ($canalizacion['Canalizacion']['nombre']); ?>
                            </td>

                        </tr>
                        <tr>
                            <td><strong>Sede:</strong>
                                <?php echo ($canalizacion['Canalizacion']['sede']); ?>
                            </td>
                            <td colspan="2"> <strong> Tel. Institucional:</strong>
                                <?php echo ($canalizacion['Canalizacion']['telefonoInstitucional']); ?>
                            </td>


                        <tr>

                            <td><strong>Enlace Canalización:</strong>
                                <?php echo ($canalizacion['Canalizacion']['enlaceuno']); ?>
                            </td>
                            <td colspan="2"><strong>Cargo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['cargouno']); ?></td>


                        </tr>

                        <tr>
                            <td><strong>Teléfono:</strong>
                                <?php echo ($canalizacion['Canalizacion']['telefono1']); ?>
                            </td>
                            <td colspan="6"><strong>Correo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['correo1']); ?>
                            </td>
                        </tr>

                        <tr>

                            <td><strong>Enlace Canalización::</strong>
                                <?php echo ($canalizacion['Canalizacion']['enlacedos']); ?>
                            </td>
                            <td colspan="6"><strong>Cargo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['cargodos']); ?></td>


                        </tr>

                        <tr>
                            <td><strong>Teléfono:</strong>
                                <?php echo ($canalizacion['Canalizacion']['telefono2']); ?>
                            </td>
                            <td colspan="6"><strong>Correo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['correo2']); ?>
                            </td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

    </fieldset>

    <div class="panel-heading">

        <div>


            <button type="button" class="my-button" style="margin-top: -25px;">
                <?php echo $this->Html->link(('Editar datos de enlaces'),
                    array('action' => 'edit', $canalizacion['Canalizacion']['id']),
                    array(
                        'style' => 'color:white;'
                    )
                ); ?>
            </button>

</div>

</div>
</div>


<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Primera infancia</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">
<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-f">
                                                                <thead>
                                    <tr>
                                        <th><?php echo ('Id'); ?></th>
                                        <th><?php echo ('Familia Id'); ?></th>
                                        <th><?php echo ('Tipodocumento'); ?></th>
                                        <th><?php echo ('Numerodoc'); ?></th>
                                        <th><?php echo ('Primerapellido'); ?></th>
                                        <th><?php echo ('Segundoapellido'); ?></th>
                                        <th><?php echo ('Primernombre'); ?></th>
                                        <th><?php echo ('Segundonombre'); ?></th>
                                        <th><?php echo ('Fechanac'); ?></th>
                                        <th><?php echo ('Edad'); ?></th>
                                        <th><?php echo ('Sexo'); ?></th>
                                        <th><?php echo ('Aseguradora'); ?></th>
                                        <th><?php echo ('Regimen'); ?></th>
                                        <th><?php echo ('Estadoafiliacion'); ?></th>
                                        <th><?php echo ('Telefono'); ?></th>
                                        <th><?php echo ('Telefono1'); ?></th>
                                        <th><?php echo ('Email'); ?></th>
                                        <th><?php echo ('Prematuro'); ?></th>
                                        <th><?php echo ('Discapacidad'); ?></th>
                                        <th><?php echo ('Canalizacionuno'); ?></th>
                                        <th><?php echo ('Canalizaciondos'); ?></th>
                                        <th><?php echo ('Educacionuno'); ?></th>
                                        <th><?php echo ('Canalizacion Id'); ?></th>
                                        <th><?php echo ('Canalizaciontres'); ?></th>
                                        <th><?php echo ('FechaRegistro'); ?></th>
                                        <th>Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Primerainfancia'] as $primerainfancia) : ?>
                                                                            <td class="sorting_1"><?php echo $primerainfancia['id']; ?></td>
                                        <td><?php echo $primerainfancia['familia_id']; ?></td>
                                        <td><?php echo $primerainfancia['tipodocumento']; ?></td>
                                        <td><?php echo $primerainfancia['numerodoc']; ?></td>
                                        <td><?php echo $primerainfancia['primerapellido']; ?></td>
                                        <td><?php echo $primerainfancia['segundoapellido']; ?></td>
                                        <td><?php echo $primerainfancia['primernombre']; ?></td>
                                        <td><?php echo $primerainfancia['segundonombre']; ?></td>
                                        <td><?php echo $primerainfancia['fechanac']; ?></td>
                                        <td><?php echo $primerainfancia['edad']; ?></td>
                                        <td><?php echo $primerainfancia['sexo']; ?></td>
                                        <td><?php echo $primerainfancia['aseguradora']; ?></td>
                                        <td><?php echo $primerainfancia['regimen']; ?></td>
                                        <td><?php echo $primerainfancia['estadoafiliacion']; ?></td>
                                        <td><?php echo $primerainfancia['telefono']; ?></td>
                                        <td>
                                            <?php

													$link = mysqli_connect($serv, $userS, $passS);
													mysqli_select_db($link, $bd);
													$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
													$result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $primerainfancia['familia_id']);
													while ($fila = mysqli_fetch_array($result)) {
														echo $fila['celular'];

														mysqli_close($link);
													}
													?>
                                        </td>
                                        <td><?php echo $primerainfancia['email']; ?></td>
                                        <td><?php echo $primerainfancia['prematuro']; ?></td>
                                        <td><?php echo $primerainfancia['discapacidad']; ?></td>
                                        <td><?php echo $primerainfancia['canalizacionuno']; ?></td>
                                        <td><?php echo $primerainfancia['canalizaciondos']; ?></td>
                                        <td><?php echo $primerainfancia['educacionuno']; ?></td>
                                        <td><?php echo $primerainfancia['canalizacion_id']; ?></td>
                                        <td><?php echo $primerainfancia['canalizaciontres']; ?></td>
                                        <td><?php echo $primerainfancia['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="my-button" style="margin-top: -2px;" data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>

                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(('Ver'),
                                                            array('controller' => 'primerainfancias', 'action' => 'view', $primerainfancia['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                            </li>
                                                    <li><?php echo $this->Html->link(('Editar Estado'),
                                                            array('controller' => 'primerainfancias', 'action' => 'editcanalizacion', $primerainfancia['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                            </li>
                                                    <li><?php echo $this->Html->link(('Borrar'),
                                                            array('controller' => 'primerainfancias', 'action' => 'delete', $primerainfancia['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                                    </li>
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


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Infancia</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">
<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><?php echo ('Id'); ?></th>
                                        <th><?php echo ('Familia Id'); ?></th>
                                        <th><?php echo ('Tipodocumento'); ?></th>
                                        <th><?php echo ('Numerodoc'); ?></th>
                                        <th><?php echo ('Primerapellido'); ?></th>
                                        <th><?php echo ('Segundoapellido'); ?></th>
                                        <th><?php echo ('Primernombre'); ?></th>
                                        <th><?php echo ('Segundonombre'); ?></th>
                                        <th><?php echo ('Fechanac'); ?></th>
                                        <th><?php echo ('Edad'); ?></th>
                                        <th><?php echo ('Sexo'); ?></th>
                                        <th><?php echo ('Aseguradora'); ?></th>
                                        <th><?php echo ('Regimen'); ?></th>
                                        <th><?php echo ('Estadoafiliacion'); ?></th>
                                        <th><?php echo ('Telefono'); ?></th>
                                        <th><?php echo ('Telefono1'); ?></th>
                                        <th><?php echo ('Email'); ?></th>
                                        <th><?php echo ('Discapacidad'); ?></th>
                                        <th><?php echo ('Canalizacionuno'); ?></th>
                                        <th><?php echo ('Canalizaciondos'); ?></th>
                                        <th><?php echo ('Canalizaciontres'); ?></th>
                                        <th><?php echo ('Canalizacion Id'); ?></th>
                                        <th><?php echo ('Educacionuno'); ?></th>
                                        <th><?php echo ('FechaRegistro'); ?></th>
                                        <th>Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Infantil'] as $infantil) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1"><?php echo $infantil['id']; ?></td>
                                        <td><?php echo $infantil['familia_id']; ?></td>
                                        <td><?php echo $infantil['tipodocumento']; ?></td>
                                        <td><?php echo $infantil['numerodoc']; ?></td>
                                        <td><?php echo $infantil['primerapellido']; ?></td>
                                        <td><?php echo $infantil['segundoapellido']; ?></td>
                                        <td><?php echo $infantil['primernombre']; ?></td>
                                        <td><?php echo $infantil['segundonombre']; ?></td>
                                        <td><?php echo $infantil['fechanac']; ?></td>
                                        <td><?php echo $infantil['edad']; ?></td>
                                        <td><?php echo $infantil['sexo']; ?></td>
                                        <td><?php echo $infantil['aseguradora']; ?></td>
                                        <td><?php echo $infantil['regimen']; ?></td>
                                        <td><?php echo $infantil['estadoafiliacion']; ?></td>
                                        <td><?php echo $infantil['telefono']; ?></td>
                                        <td>
                                            <?php

													$link = mysqli_connect($serv, $userS, $passS);
													mysqli_select_db($link, $bd);
													$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
													$result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $infantil['familia_id']);
													while ($fila = mysqli_fetch_array($result)) {
														echo $fila['celular'];

														mysqli_close($link);
													}
													?>
                                        </td>
                                        <td><?php echo $infantil['email']; ?></td>
                                        <td><?php echo $infantil['discapacidad']; ?></td>
                                        <td><?php echo $infantil['canalizacionuno']; ?></td>
                                        <td><?php echo $infantil['canalizaciondos']; ?></td>
                                        <td><?php echo $infantil['canalizaciontres']; ?></td>
                                        <td><?php echo $infantil['canalizacion_id']; ?></td>
                                        <td><?php echo $infantil['educacionuno']; ?></td>
                                        <td><?php echo $infantil['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <div class="btn-group">
                                                    <button type="button" class="my-button" style="margin-top: -2px;" data-toggle="dropdown">
                                                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                    </button>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><?php echo $this->Html->link(('Ver'),
                                                                array('controller' => 'infantils', 'action' => 'view', $infantil['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                            </li>
                                                        <li><?php echo $this->Html->link(('Editar Estado'),
                                                                array('controller' => 'infantils', 'action' => 'editcanalizacion', $infantil['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                            </li>
                                                        <li><?php echo $this->Html->link(('Borrar'),
                                                                array('controller' => 'infantils', 'action' => 'delete', $infantil['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                        </li>
                                                </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                                                    </div>
                    </div>
                </div>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Adolescencia
</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">
<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-a">
                                                                <thead>
                                    <tr>
                                        <th><?php echo ('Id'); ?></th>
                                        <th><?php echo ('Familia Id'); ?></th>
                                        <th><?php echo ('Tipodocumento'); ?></th>
                                        <th><?php echo ('Numerodoc'); ?></th>
                                        <th><?php echo ('Primerapellido'); ?></th>
                                        <th><?php echo ('Segundoapellido'); ?></th>
                                        <th><?php echo ('Primernombre'); ?></th>
                                        <th><?php echo ('Segundonombre'); ?></th>
                                        <th><?php echo ('Fechanac'); ?></th>
                                        <th><?php echo ('Edad'); ?></th>
                                        <th><?php echo ('Sexo'); ?></th>
                                        <th><?php echo ('Genero'); ?></th>
                                        <th><?php echo ('Aseguradora'); ?></th>
                                        <th><?php echo ('Regimen'); ?></th>
                                        <th><?php echo ('Estadoafiliacion'); ?></th>
                                        <th><?php echo ('Telefono'); ?></th>
                                        <th><?php echo ('Telefono1'); ?></th>
                                        <th><?php echo ('Email'); ?></th>
                                        <th><?php echo ('Discapacidad'); ?></th>
                                        <th><?php echo ('Canalizacionuno'); ?></th>
                                        <th><?php echo ('Canalizaciondos'); ?></th>
                                        <th><?php echo ('Canalizaciontres'); ?></th>
                                        <th><?php echo ('Canalizacion Id'); ?></th>
                                        <th><?php echo ('Educacion'); ?></th>
                                        <th><?php echo ('FechaRegistro'); ?></th>
                                        <th>Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Adolescencia'] as $adolescencia) : ?>
                                                                            <td class="sorting_1"><?php echo $adolescencia['id']; ?></td>
                                        <td><?php echo $adolescencia['familia_id']; ?></td>
                                        <td><?php echo $adolescencia['tipodocumento']; ?></td>
                                        <td><?php echo $adolescencia['numerodoc']; ?></td>
                                        <td><?php echo $adolescencia['primerapellido']; ?></td>
                                        <td><?php echo $adolescencia['segundoapellido']; ?></td>
                                        <td><?php echo $adolescencia['primernombre']; ?></td>
                                        <td><?php echo $adolescencia['segundonombre']; ?></td>
                                        <td><?php echo $adolescencia['fechanac']; ?></td>
                                        <td><?php echo $adolescencia['edad']; ?></td>
                                        <td><?php echo $adolescencia['sexo']; ?></td>
                                        <td><?php echo $adolescencia['genero']; ?></td>
                                        <td><?php echo $adolescencia['aseguradora']; ?></td>
                                        <td><?php echo $adolescencia['regimen']; ?></td>
                                        <td><?php echo $adolescencia['estadoafiliacion']; ?></td>
                                        <td><?php echo $adolescencia['telefono']; ?></td>
                                        <td>
                                            <?php

													$link = mysqli_connect($serv, $userS, $passS);
													mysqli_select_db($link, $bd);
													$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
													$result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $adolescencia['familia_id']);
													while ($fila = mysqli_fetch_array($result)) {
														echo $fila['celular'];

														mysqli_close($link);
													}
													?>
                                        </td>
                                        <td><?php echo $adolescencia['email']; ?></td>
                                        <td><?php echo $adolescencia['discapacidad']; ?></td>
                                        <td><?php echo $adolescencia['canalizacionuno']; ?></td>
                                        <td><?php echo $adolescencia['canalizaciondos']; ?></td>
                                        <td><?php echo $adolescencia['canalizaciontres']; ?></td>
                                        <td><?php echo $adolescencia['canalizacion_id']; ?></td>
                                        <td><?php echo $adolescencia['educacion']; ?></td>
                                        <td><?php echo $adolescencia['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="my-button" style="margin-top: -2px;" data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>

                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(('Ver'),
                                                            array('controller' => 'adolescencias', 'action' => 'view', $adolescencia['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                            </li>
                                                    <li><?php echo $this->Html->link(('Editar Estado'),
                                                            array('controller' => 'adolescencias', 'action' => 'editcanalizacion', $adolescencia['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                            </li>
                                                    <li><?php echo $this->Html->link(('Borrar'),
                                                            array('controller' => 'adolescencias', 'action' => 'delete', $adolescencia['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                                    </li>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                                                    </div>
                    </div>
                </div>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Adultos</h3>
<hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 15px; margin-top: 1px;">
<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-j">
                                                                <thead>
                                    <tr>
                                        <th><?php echo ('Id'); ?></th>
                                        <th><?php echo ('Familia Id'); ?></th>
                                        <th><?php echo ('Tipodocumento'); ?></th>
                                        <th><?php echo ('Numerodoc'); ?></th>
                                        <th><?php echo ('Primerapellido'); ?></th>
                                        <th><?php echo ('Segundoapellido'); ?></th>
                                        <th><?php echo ('Primernombre'); ?></th>
                                        <th><?php echo ('Segundonombre'); ?></th>
                                        <th><?php echo ('Fechanac'); ?></th>
                                        <th><?php echo ('Edad'); ?></th>
                                        <th><?php echo ('Sexo'); ?></th>
                                        <th><?php echo ('Genero'); ?></th>
                                        <th><?php echo ('Aseguradora'); ?></th>
                                        <th><?php echo ('Regimen'); ?></th>
                                        <th><?php echo ('Estadoafiliacion'); ?></th>
                                        <th><?php echo ('Telefono'); ?></th>
                                        <th><?php echo ('Telefono1'); ?></th>
                                        <th><?php echo ('Email'); ?></th>
                                        <th><?php echo ('Discapacidad'); ?></th>
                                        <th><?php echo ('Canalizacionuno'); ?></th>
                                        <th><?php echo ('Canalizaciondos'); ?></th>
                                        <th><?php echo ('Canalizaciontres'); ?></th>
                                        <th><?php echo ('Canalizacion Id'); ?></th>
                                        <th><?php echo ('Educacion'); ?></th>
                                        <th><?php echo ('FechaRegistro'); ?></th>
                                        <th>Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Juventudadulto'] as $juventudadulto) : ?>
                                                                            <td class="sorting_1"><?php echo $juventudadulto['id']; ?></td>
                                        <td><?php echo $juventudadulto['familia_id']; ?></td>
                                        <td><?php echo $juventudadulto['tipodocumento']; ?></td>
                                        <td><?php echo $juventudadulto['numerodoc']; ?></td>
                                        <td><?php echo $juventudadulto['primerapellido']; ?></td>
                                        <td><?php echo $juventudadulto['segundoapellido']; ?></td>
                                        <td><?php echo $juventudadulto['primernombre']; ?></td>
                                        <td><?php echo $juventudadulto['segundonombre']; ?></td>
                                        <td><?php echo $juventudadulto['fechanac']; ?></td>
                                        <td><?php echo $juventudadulto['edad']; ?></td>
                                        <td><?php echo $juventudadulto['sexo']; ?></td>
                                        <td><?php echo $juventudadulto['genero']; ?></td>
                                        <td><?php echo $juventudadulto['aseguradora']; ?></td>
                                        <td><?php echo $juventudadulto['regimen']; ?></td>
                                        <td><?php echo $juventudadulto['estadoafiliacion']; ?></td>
                                        <td><?php echo $juventudadulto['telefono']; ?></td>
                                        <td>
                                            <?php

													$link = mysqli_connect($serv, $userS, $passS);
													mysqli_select_db($link, $bd);
													$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
													$result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $juventudadulto['familia_id']);
													while ($fila = mysqli_fetch_array($result)) {
														echo $fila['celular'];

														mysqli_close($link);
													}
													?>
                                        </td>
                                        <td><?php echo $juventudadulto['email']; ?></td>
                                        <td><?php echo $juventudadulto['discapacidad']; ?></td>

                                        <td><?php echo $juventudadulto['canalizacionuno']; ?></td>
                                        <td><?php echo $juventudadulto['canalizaciondos']; ?></td>
                                        <td><?php echo $juventudadulto['canalizaciontres']; ?></td>
                                        <td><?php echo $juventudadulto['canalizacion_id']; ?></td>
                                        <td><?php echo $juventudadulto['educacion']; ?></td>
                                        <td><?php echo $juventudadulto['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="my-button" style="margin-top: -2px;" data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>

                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(('Ver'),
                                                            array('controller' => 'juventudadultos', 'action' => 'view', $juventudadulto['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                            </li>
                                                    <li><?php echo $this->Html->link(('Editar Estado'),
                                                            array('controller' => 'juventudadultos', 'action' => 'editcanalizacion', $juventudadulto['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                            </li>
                                                    <li><?php echo $this->Html->link(('Borrar'),
                                                            array('controller' => 'juventudadultos', 'action' => 'delete', $juventudadulto['id']),
                                                            array(
                                                                'style' => 'font-size: 14px;'
                                                            )
                                                        ); ?>
                                                    </li>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                                                    </div>
                    </div>
                </div>


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
        "pagingType": "simple",
        "pageLength": 4,
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
    $('#dataTables-f').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
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
    $('#dataTables-a').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
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
    $('#dataTables-j').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
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

    if (msie > 0 || !!navigator.userAgent.matc(/Trident.*rv\:11\./)) // If Internet Explorer
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