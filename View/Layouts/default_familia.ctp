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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js">
    </script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchbuilder/1.0.0/css/searchBuilder.dataTables.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchbuilder/1.0.0/js/dataTables.searchBuilder.min.js"></script>

    <style>
        /* Estilos para la barra de navegación */
        .navbar {
            background-color: #3366CC;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-brand img {
            max-height: 100px;
            max-width: 1000px;
            margin-top: -10px;
        }

        /* Estilos para el botón de alternancia */
        .navbar-toggler {
            display: none;
            /* Oculta el botón en pantallas grandes */
        }

        /* Estilos para la lista de menú en dispositivos pequeños */
        .navbar-nav {
            list-style: none;
            padding: 0;
            display: flex;
        }

        .navbar-nav li {
            margin-right: 20px;
        }

        /* Estilos para el icono del botón de alternancia */
        .navbar-toggler-icon {
            width: 30px;
            height: 3px;
            background-color: white;
            display: block;
        }

        /* Estilos para el botón de alternancia en dispositivos pequeños */
        .navbar-toggle-button {
            display: block;
            cursor: pointer;
        }

        /* Estilos para la lista de menú en dispositivos pequeños */
        .navbar-collapse {
            display: none;
            /* Oculta la lista en pantallas grandes */
        }

        .navbar-collapse.active {
            display: block;
            /* Muestra la lista en dispositivos pequeños */
        }

        /* Estilos para los elementos de menú */
        .navbar-nav li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>


</head>

<body>


    <div class="contanier">

        <nav class="navbar">
            <!-- Marca de la barra de navegación -->
            <span class="navbar-brand">
                <img src="https://m.www.gov.co/assets/logos/transversales/GOVCO.svg" alt="">
            </span>
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
                <div class="copyright">&copy; Gestión de la Salud Publica. Versión 6.0 - 2023 <a href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->




</html>