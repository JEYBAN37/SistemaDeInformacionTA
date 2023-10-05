<?php
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



    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/searchbuilder/1.0.0/css/searchBuilder.dataTables.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/searchbuilder/1.0.0/js/dataTables.searchBuilder.min.js"></script>



    <!--style>
        /* Enlaza las fuentes locales */
        @font-face {
            font-family: 'MiFuenteRegular';
            src: url('fonts/Roboto/Roboto-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'MiFuenteBold';
            src: url('fonts/Roboto/Roboto-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        /* Estilos para la barra de navegación */
        .navbar {
            background-color: #3366CC;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-brand img {
            width: 120%;
            /* Cambiar el ancho de la imagen al 100% del contenedor */
            height: auto;
            margin-top: -20px;
        }

        /* Estilos para el botón de alternancia */
        .navbar-toggler {
            display: none;
            /* Oculta el botón en pantallas grandes */
        }

        /* Estilos para la lista de menú en dispositivos pequeños */
        .navbar-nav {
            justify-content: space-between;
            list-style: none;
            align-items: flex-start;
            display: flex;
            padding: 40px;
        }

        .navbar-nav li {
            justify-content: space-between;
            list-style: none;
            align-items: flex-start;
            display: flex;
            padding: 40px;

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

        /*Menù lateral*/
        #btn-menu {
            display: none;
            font-size: 40px;
        }

        .container-menu {
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            transition: all 500ms ease;
            opacity: 0;
            visibility: hidden;
        }

        #btn-menu:checked~.container-menu {
            opacity: 1;
            visibility: visible;
        }

        .cont-menu {
            width: 100%;
            max-width: 250px;
            background: #3366CC;
            height: 100vh;
            position: relative;
            transition: all 500ms ease;
            transform: translateX(-100%);
        }

        #btn-menu:checked~.container-menu .cont-menu {
            transform: translateX(0%);
        }

        .cont-menu nav {
            transform: translateY(15%);
        }

        .cont-menu nav a {
            display: block;
            text-decoration: none;
            padding: 20px;
            color: #fff;
            border-left: 5px solid transparent;
            transition: all 400ms ease;
        }

        .cont-menu nav a:hover {
            border-left: 5px solid #c7c7c7;
            background: #05429A;
        }

        .cont-menu label {
            position: absolute;
            right: 10px;
            top: 1px;
            color: #fff;
            cursor: pointer;
            font-size: 40px;
        }




        /*Fin de Menù lateral*/
    </style-->


</head>

<body>


    <div class="contanier">

        <!--nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3366CC;">

            <div class="btn-menu">
                <label for="btn-menu" style="color: white;  font-size: 30px; padding-right: 100px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  ">☰</label>
            </div>

            <a class="navbar-brand" href="#">
                <img src="https://tramites.pasto.gov.co/info/pasto_se/media/bloque3.png" alt="">
            </a>

        </nav-->

        <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <?php echo $this->element('nav'); ?>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>

        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <nav>
                    <a>
                        <?php echo $this->Html->link(('Agregar Nueva vivienda'), array('controller' => 'Sociambientals', 'action' => 'add'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    </a>
                    <a>
                        <?php echo $this->Html->link(('Registros familias'), array('controller' => 'familias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    </a>
                    <a href="#">Registros primera infancia</a>
                    <a href="#">Registros infancia</a>
                    <a href="#">Registros adolescencia</a>
                    <a href="#">Registros mayores 18 años </a>
                </nav>
                <label for="btn-menu" style="color: white;">x
                </label>
            </div>
        </div>
        <!--?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false)
        );
        ?-->


        <!--?php echo $this->element('sql_dump'); ?-->


    </div>
    </div>
    </div>

    </div>

</body>


<footer class="footer">


    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <div class="copyright">&copy; Gestión de la Salud Publica. Versión 1.0 - 2023 <a
                    href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
        </div>
    </div>

</footer><!-- end footer -->




</html>