<?php?
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
$cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SICB - PIC - 2020</title>


     



<?php echo $this->Html->charset(); ?>
        <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
        </title>
            <?php
            echo $this->Html->meta('icon');

            //echo $this->Html->css(array('style','cover.css','bootstrap.min.css','bootstrap-theme.min.css'));
           echo $this->Html->css(array('tech.css','bootstrap.min.css', 'bootstrap-theme.css','sb-admin-2.css','font-awesome.min.css','metisMenu.min.css','css.css','stylepage.css','responsive.css',`morris.css`));
            //echo $this->Html->script(array('bootstrap.min','jquery.min'));
           // echo $this->Html->script(array());
            echo $this->Html->script(array('jquery-1.11.0','jquery','jquery.min','docs.min', 'metisMenu.min','sb-admin-2','bootstrap.min','raphael-min','build-svgs','tether.min','custom','morris.min','morris-data','raphael-min','jquery.flot.pie','jquery.flot','excanvas.min','jquery.flot.resize','jquery.flot.tooltip.min','flot-data'));



           

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            echo $this->fetch('js');
            ?>



    </head>

    <!--body class="bs-docs-home"-->
    <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../users/home">Sistema de Información Ciudad Bienestar</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <i> <svg class="bi bi-info-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg>  <!--img src="../img/notas.png" alt="Imagen de marcador genérico" width="40px" height="40px"--></i>
                    <i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                       <li>
                            <a href="#">
                                <div>
                                    <strong>Acceso a sistema</strong>
                                    <span class="pull-right text-muted">
                                        <em>21 05 2020</em>
                                    </span>
                                </div>
                                <div>Realizar la solicitud de usuario y contraseña al correo gestionconocimientosms@gmail.com</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Ajuste de modulos</strong>
                                    <span class="pull-right text-muted">
                                        <em>21 05 2020</em>
                                    </span>
                                </div>
                                <div>Se ajustó la opciones de menu e ingreso</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Anexo tecnico COVID  </strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>En el modulo anexo tecnico puede revisar los productos y tareas</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>ir a notas Administrador</strong>
                                <i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i><svg class="bi bi-list-task" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"></path>
                          <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"></path>
                          <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"></path>
                        </svg><!--img src="../img/check1.png" alt="Imagen de marcador genérico" width="40px" height="40px"--></i><i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"> </i>  </a> 
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Salud Menta -CSSM</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Gestion Diferencial - GDPV</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Salud Sexual - SDSDR</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Cronicas -VSCNT</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver más estadísticas</strong>
                               <img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i><svg class="bi bi-alarm-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.5.5A.5.5 0 0 1 6 0h4a.5.5 0 0 1 0 1H9v1.07a7.002 7.002 0 0 1 3.537 12.26l.817.816a.5.5 0 0 1-.708.708l-.924-.925A6.967 6.967 0 0 1 8 16a6.967 6.967 0 0 1-3.722-1.07l-.924.924a.5.5 0 0 1-.708-.708l.817-.816A7.002 7.002 0 0 1 7 2.07V1H5.999a.5.5 0 0 1-.5-.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1zm-5 4a.5.5 0 0 0-1 0v3.882l-1.447 2.894a.5.5 0 1 0 .894.448l1.5-3A.5.5 0 0 0 8.5 9V5z"></path>
                    </svg><!--img src="../img/tiempos.png" alt="Imagen de marcador genérico" width="40px" height="40px"--></i><i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"> </i>
                                        </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i> Capacitacion SICB
                                    <span class="pull-right text-muted small">21 mayo 2019</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                   <i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>  Primer Cohorte
                                    <span class="pull-right text-muted small">30 Junio 2020</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>  Segundo Cohorte
                                    <span class="pull-right text-muted small">30 Agosto 2020</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                   <i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>  Monitoreo ejecucion PIC
                                    <span class="pull-right text-muted small">10 julio 2020</span>
                                </div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Revisar cronograma</strong>
                               <i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i> 
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                             <i><svg class="bi bi-toggle-off" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"></path>
                    </svg><!--img src="../img/off.png" alt="Imagen de marcador genérico" width="40px" height="40px"--></i><i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"> </i>
                                        </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i><img src="../img/users1.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i><img src="../img/config.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i></i> <?= $usr = $this->Session->read("usr");echo $this->Html->link("Cerrar Sesión", "/users/salir", array(
                                    ));
                                    ?> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <?php echo $this->element('nav_vertical'); ?>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>

       </div> <!-- /#page-wrapper -->

                     <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>






    </div>
    <!-- /#wrapper -->

     <!-- jQuery -->
   

</body>

<footer class="footer">
           
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Gestión de la Salud Publica. Versión 4.0 - 2020 <a href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
                    </div>
               
        </footer><!-- end footer -->
                   





                                
                       




                      

                   



