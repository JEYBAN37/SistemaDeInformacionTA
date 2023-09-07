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
$cakeDescription = __d('cake_dev', 'Aplicativo APS - Pasto');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->charset(); ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APS - Ficha Familiar</title>


    <?php

    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min.css'));
    echo $this->Html->script(array('jquery.min',  'bootstrap.min', 'jquery.dataTables.min'));
    echo $this->fetch('css');
    echo $this->fetch('script');

    ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js">
    </script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>





</head>

<body>


    <div class="contanier">

        <nav class="navbar" style="background-color: #3366CC;">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 JustifyCenter">
                    <img src="https://m.www.gov.co/assets/logos/transversales/GOVCO.svg" alt="">
                </span>
            </div>


        </nav>
        <?php echo $this->element('nav'); ?>
        <div>
            <div>
                <!--h1>ficha familiar</h1-->
            </div>
            <div>

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <!--div>
			<?php echo $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                'http://www.cakephp.org/',
                array('target' => '_blank', 'escape' => false)
            );
            ?>
		</div-->

            <!--?php echo $this->element('sql_dump'); ?-->


        </div>
    </div>
    </div>

    </div>

</body>


<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Gestión de la Salud Publica. Versión 6.0 - 2023 <a
                        href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->




</html>