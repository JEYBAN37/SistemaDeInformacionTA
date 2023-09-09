<?php

/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'Aplicativo APS - Pasto');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('APS - Ficha Familia'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');


    echo $this->Html->css(array('cake.generic.css'));
    echo $this->Html->script(array('jquery-1.11.0', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min'));
    echo $this->fetch('css');
    echo $this->fetch('script');

    ?>

    <!-- Latest compiled and minified CSS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Responsive</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="contanier">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3366CC;">
            <a class="navbar-brand" href="#">
                <img src="https://m.www.gov.co/assets/logos/transversales/GOVCO.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-md-2" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php echo $this->Html->link(('Modulo Familias'), array('controller' => 'familias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    </li>
                    <li class="nav-item">
                        <?php echo $this->Html->link(('Modulo Sociambiental'), array('controller' => 'Sociambientals', 'action' => 'add'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    </li>
                </ul>
            </div>
        </nav>

        <div>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false)
        );
        ?>
    </div>
</body>

</html>