<?php

/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
// $cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
// $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
$cakeDescription = 'Ciudad Bienestar: Sistema de Información';
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Sistema Auditoria Salud Pública</title>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css', 'sb-admin-2.css', 'font-awesome.min.css', 'metisMenu.min.css', 'morris.css', 'dataTables.bootstrap.css', 'dataTables.responsive.css', 'jquery.dataTables.min.css', 'examples.css'));
    //echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css', 'sb-admin-2.css', 'font-awesome.min.css', 'metisMenu.min.css', 'morris.css', 'dataTables.bootstrap.css', 'dataTables.responsive.css', 'jquery.dataTables.min.css', 'examples.css'));
    echo $this->Html->script(array('jquery-1.11.0', 'jquery', 'jquery.min', 'docs.min', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min', 'morris.min', 'morris-data', 'raphael-min', 'excanvas.min', 'funciones'));
    //echo $this->Html->script(array('jquery-1.11.0', 'jquery', 'jquery.min', 'dataTables.bootstrap.min', 'dataTables.responsive', 'jquery.dataTables.min', 'docs.min', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min', 'morris.min', 'morris-data', 'raphael-min', 'jquery.flot.pie', 'jquery.flot', 'excanvas.min', 'jquery.flot.resize', 'jquery.flot.tooltip.min', 'flot-data', 'jquery.flot.time', 'funciones'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('js');
    ?>

    <?php
    echo $this->Form->create("User");
    ?>



</head>

<!--body class="bs-docs-home"-->

<body>



    <div id="wrapper">


        <!-- Navigation -->


        <!-- /.navbar-header -->


        <!-- /.navbar-top-links -->

        <div>
            <div class="container">
                <div class="row">

                    <ul class="nav" id="side-menu">

                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <img src="../img/grancapital.png" alt="Imagen de marcador genérico" width="199px" height="auto">
                            </div>
                        </li>

                        <li>
                            <div class="input-group custom-search-form ">


                                <!--label for="Usuario" class="col-md-4 col-form-label text-md-right">Ususario</label-->
                                <p> <input name="data[User][username]" maxlength="50" type="text" id="UserUsername" style="border-radius: 6px;" class="form-control" name="UserUsername" required="" autofocus="" placeholder="Usuario"> <br>
                                    <!--label for="Password" class="col-md-4 col-form-label text-md-right">Password</label-->
                                </p>
                                <p><input name="data[User][password]" type="password" id="UserPassword" style="border-radius: 6px;" class="form-control" name="UserUsername" required="" autofocus="" placeholder="Contraseña"><br></p>


                                <!--label for="Captcha" class="col-md-4 col-form-label text-md-right">Captcha</label-->
                                <p> <canvas id="myCanvas" name="myCanvas" width="180" height="50" style="border-radius: 6px;"></canvas><br>
                                    <button onclick="captcha();" type="submit"> <img src="../img/Actualizar.png" alt="Imagen de marcador genérico" width="20px" height="20px"></button>
                                </p>
                                <input name="data[User][codigo]" style="border-radius: 6px;" id="codigo" required="required" onkeypress="mayus(this);" type="text" class="form-control" name="UserUsername" required="" autofocus="" placeholder="Codigo verificación"><br>
                                <?php echo $this->Form->input("vercod", array("label" => "", "type" => "hidden", "style" => "width:200px;", "id" => "vercod")); ?>
                                <br>
                                <input onfocus="verCod()" type="submit" class="btn btn-primary" value="Entrar">


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.sidebar-collapse -->
    </div>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                    </div>

                                    <form>
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" />
                                            <label class="form-label" for="form2Example11">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" />
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                                in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-outline-danger">Create new</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.navbar-static-side -->


    <!-- /#page-wrapper -->

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>

</body>


<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Gestión de la Salud Publica. Versión 1.0 - 2023 <a href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->

<script type="text/javascript">
    captcha();
</script>